<?php

use yii\widgets\ActiveForm;


?>


<div id="secondary" class="sidebar-area">
    <div class="theiaStickySidebar">
        <aside class="widget-area">
            <div id="media_image-1" class="widget widget_media_image"><a
                        href="http://dd.gov.uz" target="_blank"><img
                            width="692" height="692"
                            src="/bg/dd.png"
                            class="image wp-image-169  attachment-full size-full" alt=""
                            style="max-width: 100%; height: auto;"/></a>
            </div>
            <div class="widget eximious_magazine widget_single_column_posts"><span class="widget-title" ></span>
                <div class="eximious_magazine_single_column_posts  display_style_2 ">
                    <div class="article-block-wrapper clearfix">
                        <h2 style="text-align: center; font-size: 19px;font-weight: bold;margin: 0;">Ўзбекистон Республикаси Президентининг расмий веб сайти</h2>
                        <div class="entry-image">
                            <a href="http://cbu.uz/" target="_blank" title="Центральный банк Республики Узбекистан">
                                <img src="/bg/prezident.png" alt="" style="height:auto; width:100%;">
                            </a>
                        </div>
                       <p style="text-align: center;">Ўзбекистон Республикаси Президентининг ижтимоий тармоқдаги саҳифалари</p>
                        <div class="profile-links social-icons-widget social-icons-large">
                            <div class="profile-link">
                                <a href="https://www.facebook.com/Mirziyoyev/?ref=ts&amp;fref=ts" class="profile-link-inner fa-facebook-block social-icons-icon">
                                    <i class="fa-facebook fa"></i>
                                </a>
                            </div>
                            <div class="profile-link">
                                <a href="https://twitter.com/president_uz" class="profile-link-inner fa-twitter-block social-icons-icon">
                                    <i class="fa-twitter fa"></i>
                                </a>
                            </div>
                            <div class="profile-link">
                                <a href="https://www.instagram.com/mirziyoyev_sh/" class="profile-link-inner fa-instagram-block social-icons-icon">
                                    <i class="fa-instagram fa"></i>
                                </a>
                            </div>
                            <div class="profile-link">
                                <a href="https://www.youtube.com/channel/UC61Jnumjuz8NXhSuLoZD2xg" class="profile-link-inner fa-youtube-block social-icons-icon">
                                    <i class="fa-youtube fa"></i>
                                </a>
                            </div>
                            <div class="profile-link">
                                <a href="https://t.me/shmirziyoyev" class="profile-link-inner fa-telegram-block social-icons-icon">
                                    <i style="margin-left:-5px;" class="fa-paper-plane-o fa"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="eximious_magazine_tab_posts-1" class="widget eximious_magazine widget_tab_posts">
                <div class="eximious_magazine_tab_posts">
                    <div class="tabbed-container">
                        <div class="tabbed-head">
                            <ul class="nav nav-tabs primary-background secondary-font" role="tablist">
                                <li role="presentation" class="tab tab-popular active">
                                    <a href="#em-popular-1" aria-controls="Popular" role="tab"
                                       data-toggle="tab" class="primary-bgcolor">
                                        <i class="fas fa-fire"></i>
                                        Оммабоб </a>
                                </li>
                                <li class="tab tab-recent">
                                    <a href="#em-recent-1" aria-controls="Recent" role="tab"
                                       data-toggle="tab" class="primary-bgcolor">
                                        <i class="fas fa-fire"></i>
                                        7 Кун </a>
                                </li>
                                <li class="tab tab-comment">
                                    <a href="#em-comment-1" aria-controls="Comments" role="tab"
                                       data-toggle="tab" class="primary-bgcolor">
                                        <i class="fas fa-fire"></i>
                                        1 Ой </a>
                                </li>
                            </ul>
                        </div>

                        <?php
                        $haft = getNewsWithDate(7,5);
                        $oy = getNewsWithDate(30,5);
                        $yil = getNewsWithDate(365,5);

                        ?>

                        <div class="tab-content">

                            <div id="em-popular-1" role="tabpanel" class="tab-pane active">
                                <?php foreach ($yil as $item):?>
                                <?php $url = Yii::$app->urlManager->createUrl(['site/view','code'=>$item->code])?>
                                    <div class="article-block-wrapper clearfix">
                                        <div class="entry-image">
                                            <a href="<?=$url?>">
                                                <img width="150" height="150"
                                                     src="/uploads/<?= $item->image?>"
                                                     class="attachment-thumbnail size-thumbnail wp-post-image"
                                                    /> </a>
                                        </div>
                                        <div class="article-details">
                                            <h3 class="entry-title">
                                                <a href="<?= $url?>">
                                                    <?= $item->name?> </a>
                                            </h3>

                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                            <div id="em-recent-1" role="tabpanel" class="tab-pane">
                                <?php foreach ($oy as $item):?>
                                    <?php $url = Yii::$app->urlManager->createUrl(['site/view','code'=>$item->code])?>
                                    <div class="article-block-wrapper clearfix">
                                        <div class="entry-image">
                                            <a href="<?=$url?>">
                                                <img width="150" height="150"
                                                     src="/uploads/<?= $item->image?>"
                                                     class="attachment-thumbnail size-thumbnail wp-post-image"
                                                /> </a>
                                        </div>
                                        <div class="article-details">
                                            <h3 class="entry-title">
                                                <a href="<?= $url?>">
                                                    <?= $item->name?> </a>
                                            </h3>

                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                            <div id="em-comment-1" role="tabpanel" class="tab-pane">
                                <?php foreach ($haft as $item):?>
                                    <?php $url = Yii::$app->urlManager->createUrl(['site/view','code'=>$item->code])?>
                                    <div class="article-block-wrapper clearfix">
                                        <div class="entry-image">
                                            <a href="<?=$url?>">
                                                <img width="150" height="150"
                                                     src="/uploads/<?= $item->image?>"
                                                     class="attachment-thumbnail size-thumbnail wp-post-image"
                                                /> </a>
                                        </div>
                                        <div class="article-details">
                                            <h3 class="entry-title">
                                                <a href="<?= $url?>">
                                                    <?= $item->name?> </a>
                                            </h3>

                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget eximious_magazine widget_single_column_posts"><span class="widget-title" ></span>
                <div class="eximious_magazine_single_column_posts  display_style_2 ">
                    <div class="article-block-wrapper clearfix">
                        <div class="entry-image">
                            <a href="http://cbu.uz/" target="_blank" title="Центральный банк Республики Узбекистан">
                                <img src="http://cbu.uz/uzc/informer/?r_choose=USD_EUR_RUB" alt="" style="height:auto; width:100%;">
                            </a>
                        </div>

                    </div>
                    <div class="article-block-wrapper clearfix">
                        <div class="entry-image">
                            <a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.uz/pogoda/21105" target="_blank"><img style="width:100%;" src="https://info.weather.yandex.net/21105/2_white.ru.png?domain=uz" border="0" alt="Яндекс.Погода"/><img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt="" border="0"/></a>
                        </div>

                    </div>

                    <div class="article-block-wrapper clearfix">
                        <div class="entry-image">
                            <?= $this->render('_vote') ?>
                        </div>

                    </div>

                    <span class="widget-title"><span>Фойдали ҳаволалар</span></span>

                    <div class="article-block-wrapper clearfix">
                        <div class="entry-image">
                            <a href="http://president.uz/uz" target="_blank">
                                <img src="/icon/pruz.png" style="width:100%; height:auto" />
                            </a>
                        </div>
                    </div>

                    <div class="article-block-wrapper clearfix">
                        <div class="entry-image">
                            <a href="https://pm.gov.uz/uz" target="_blank">
                                <img src="/icon/pmgov.png" style="width:100%; height:auto" />
                            </a>
                        </div>
                    </div>

                    <div class="article-block-wrapper clearfix">
                        <div class="entry-image">
                            <a href="https://www.gov.uz/uz" target="_blank">
                                <img src="/icon/govuz.png" style="width:100%; height:auto" />
                            </a>
                        </div>
                    </div>

                    <div class="article-block-wrapper clearfix">
                        <div class="entry-image">
                            <a href="http://senat.uz/" target="_blank">
                                <img src="/icon/senat.png" style="width:100%; height:auto" />
                            </a>
                        </div>
                    </div>

                    <div class="article-block-wrapper clearfix">
                        <div class="entry-image">
                            <a href="http://parliament.gov.uz/" target="_blank">
                                <img src="/icon/parlament.png" style="width:100%; height:auto" />
                            </a>
                        </div>
                    </div>

                    <div class="article-block-wrapper clearfix">
                        <div class="entry-image">
                            <a href="http://constitution.uz/" target="_blank">
                                <img src="/icon/cons.png" style="width:100%; height:auto" />
                            </a>
                        </div>
                    </div>


                </div>
            </div>

        </aside>
    </div>
</div>

