<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Боғланиш';
$this->params['breadcrumbs'][] = $this->title;
Use yii\helpers\Url; ?>



<div class="container">

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="homepage-widgetarea general-widget-area">

                <?= $this->render('/layouts/_brandcrubs')?>

                <div id="eximious_magazine_single_column_posts-1"
                     class="widget eximious_magazine widget_single_column_posts">
                    <div class="eximious_magazine_single_column_posts  display_style_2 ">
                        <div class="article-block-wrapper clearfix sitemap">

                            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                                <h2>Bog'lanish</h2>
                                <div class="alert alert-success">
                                   Murojaatingiz uchun tashakkur. Kengash tomonidan murojaatingiz o'rganilib chiqladi hamda sizga bo'laniladi.
                                </div>



                            <?php else: ?>
                                <h2>Bog'lanish</h2>
                                <hr>
                            <p>
                               Kengash uchun ariza, taklif, shikoyat va boshqa turdagi murojjatingiz bo'lsa bizga yozing. Murojaatingiz albatta kengash tomonidan ko'rib chiqiladi. Tashakkur
                            </p>

                            <div class="row">
                                <div class="col-lg-11">

                                    <?php $form = ActiveForm::begin(); ?>

                                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                                    <?= $form->field($model, 'phone')->textInput()?>

                                    <?= $form->field($model, 'email')->textInput(['type'=>'email']) ?>

                                    <?= $form->field($model, 'subject') ?>

                                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                                    <?= $form->field($model, 'file')->fileInput() ?>


                                    <div class="form-group">
                                        <?= Html::submitButton('Yuborish', ['class' => 'btn btn-success pull-right', 'name' => 'contact-button']) ?>
                                    </div>

                                    <?php ActiveForm::end(); ?>

                                </div>
                            </div>
                            <?php endif;?>
                        </div><!-- #primary -->
                    </div>
                    <!--Blog Single Content End-->
                </div>
                <!--Sidebar Start-->




                <!--Sidebar End-->
            </div>
        </div>

    </div>