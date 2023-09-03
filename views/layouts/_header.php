<?php
echo $this->render('_top')
?>
<!--Header Start-->
<header class="header-style-2">
    <nav class="navbar navbar-expand-lg" style="    margin-left: 15px;">
        <a class="navbar-brand" href="/"><span class="fa fa-home"></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?=\app\components\MenuBuilder::generate('_menu')?>
            <ul class="topnav-right">
                <li> <a class="search-icon" href="#search"> <i class="fas fa-search"></i> </a> </li>
            </ul>
        </div>
    </nav>
</header>
<div id="search">
    <button type="button" class="close">×</button>
    <!--            </form>-->
    <form class="search-overlay-form" action="<?= Yii::$app->urlManager->createUrl(['site/search']) ?>">
        <input type="search" value="" name="s" placeholder="Kalit soʼz kiriting ..." />
        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
    </form>
</div>
<!--Header End-->