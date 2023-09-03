<?php

namespace app\modules\admin\controllers;

use app\models\Category;
use app\models\Page;
use Yii;
use app\models\News;
use app\models\search\NewsSearch;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if($post=Yii::$app->request->post()){
            $attributes=$post['attributes'];
            $persondata=$dataProvider->query->all();
            $data=\yii\helpers\ArrayHelper::toArray($persondata,[
                'app\models\Person'=>$attributes]);

            $labels = $dataProvider->getModels()[0]->attributeLabels();
            $label=['Т\р'];

            $date = date('d.m.Y');
            $url = Url::base('http');
            $start = date('d.m.Y',strtotime($searchModel->start_date));
            $end = date('d.m.Y',strtotime($searchModel->end_date));
            $count = $dataProvider->totalCount;
            $outpul = "
            <html xmlns:x=\"urn:schemas-microsoft-com:office:excel\">
            <head>
                <!--[if gte mso 9]>
                <xml>
                    <x:ExcelWorkbook>
                        <x:ExcelWorksheets>
                            <x:ExcelWorksheet>
                                <x:Name>Sheet 1</x:Name>
                                <x:WorksheetOptions>
                                    <x:Print>
                                        <x:ValidPrinterInfo/>
                                    </x:Print>
                                </x:WorksheetOptions>
                            </x:ExcelWorksheet>
                        </x:ExcelWorksheets>
                    </x:ExcelWorkbook>
                </xml>
                <![endif]-->
                <style>
                td,th{
                  font-family: 'Times New Roman', sans-serif;
                  border-collapse: collapse;
                  width: 100%;
                }
            
                 td,  th {
                  border: 1px solid #000;
                  padding: 4px;
                }
                th{
                    font-weight: bold;
                }
                </style>
            </head>
            
            <body>
            <table class='table'>
            <tr><td colspan='5'>{$start} - {$end} ҳолатига {$url} сайтига қўйилган маълумотлар ҳисоботи</td></tr>
            <tr><td colspan='5'>Умумий {$count} та маълумот жойланган</td></tr>
            <tr><th>Т\р</th>";

            foreach ($attributes as $item) {
                $outpul.="<th>$labels[$item]</th>";
            }
            $outpul.="</tr>";
            $n=0;


            foreach ($persondata as $item){

                $n++;
                $outpul .= "<tr>";
                $outpul.="<td>$n</td>";

                foreach ($attributes as $i){
                    if($i=='Т\р'){
                        continue;
                    }
                    if($i == 'code'){
                        $url = Url::base('http').Yii::$app->urlManager->createUrl(['/site/view','code'=>$item->code]);
                        $outpul .= "<td><a href='{$url}'>{$url}</a></td>";
                    }elseif($i == 'created'){
                        $t = date('d.m.Y',strtotime($item->created));
                        $outpul .= "<td>{$t}</td>";
                    }elseif($i == 'name'){
                        $outpul .= "<td>{$item->name}</td>";
                    }elseif($i=='cat_id'){
                        $outpul .= "<td>{$item->cat->name}</td>";
                    }elseif($i == 'show_counter'){
                        $outpul .= "<td>{$item->show_counter}</td>";
                    }elseif($i=='lang_id'){
                        $outpul .= "<td>{$item->lang->language}</td>";
                    }
                }
                $outpul .= "</tr>";
            }

            $outpul .= "</table></body></html>";
            header("Content-Disposition: attachment; filename=\"report.xls\"");
            header("Content-Type: application/vnd.ms-excel");
            echo $outpul;
            exit;
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();
//        $model->scenario = "insert";
        if ($model->load(Yii::$app->request->post())) {

            $model->created = date("Y-m-d h:i:s", strtotime($model->created));
            $model->uploadimage();
            if(!$model->code){
                $model->codegenerate();
            }else{
                if(Page::findOne(['code'=>$model->code])){
                    $model->codegenerate();
                }
            }

            $model->save();

            $c = Category::findOne($model->cat_id);
            $count = News::find()->where(['cat_id'=>$model->cat_id])->count();
            if($count == 0){
                $c->icon = "#";
            }elseif($count == 1){
                $c->icon = "/site/page";
            }else{
                $c->icon = "/site/news";
            }
            $c->save();
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $im = $model->image;
        $c = $model->code;
        $old_cat_id = $model->cat_id;
        if ($model->load(Yii::$app->request->post())) {
            $model->uploadimage($im);
            if($model->code != $c){
                $model->codegenerate(1);
            }
            $model->sort ++;
            $model->save();

            $c = Category::findOne($model->cat_id);
            $count = News::find()->where(['cat_id'=>$model->cat_id])->count();
            if($count == 0){
                $c->icon = "#";
            }elseif($count == 1){
                $c->icon = "/site/page";
            }else{
                $c->icon = "/site/news";
            }
            $c->save();
            $c = null;
            $c = Category::findOne($old_cat_id);
            $count = News::find()->where(['cat_id'=>$old_cat_id])->count();
            if($count == 0){
                $c->icon = "#";
            }elseif($count == 1){
                $c->icon = "/site/page";
            }else{
                $c->icon = "/site/news";
            }
            $c->save();
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->delete();
        $m = $model->cat_id;
        $c = Category::findOne($m);
        $count = News::find()->where(['cat_id'=>$m])->count();
        if($count == 0){
            $c->icon = "#";
        }elseif($count == 1){
            $c->icon = "/site/page";
        }else{
            $c->icon = "/site/news";
        }
        $c->save();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionStatus($id){

        $model = $this->findModel($id);
        $model->status = $model->status == 0 ? 1 : 0;
        if($model->save()){
            return $model->status;
        }else{
            return 2;
        }
    }

}
