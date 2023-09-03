<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StaticText */

$this->title = 'Update Static Text: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Admin', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Static Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wrapper border-bottom white-bg mptop">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
