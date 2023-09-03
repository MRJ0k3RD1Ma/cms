<?php
$cat = null;
if($cat = \app\models\Category::findOne(['code'=>$code])){
    if($cat->parent_id == 1){
        $parent = \app\models\Category::find()->where(['status'=>1])->andWhere(['parent_id'=>$cat->id])->all();
    }else{
        $parent = \app\models\Category::find()->where(['status'=>1])->andWhere(['parent_id'=>$cat->parent_id])->all();
    }
    echo "
<div class=\"side-widget categories\">
    <h5>Bo'limlar</h5>
<ul class=\"lastest-products\">
";
    foreach ($parent as $item):
    ?>

        <li>
            <strong>
                <?php
                $url = "#";
                if(strlen($item->icon)>1){
                    $url = Yii::$app->urlManager->createUrl([$item->icon, 'code' => $item->code]);
                }


                ?>
                <a href="<?= $url ?>">
                    <span class="fa fa-check-square-o"></span> <?= $item->name?>
                </a>
            </strong>
        </li>

<?php

    endforeach;

    echo "</ul></div>";
}

?>
