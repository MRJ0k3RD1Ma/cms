<?php foreach ($model as $item):?>
<li class="col-md-4 col-sm-6 col-xs-12">
    <div class="tag" style="font-size: 14px;">
        <?= $item->name?>
    </div>
    <div class="news_info">
        <div class="tag_date" style="font-size: 14px;"><?= $this->render('_date',['date'=>$item->created])?></div>
        <a href="<?= Yii::$app->urlManager->createUrl(['/site/view','code'=>$item->code])?>" class="tag_link" style="font-size: 14px;">Батафсил</a>
    </div>
</li>
<?php endforeach;?>