
<div class="sidebar" >
    <!--Widget Start-->


    <div class="side-widget">
        <h5>Qidirish</h5>
        <div class="side-search">
            <?php $form = ActiveForm::begin(['action' => Yii::$app->urlManager->createUrl(['site/search']),'method'=>'get']);

            ?>

            <input type="search" class="form-control" autocomplete="off" placeholder="Kalit soʼz kiriting ..."
                   value="" name="s">
            <button type="submit"><i class="fas fa-search"></i></button>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <!--Widget End-->
    <?= $this->render('_cat',['code'=>$code])?>

    <!--Widget Start-->
    <div class="side-widget">
        <h5>Ommabop maqolalar</h5>
        <ul class="lastest-products">
            <?php $model = \app\models\News::find()->where(['>', 'id', 3])->orderBy(['show_counter' => SORT_DESC])->limit(7)->all();
            foreach ($model as $item) { ?>
                <li> <strong>
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/view', 'code' => $item->code]) ?>">
                            <?= mb_substr($item->name,0,80,"utf-8") ?>...
                        </a></strong> <span class="pdate"><i
                                class="fas fa-calendar-alt"></i> <?= Yii::$app->formatter->asDate($item->created) ?></span>
                </li>
            <?php }
            ?>
        </ul>
    </div>
    <!--Widget Start-->
    <!--Widget Start-->
    <div class="side-widget ">
        <h5>Davlat dasturi</h5>
        <img src="/bg/ddgovuz.jpg" style="width:100%;" alt="">
    </div>
    <!--Widget End-->
    <div class="side-widget project-list-widget">
        <?= $this->render('_vote') ?><br>


    </div>
    <div class="side-widget">
        <h5 class="widget-title">
            <span class="title-bg">Валюталар курслари</span></h5>

        <a title="Ўзбекистон Республикаси Марказий банки" href="http://cbu.uz/uz/arkhiv-kursov-valyut/" target="_blank"
           rel="noopener"><img style="display: block; margin-left: auto; margin-right: auto; width:100%"
                               src="http://cbu.uz/uz/informer/?txtclr=ffffff&amp;brdclr=3399cc&amp;bgclr=3399cc&amp;r_choose=USD_EUR_RUB"
                               alt=""></a>

    </div>

</div>