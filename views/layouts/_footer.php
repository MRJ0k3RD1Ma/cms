<?php

$boshliq = \app\models\User::find()->where(['role_id' => 1])->one();

?>

<!--Footer Start-->
<footer class="footer">
    <div class="footer-top wf100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!--Footer Widget Start-->
                    <div class="footer-widget">
                        <h4>Biz haqimizda</h4>
                        <div class="row">
                            <div class="col-lg-5">
                                <img src="/profile/<?= $boshliq->image ?>" style="width: 100%" alt="">

                            </div>
                            <div class="col-lg-7">
                                <p><strong><?= $boshliq->name ?></strong></p>
                                <p><?= $boshliq->phone ?></p>
                            </div>
                        </div>
                        <br>
                        <p>
                            Xorazm viloyati sport boshqarmasi
                        </p>
                        <a href="<?= \yii\helpers\Url::to(['/site/contact']) ?>" class="lm">Bog'lanish</a>
                    </div>
                    <!--Footer Widget End-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!--Footer Widget Start-->
                    <div class="footer-widget">
                        <h4>Ijtimoiy tarmoqlar</h4>
                        <p>
                        <p class="mt-2 mb-2"><a href="#"><img src="/icon/telegram.png" alt="" style="width: 25px"> Telegram</a></p>
                           <p class="mt-2 mb-2"> <a href="#"><img src="/icon/facebook.png" alt="" style="width: 25px"> Facebook</a></p>
                           <p class="mt-2 mb-2" ><a href="#"><img src="/icon/google.png" alt="" style="width: 25px"> GooglePlus</a></p>
                           <p class="mt-2 mb-2"> <a href="#"><img src="/icon/linkedin.png" alt="" style="width: 25px"> LinkedIn</a></p>
                           <p class="mt-2 mb-2"> <a href="#"><img src="/icon/twitter.png" alt="" style="width: 25px"> Twitter</a></p>
                           <p class="mt-2 mb-2"> <a href="#"><img src="/icon/vk.png" alt="" style="width: 25px"> VK</a></p>

                        </p>

                    </div>
                    <!--Footer Widget End-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!--Footer Widget Start-->
                    <div class="footer-widget">
                        <h4>So'nggi xabarlar</h4>
                        <ul class="lastest-products">
                            <?php $latest_posts = \app\models\News::find()->where(['cat_id' => '13'])->andWhere(['status' => 1])->andWhere(['active' => 1])->orderBy(['created' => SORT_DESC])->limit(3)->all();
                            Yii::$app->formatter->locale = 'ru-RU';
                            foreach ($latest_posts as $post) { ?>
                                <li>
                                     <strong>
                                        <a href="<?= \yii\helpers\Url::to(['site/view', 'code' => $post->code]) ?>">
                                            <?= $post->name ?></a>
                                    </strong>
                                    <span class="pdate"> <i>Joylandi:</i> <?= Yii::$app->formatter->asDatetime($post->created) ?></span>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!--Footer Widget End-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!--Footer Widget Start-->
                    <div class="footer-widget">
                        <div id="fpro-slider" class="owl-carousel owl-theme">
                            <!--Footer Product Start-->
                            <div class="item">
                                <div class="f-product">
                                    <img src="http://cbu.uz/uzc/informer/?r_choose=USD_EUR_RUB" alt="">
                                    <div class="fp-text">
                                        <h6><a href="#">Valyuta kurslari</a></h6>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Product End-->
                            <!--Footer Product Start-->
                            <div class="item">
                                <div class="f-product">
                                    <a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.uz/pogoda/21105" target="_blank">
                                        <img src="https://info.weather.yandex.net/21105/1_white.ru.png?domain=uz" border="0" alt="Яндекс.Погода"/>

                                    </a>
                                    <div class="fp-text">
                                        <h6><a href="#">Ob-hovo</a></h6>
                                    </div>
                                </div>
                            </div>
                            <!--Footer Product End-->
                            <!--Footer Product Start-->

                            <!--Footer Product End-->
                        </div>
                    </div>
                    <!--Footer Widget End-->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyr wf100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">

                    <img src="/front-theme/images/akt-logo.png" alt="">
                </div>
                <div class="col-md-8 col-sm-8">
                    <p><a target="_blank" href="http://www.xvkm.uz">Xorazm viloyati "AKTni rivojlartirish markazi"
                            DUK</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->