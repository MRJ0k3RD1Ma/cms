<div class="newspaper-main-menu" id="stickyMenu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">

            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <div class="logo">
                    <a href="<?= Yii::$app->urlManager->createUrl(['site/index'])?>"><img style="width:60px;" src="/gerb.png" alt=""></a>
                </div>

                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <div class="classy-menu">

                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <div class="classynav">

                        <?= \app\components\MenuBuilder::generate('menu')?>


                    </div>

                </div>
            </nav>

        </div>
    </div>
</div>