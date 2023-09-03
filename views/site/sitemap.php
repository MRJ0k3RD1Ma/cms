<?php
$class = "vmagazine-lite-home-wrapp";
switch (Yii::$app->controller->action->id){
    case 'news': $class = "vmagazine-lite-container"; break;
    case 'view': $class = "vmagazine-lite-container";break;
}
$this->title="Сайт харитаси";
$this->params['breadcrumbs'][] = $this->title;
//$posts=\app\models\News::find()->where(['cat_id'=>$model->cat_id])->andWhere(['<>','id',$model->id])->orderBy(['created'=>SORT_DESC])->limit(8)->all();

use yii\helpers\Url; ?>




<div class="container">

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="homepage-widgetarea general-widget-area">

                <?= $this->render('/layouts/_brandcrubs')?>

                <div id="eximious_magazine_single_column_posts-1"
                     class="widget eximious_magazine widget_single_column_posts">
                    <div class="eximious_magazine_single_column_posts  display_style_2 ">
                        <div class="article-block-wrapper clearfix sitemap">

                            <?php
                            /**
                             * Created by PhpStorm.
                             * User: Dilmurod
                             * Date: 27.01.2019
                             * Time: 21:23
                             */

                            echo \app\components\MenuBuilder::generateLordsMapItem();



                            ?>

                            <li><a href="<?= Yii::$app->urlManager->createUrl(['site/contact'])?>">Боғланиш</a></li>
                            <li><a href="<?= Yii::$app->urlManager->createUrl(['site/sitemap'])?>">Сайт харитаси</a></li>

                        </div>
                    </div>

                </div>
        </div>

        </main>
    </div>



    <?= $this->render('_secondary')?>

</div>



<style>
    .sitemap>ul{
        /*list-style: none;*/
        display: inline-block;
    }
    .sitemap>ul>li{
        /*display: inline-block;*/
        list-style: circle;
    }
    .sitemap>li>ul>li{
        /*list-style-type: circle;*/
        list-style: circle !important;
        margin-left:10px;
        /*display: block;*/
    }
</style>