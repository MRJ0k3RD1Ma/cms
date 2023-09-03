
<header id="masthead" class="site-header" style="">

    <div class="saga-header">
        <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div class="saga-topnav">
            <div class="container">

                <div class="top-bar-left">
                    <div class="top-navigation">

                        <ul id="menu-top-menu">
                            <li><a href="/site/view?code=bayroq"><img src="/icon/flag.png"></a></li>
                            <li><a href="/site/view?code=gerb"><img src="/icon/gerb.png"></a></li>
                            <li><a href="/site/view?code=madhiya"><img src="/icon/gimn.png"></a></li>
                            <li>/</li>
                            <li><a href="/site/rss" title="RSS"><i class="fa fa-rss"></i></a></li>
                            <li><a href="/site/map" title="Sayt xaritasi"><i class="fa fa-sitemap"></i></a></li>
                            <li><a href="#" title="Maxsus imkoniyatlar"><i class="fa fa-eye"></i></a></li>
                            <li><a href="/admin" title="Saytga kirish"><i class="fa fa-sign-in"></i></a></li>

                        </ul>
                    </div>
                </div>

                <div class="top-bar-right">
                    <div class="social-navigation">
                        <ul id="menu-social-menu" class="">
                            <li>
                                <a target="_blank" href="http://facebook.com"><span class="screen-reader-text">facebook</span></a>
                            </li>
                            <li>
                                <a target="_blank" href="http://youtube.com"><span class="screen-reader-text">youtube</span></a>
                            </li>
                            <li>
                                <a target="_blank" href="http://instagram.com"><span class="screen-reader-text">instagram</span></a></li>
                            <li>
                                <a target="_blank" href="http://t.me"><span class="fa fa-paper-plane-o"></span> <span class="screen-reader-text">linkedin</span></a>
                            </li>
                            <li >
                                <a target="_blank" href="http://twitter.com"><span class="screen-reader-text">twitter</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="site-brand-add">
            <div class="container">
                <div class="row" style="margin:0;">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4" style="padding:0;">

                                <a href="<?= Yii::$app->urlManager->createUrl(['site/index'])?>" class="custom-logo-link" rel="home"
                                   itemprop="url"><img  style="height:150px; width:auto" src="/logo.png"
                                                        class="custom-logo" alt="logo" itemprop="logo"/></a>

                            </div>
                            <div class="col-md-8" style="padding:0;">
                                <h1 style="margin:0;margin-top:25px; border-bottom:1px solid #c0c0c0"><a href="<?= Yii::$app->urlManager->createUrl(['site/index'])?>" style="font-size:34px; margin:0;" rel="home">
                                        Хоразм вилояти автойўл ҳудудий бош бошқармаси
                                    </a></h1>
                                <p style="margin:0; font-size:20px;">Расмий веб сайти</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row" style="margin:0;">

                            <div class="col-md-6">
                                <div class="info-box-card">
                                    <h2>
                                        Ишонч телефони<br>
                                        <span>+998(62)</span> <span>123-45-67</span>
                                    </h2>

                                </div>
                                <div class="info-box-card">
                                    <h2>
                                        Ягона телефони <br>
                                        <span>+998(62)</span> <span>123-45-67</span>
                                    </h2>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="info-contact-box">
                                    <a class="btn btn-default form-control" href="<?= Yii::$app->urlManager->createUrl(['site/contact']) ?>"><i class="fa fa-envelope"></i> Боғланиш</a>
                                </div>
                                <div class="info-contact-box">
                                    <a class="btn btn-default form-control" href="<?= Yii::$app->urlManager->createUrl(['#']) ?>"><span class="fa fa-clock-o"></span> Қабул кунлари</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="em-header-menu" class="em-header-menu-wrap">
            <div class="container">
                <div class="main-navigation">
                    <nav id="site-navigation" class="main-navigation" role="navigation"
                         aria-label="Primary Navigation">
                <span class="toggle-menu" aria-controls="primary-menu" aria-expanded="false">
                     <span class="screen-reader-text">Menyu</span>
                     <i class="ham"></i>
                </span>
                        <div class="menu primary-navigation">


                            <?= \app\components\MenuBuilder::generate('menu')?>
                        </div>
                    </nav>
                </div>
                <div class="cart-search">
                    <div class="saga-search-wrap">
                        <div class="search-overlay">
                            <a href="#" title="Қидирув" class="search-icon">
                                <i class="fas fa-search"></i>
                            </a>
                            <div class="saga-search-form">
                                <form role="search" method="get" class="search-form"
                                      action="<?= Yii::$app->urlManager->createUrl(['site/search'])?>">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Калит сўзни киритинг &hellip;"
                                               value="" name="s"/>
                                    </label>
                                    <input type="submit" class="search-submit" value="Қидирув"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header><!-- #masthead -->
