<?php

/** @var string $title */
/** @var \app\models\News $latest_new */
/** @var \app\models\News $latest */
/** @var \app\models\News $photo_album */
/** @var \app\models\Category $category_for_slider */
$this->title = $title;

use app\models\News;
use yii\helpers\Url; ?>


<h2 class="title-section">Сўнгги янгиликлар</h2>

<?php foreach ($latest as $item):?>
    <div class="info-suppliers__list d-flex flex-wrap">
        <div class="info-suppliers__item info-suppliers__item--hero">
            <div class="info-suppliers__image-wrap ratio">
                <img src="/uploads/<?= $item->image?>" alt="<?= $item->name?>">
            </div>
            <div class="info-suppliers__info formatted-body">
                <h3><a href="<?= Yii::$app->urlManager->createUrl(['/site/view','code'=>$item->code])?>" style="color: #3e3e3e;"><?= $item->name?></a></h3>
                <p> - <?= mb_substr($item->preview,0,255)?></p>
                Сана: <?= $this->render('_date',['date'=>$item->created])?><br />
                Бўлим: <a href="<?= Yii::$app->urlManager->createUrl(['/site/news','code'=>$item->cat->code])?>"><?= $item->cat->name?></a>
            </div>
        </div>
    </div>
<?php endforeach;?>


<a href="#" class="header__safety-btn btn btn--type-2 btn--animate-slide form-control"><span class="fa fa-newspaper-o" style="margin-right: 10px;"> </span> Барча янгиликларни кўриш</a>
