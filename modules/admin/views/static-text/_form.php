<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaticText */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="static-text-form">

    <?php $form = ActiveForm::begin(['action'=>$model->isNewRecord ? Yii::$app->urlManager->createUrl(['/admin/static-text/create']) : Yii::$app->urlManager->createUrl(['/admin/static-text/update','id'=>$model->id])]); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lang_id')->dropDownList(\app\components\ArrayMaps::language()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Saqlash' : 'Saqlash', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
