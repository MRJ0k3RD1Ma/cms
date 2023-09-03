<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
$this->params['breadcrumbs'][] = $name;

use yii\helpers\Url; ?>



<div class="container">

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="homepage-widgetarea general-widget-area">

                <?= $this->render('/layouts/_brandcrubs')?>
                <div id="eximious_magazine_single_column_posts-1"
                     class="widget eximious_magazine widget_single_column_posts">
                    <div class="eximious_magazine_single_column_posts  display_style_2 ">
                        <div class="article-block-wrapper clearfix">
                            <header class="entry-header">
                                <h1 class="entry-title"><?= Html::encode($this->title) ?></h1>

                                <div class="alert alert-danger">
                                    <?= nl2br(Html::encode($message)) ?>
                                </div>

                                <p>
                                    The above error occurred while the Web server was processing your request.
                                </p>
                                <p>
                                    Please contact us if you think this is a server error. Thank you.
                                </p>
                            </header>
                        </div>
                    </div>

                </div>


            </div>
        </main><!-- #main -->
    </div><!-- #primary -->


</div>
