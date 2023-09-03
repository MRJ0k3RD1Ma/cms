<!--Sidebar Side-->
<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <aside class="sidebar default-sidebar right-sidebar">

        <!--About Widget-->
        <div class="sidebar-widget about-widget">
            <div class="sidebar-title">
                <h2>Туман ҳокими</h2>
            </div>
            <style>
                .about-widget .widget-content .inner .text{
                    margin-left:35px !important;
                    text-align: left !important;
                }
                .adds-block .inner-box{
                    padding:0;
                }
                .adds-block .inner-box:before{
                    content: '';
                    background: #fff !important;

                }
            </style>
            <div class="widget-content">
                <div class="inner">
                    <div class="image">
                        <img src="/static/bogot_hokimi.jpg" alt="" />
                    </div>
                    <div class="name"><span class="theme_color"><a href="https://pm.gov.uz" target="_blank">Холбоев Ойбек Мадаминович</a></span></div>
                    <div class="text">
                        Боғот тумани Ўзбекистон кўчаси 18 уй, 220200 <br>
                        <b>E-mail</b>: <a href="mailto:info@bagatdistrict.uz">info@bagatdistrict.uz</a>
                        <br>
                        <b>Веб-сайт</b>: <a href="http://bagatdistrict.uz">bagatdistrict.uz</a> <br>
                        <b>Тел</b>: (0362) 31-56-176 <br>
                        <b>Қабул</b>: Ҳар ҳафтанинг чоршанба куни соат 10. 00дан Боғот тумани ҳокимлиги биноси фуқароларни қабул қилиш хонасида (1 қават)
                        <br>
                        <a href="https://pm.gov.uz" target="_blank" class="btn btn-primary" style="text-align: center">Онлайн қабулхона</a>
                    </div>
                </div>
            </div>
        </div>



        <!--Adds Widget-->
        <div class="sidebar-widget sidebar-adds-widget">
            <div class="adds-block">
                <div class="inner-box">
                    <a href="http://cbu.uz/" target="_blank" title="Центральный банк Республики Узбекистан">
                        <img src="http://cbu.uz/uzc/informer/?r_choose=USD_EUR_RUB" alt="" width="340" height="283">
                    </a>
                </div>
            </div>
        </div>
        <!--Ends Adds Widget-->

        <?= $this->render('/site/_vote')?>

        <div class="sidebar-widget categories-widget">
    <div class="sidebar-title">
        <h2>
            Оммабоб янгиликлар
        </h2>
    </div>
    <ul class="cat-list">
        <?php $top = \app\models\News::find()->where(['status'=>1])->orderBy(['show_counter'=>SORT_DESC])->limit(10)->all();
            foreach($top as $item):
        ?>
        <li class="clearfix"><a href="<?= Yii::$app->urlManager->createUrl(['site/view','code'=>$item->code])?>"><?= $item->name?></a></li>
    <?php endforeach; ?>

    </aside>
</div>
