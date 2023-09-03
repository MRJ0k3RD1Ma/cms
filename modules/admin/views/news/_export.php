<?php
//$dp=new \yii\data\ActiveDataProvider();
//$dp->getTotalCount();

$labels=[];
if($data->getTotalCount())
    $labels=$data->getModels()[0]->attributeLabels();

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<div class="wrapper border-bottom white-bg mptop">
    <?php $form = ActiveForm::begin(['options'=>['id'=>'exportform']]); ?>
    <!-- /.card-header -->
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <select name="attributes[]" class="duallistbox" multiple="multiple">
<!--                        <option selected value="tr">Тартиб рақам</option>-->
                        <?php foreach ($labels as $key=>$label):if($key!='id'  &&  $key!='updated'  && $key!='image' && $key!='status' && $key!='vote' && $key!='tags' && $key!='slider' && $key!='sort' && $key!='active' && $key!='modify_by' ):?>
                            <option <?=$key=='name'||$key=='code'||$key=='created'||$key=='show_counter'?'selected':''?> value="<?=$key?>"><?=$label?></option>
                        <?php endif; endforeach;?>
                    </select>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
        </div>
    <p></p>
        <!-- /.row -->
    <!-- /.card-body -->
    <div class="card-footer">
         Экспорт қилинадиган маълумотларни танланг
        <?= Html::submitButton('<i class="fa fa-file-excel"></i>  Экспорт', ['class' => 'btn btn-success btn-sm','style'=>'float:right','id'=>'submitbutton']) ?>

    </div>
    <?php ActiveForm::end(); ?>
</div>
<!-- /.card -->

<?php
$url = Yii::$app->request->url;
$this->registerJs("
$(function () {
   
    $('.duallistbox').bootstrapDualListbox()

  })
  
  
  
");