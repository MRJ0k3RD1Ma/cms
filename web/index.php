<?php

function short_str($str, $max = 50) {
    $str = trim($str);
    if (strlen($str) > $max) {
        $s_pos = strpos($str, ' ');
        $cut = $s_pos === false || $s_pos > $max;
        $str = wordwrap($str, $max, ';;', $cut);
        $str = explode(';;', $str);
        $str = $str[0] . '...';
    }
    return $str;
}

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

function getNewsWithDate($interval,$limit){
   /* $ml = [31,31,28,31,30,31,30,31,31,30,31,30,31];
    $y = date('Y');
    $m = date('m');
    $d = date('d');
    if($interval_type == 'm'){
        $y = date('Y');
        $m = date('m')-$interval;
        $d = date('d');
        if($d>$ml[$m]){
            $d = $ml[$m];
        }

    }elseif($interval_type == 'd'){
        $y = date('Y');
        $m = date('m');
        $d = date('d')-$interval;
        if($d<=0){
            $d = $ml[$m-1]-$d;
        }
    }else{
        $y = date('Y')-$interval;
        $m = date('m');
        $d = date('d');
    }
    $mm = $y.'-'.$m.'-'.$d;*/
    $query=' created + INTERVAL '.$interval.' DAY > NOW()';
    $model = \app\models\News::find()->where(['status'=>1])
        ->andWhere($query)
        ->orderBy(['show_counter'=>SORT_DESC])
        ->limit($limit)
        ->all();
    return $model;
}



(new yii\web\Application($config))->run();
