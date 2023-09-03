<?php

use yii\widgets\Breadcrumbs;

?>

<div role="navigation" aria-label="Breadcrumbs" style="background: #f5f5f5" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
<!--    <div class="container">-->

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

<!--    </div>-->
</div>


