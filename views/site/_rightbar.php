<div class="col-12 col-md-4 col-lg-4">

    <div class="section-heading" style="margin-bottom:0;">
        <h6>Оммабоб янгиликлар</h6>
    </div>

    <?php $n=0; foreach (\app\models\News::find()->where(['status'=>1])->orderBy(['show_counter'=>SORT_DESC])->limit(9)->all() as $item): $n++;?>
        <div class="single-blog-post small-featured-post d-flex" <?php if($n==9) echo "style='border-bottom:none;'"?>>

            <div class="post-thumb">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/view','code'=>$item->code])?>"><img src="/uploads/<?= $item->image?>" alt=""></a>
            </div>
            <div class="post-data">
                <a href="<?= Yii::$app->urlManager->createUrl(['site/news','code'=>$item->cat->code])?>" class="post-catagory"><?= $item->cat->name ?></a>
                <div class="post-meta">
                    <a href="<?= Yii::$app->urlManager->createUrl(['site/view','code'=>$item->code])?>" class="post-title">
                        <h6><?= $item->name?></h6>
                    </a>
                    <p class="post-date"><?= $this->render('_date',['date'=>$item->created])?></p>
                </div>
            </div>
        </div>
    <?php endforeach;?>

    <div class="section-heading" style="margin-bottom:10px;">
        <h6>Валюталар курси</h6>
    </div>

    <a href="http://cbu.uz/" style="margin-bottom:10px;" target="_blank" title="Центральный банк Республики Узбекистан">
        <img src="http://cbu.uz/uzc/informer/?r_choose=USD_EUR_RUB" alt="" width="350" height="175">
    </a>

    <div class="section-heading" style="margin-bottom:10px;margin-top:10px;">
        <h6>Давлат дастури</h6>
    </div>

    <a href="http://dd.gov.uz">
        <img src="/image/davlat-dasturi.png" alt="" style="width:350px; height:auto">
    </a>

</div>
