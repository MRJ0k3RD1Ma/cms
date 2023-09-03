<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страницы';
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="wrapper border-bottom white-bg mptop">
    <script>
        var person_export=function(){
         }
    </script>
<?php

Modal::begin([

    'id'=>'export_modal',
    'size'=>'modal-dialog-centered modal-lg',
    'options'=>['class'=>'modal fade'],
//    'diologOptions'=>['class'=>'modal-dialog modal-dialog-centered'],
    'bodyOptions' => ['class' => 'modal-body','style'=>'padding:unset'],
    'headerOptions' => ['class' => 'modal-header','style'=>'display:none'],
    'closeButton' => [
        'id'=>'close_export',
        'class'=>'close',
        'data-dismiss' =>'modal',
    ],

]);
echo '<div class="row" style="margin:0 !important; padding: 10px; !important;">
            <div class="card-header">
                <h3 class="card-title" ><span id="title_modal">Экспорт</span></h3>
                
                </div>
            
            <div class="col-md-12" id="update_body">
                '.$this->render("_export",["data"=>$dataProvider]).'
            </div>
        </div>';
Modal::end();

$this->registerJs("
 person_export=function(){
        $('#export_modal').modal();
  }
")
?>

    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6">
            <p>
                <?= Html::a('<i class="fa fa-plus"></i> Qo\'shish', ['create'], ['class' => 'btn btn-success btn-lg']) ?>

                <?php $form = ActiveForm::begin(['options' => ['class' => 'form-inline'], 'method' => 'get']) ?>

                <?= $form->field($searchModel, 'start_date')->textInput(['type' => 'date'])->label('Дан:') ?>

                <?= $form->field($searchModel, 'end_date')->textInput(['type' => 'date'])->label('Гача:') ?>

                <button class="btn btn-success btn-lg" type="submit" >ОК</button>

                <?= Html::button('<i class="fa fa-file-excel"></i>  Экспорт', ['class' => 'btn btn-success btn-lg','onclick'=>'person_export()']) ?>

                <?php ActiveForm::end() ?>
            </p>
        </div>

    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'code'б
            'name',
//            'image',
//            'cat.name',
            [
                'attribute'=>'cat_id',
                'value'=>'cat.name',
                'filter'=>\app\components\ArrayMaps::categoryCustom()
            ],
            // 'preview:ntext',
            // 'detail:ntext',
            // 'sort',
//             'show_counter',
            // 'slider',
            // 'vote',
            // 'tags',
//             'author_id',
            [
                'attribute'=>'author_id',
                'value'=>'author.name',
                'filter'=>\app\components\ArrayMaps::Authors()
            ],
            // 'modify_by',
            // 'updated',

            // 'status',
//            'created',
            [
                'attribute'=>'status',
                'value'=>function($d){
                    $ch = $d->status == 1 ? 'checked' : '';
                    return "
                        <div class='checkboxcustom'>
                            <input type='checkbox' {$ch}  onchange='statuschanger({$d->id})'>
                        </div>
                    ";
                },
                'format'=>'raw',
                'filter'=>[1=>'Aktiv',0=>'Deaktiv']
            ],

            // 'active',

            ['class' => 'yii\grid\ActionColumn','template'=>'{update} {delete}'],
        ],
    ]); ?>
</div>




<?php

$url = Yii::$app->urlManager->createUrl(['admin/news/status']);
$this->registerJs("
    statuschanger = function(id){
        $.get('{$url}?id='+id).done(function(data){
            if(data==1){
                alert('Status aktivlashtirildi');
            }else if(data == 0){
                alert('Status Deaktivlashtirildi');
            }else{
                alert('Amalni bajarishdagi xatolik')
            }
        });
   }
")
?>