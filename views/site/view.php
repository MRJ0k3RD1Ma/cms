<?php

$this->title=$name;
$this->params['breadcrumbs'][] = ['label' => \app\models\Category::findOne($model->cat_id)->name, 'url' => [\yii\helpers\Url::to(['site/news','code'=>\app\models\Category::findOne($model->cat_id)->code])]];
$this->params['breadcrumbs'][] = $name;
$posts=\app\models\News::find()->where(['cat_id'=>$model->cat_id])->andWhere(['<>','id',$model->id])->orderBy(['created'=>SORT_DESC])->limit(8)->all();

use yii\helpers\Url; ?>

<section class="section s-breadcrumbs">
<?= $this->render('/layouts/_brandcrubs')?>

</section>



<div class="s-page__content">
    <article class="post">
        <div class="post__head d-flex flex-wrap justify-content-between">
            <div class="post__head-left">
                <h2 class="post__title"><?= $model->name?></h2>
            </div>

            <div class="post__head-right">
                <time class="post__date" datetime="<?= $this->render('_date',['date'=>$model->created])?>">
                    <svg class="icon icon--time">
                        <use xlink:href="#icon--time"></use>
                    </svg>
                    <?= $this->render('_date',['date'=>$model->created])?>
                </time>
            </div>
        </div>
        <style>.post__content img {margin: 20px 0px;max-width: 100%;}</style>
        <div class="post__content">
            <div class="formatted-body js-table-content">
                <?= $model->detail?>

                <hr>
                <style type="text/css">

                    #share-buttons img {
                        width: 35px;
                        padding: 5px;
                        border: 0;
                        display: inline;
                        text-align: right;
                    }

                </style>
                <!-- I got these buttons from simplesharebuttons.com -->
                <div id="share-buttons">

                    <span>Постни тарқатинг:</span>

                    <!-- Email -->
                    <a href="mailto:?Subject=<?= $model->name?>&amp;Body=<?= $model->preview?> <?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/view','code'=>$model->code])?>">
                        <img src="/icon/email.png" alt="Email" />
                    </a>

                    <!-- Facebook -->
                    <a href="http://www.facebook.com/sharer.php?u=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/view','code'=>$model->code])?>" target="_blank">
                        <img src="/icon/facebook.png" alt="Facebook" />
                    </a>

                    <!-- Google+ -->
                    <a href="https://plus.google.com/share?url=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/view','code'=>$model->code])?>" target="_blank">
                        <img src="/icon/google.png" alt="Google" />
                    </a>

                    <!-- LinkedIn -->
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/view','code'=>$model->code])?>" target="_blank">
                        <img src="/icon/linkedin.png" alt="LinkedIn" />
                    </a>



                    <!-- Twitter -->
                    <a href="https://twitter.com/share?url=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/view','code'=>$model->code])?>&amp;text=<?=$model->name?>" target="_blank">
                        <img src="/icon/twitter.png" alt="Twitter" />
                    </a>

                    <!-- VK -->
                    <a href="http://vkontakte.ru/share.php?url=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/view','code'=>$model->code])?>" target="_blank">
                        <img src="/icon/vk.png" alt="VK" />
                    </a>

                    <!-- VK -->
                    <a href="https://t.me/share/url?url=<?=\yii\helpers\Url::base(true).Yii::$app->urlManager->createUrl(['/site/view','code'=>$model->code])?>" target="_blank">
                        <img src="/icon/telegram.png" alt="VK" />
                    </a>
                </div>
            </div>
        </div>
    </article>
</div>

<section class="section s-partners">
    <div class="container">
        <div class="partners slick-slider js-partners">


            <?php foreach ($posts as $item):?>

            <div class="partners__slide">
                <a class="partners__link link link--image" href="https://gov.uz/" target="_blank">
                    <div class="pic"><img class="img" src="/uploads/<?= $item->image?>" alt="<?= $item->name?>"></div>
                    <div class="text"><span><?= mb_substr($item->name,0,100)?></span></div>
                </a>
            </div>

            <?php endforeach;?>



        </div>

    </div>
</section>
