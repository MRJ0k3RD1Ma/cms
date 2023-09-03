<section class="no-results not-found">
    <header class="page-header">
        <h2 class="page-title">Ҳеч нима топилмади</h2>
    </header><!-- .page-header -->

    <div class="page-content">

        <p>Кечирасиз, бундай маълумот топилмади</p>
        <div class="side-widget">
            <h5>Qidirish</h5>
            <div class="side-search">
                <?php use yii\widgets\ActiveForm;

                $form = ActiveForm::begin(['action' => Yii::$app->urlManager->createUrl(['site/search']),'method'=>'get']);

                ?>

                <input type="search" class="form-control" autocomplete="off" placeholder="Калит сўзни киритинг ..."
                       value="" name="s">
                <button type="submit"><i class="fas fa-search"></i></button>
                <?php ActiveForm::end(); ?>
            </div>
        </div>

    </div><!-- .page-content -->
</section>