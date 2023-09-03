<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\StaticTextSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Static Texts';
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper border-bottom white-bg mptop">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <p>
                <button type="button" onclick="resetform()" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Matn kiritish</button>
                <?php if(Yii::$app->session->hasFlash('error')){?>
                    <span class="text-warning" style="font-size:18px;"> <?php $a = Yii::$app->session->getFlash('error'); echo $a['username'] ?> </span>
                <?php }?>
                <?php if(Yii::$app->session->hasFlash('success')){?>
                    <span class="text-success" style="font-size:18px;"> <?php $a = Yii::$app->session->getFlash('success'); echo $a;?> </span>
                <?php }?>
            </p>
        </div>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'code',
            'text:ntext',
//            'lang_id',
            [
                'attribute'=>'lang_id',
                'value'=>'lang.language',
                'filter'=>\app\components\ArrayMaps::language()
            ],

            [
                'label'=>'',
                'value'=>function($d){
                    $del = Yii::$app->urlManager->createUrl(['/admin/static-text/delete','id'=>$d->id]);
                    return "
<button class='btn btn-link' style='padding:0 ' onclick='updatemodal({$d->id})'><span class='glyphicon glyphicon-pencil'></span></button>
 <a href=\"{$del}\" title=\"Delete\" aria-label=\"Delete\" data-pjax=\"0\" data-confirm=\"Are you sure you want to delete this item?\" data-method=\"post\"><span class=\"glyphicon glyphicon-trash\"></span></a>
";
                },
                'filter'=>false,
                'format'=>'raw'
            ],
        ],
    ]); ?>
</div>



    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Foydalanuvchi qo'shish</h4>
                </div>
                <div class="modal-body">
                    <?= $this->render('_form',['model'=>$model])?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Yopish</button>
                </div>
            </div>

        </div>
    </div>


<?php
$updateurl = Yii::$app->urlManager->createUrl(['/admin/static-text/update']);
$this->registerJs("

updatemodal = function(id){
    $.post('{$updateurl}?id='+id).done(function(data){
        if(data != 1){
            $('#updateform').empty();
            $('#updateform').append(data);
            
            $('#myModal1').modal();
        }else{
            alert('Bunday element mavjud emas');
        }
    })
    $('#myModal1').modal();
}

");
?>


