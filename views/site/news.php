<?php
$this->title = $name;
$this->params['breadcrumbs'][] = $name;

use yii\helpers\Url; ?>

<?= $this->render('/layouts/_brandcrubs')?>

<?php if (count($model) == 0) {
    echo $this->render('_searchnotfound');
} ?>


<?php foreach ($model as $item):?>
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



<?= \yii\widgets\LinkPager::widget(['pagination'=>$pages]);?>