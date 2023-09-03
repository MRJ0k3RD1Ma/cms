<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \kartik\datetime\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
    <div class="col-md-3">
        <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

        <img src="<?= $model->image == null ? '/profile.jpg' : '/profile/'.$model->image ?>" id="blah" alt="alt" class="img-responsive">

    </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6" style="margin:0;">
                    <?= $form->field($model, 'username')->textInput(['maxlength' => true,'autocomplete'=>'off']) ?>
                </div>
                <div class="col-md-6" style="margin:0;">
                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true,'type'=>'email']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'phone')->textInput(['maxlength' => true,'type'=>'number']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                </div>

            </div>


        </div>
    </div>







    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?>
        </div>
    </div>














    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Yaratish' : 'O\'zgartirish', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<?php

$this->registerJs("

        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
          }
        }
        
        $('#user-image').change(function() {
          readURL(this);
        });
");

?>