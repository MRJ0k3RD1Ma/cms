<?php
/**
 * Created by PhpStorm.
 * User: Dilmurod
 * Date: 10.01.2019
 * Time: 15:12
 */

namespace app\components;

use app\models\Category;
use app\models\Language;
use yii\base\Widget;
use Yii;
class MenuBuilder extends Widget{

    private static $pageview = 'site/page', $newsview= 'site/news', $codename = 'code', $menuname = '';

    public static function getLang(){
        $l = Yii::$app->language;
        $res = 1;
        if($l1 = Language::findOne(['code'=>$l])){
            $res = $l1;
        }
        return $res;
    }

    public static function generate($menu, $params=null){

        if($menu == 'map'){
            return static::generateMap();
        }

        $result = '<ul class="nav__list">
                        <li class="nav__item has-subnav"><a class="nav__link" href="'.Yii::$app->homeUrl.'">Бош саҳифа</a></li>

';

        $result = static::generateItems($result);


        $result = $result . '</ul>';

        return $result;
    }

    public static function generateItems($res){
        $parents = Category::find()->where(['lang_id'=>static::getLang()])->andWhere(['<>','sort',-1])->orderBy(['sort'=>SORT_ASC])->all();
        foreach($parents as $item){
            if($item->id == 1){
                continue;
            }
            if($item->status != 1){
                continue;
            }
            if($item->parent_id == 1){
                if(Category::find()->where(['parent_id'=>$item->id])->orderBy(['sort'=>SORT_ASC])->andWhere(['status'=>1])->count()>0){
                    $url = "#";
                    $target = "";
                    $a = $item->code;
                    if($a[0]=='-'){
                        if($a[1]=='h' and $a[2]=='t' and $a[3]=='t' and $a[4]=='p'){
                            $url = substr($a,1,strlen($a)-1);
                            $target = "_blank";
                        }else{
                            $url = substr($a,1,strlen($a)-1);
                        }
                    }
                    $res = $res .
                        '
                        <li class="nav__item has-subnav"><a class="nav__link" href="'.$url.'">'.$item->name.'</a>
                           <div class="nav-sub">
                            <div class="nav-sub__list container">
                                <ul class="submenu">
                             ';
                    $res = static::generateSubItem($res,$item->id);
                    $res = $res . '</ul>
                            </div>
                        </div></li>';
                }else{

                    $url = "#";
                    $target = "";
                    $a = $item->code;
                    if($a[0]=='-'){
                        if($a[1]=='h' and $a[2]=='t' and $a[3]=='t' and $a[4]=='p'){
                            $url = substr($a,1,strlen($a)-1);
                            $target = "_blank";
                        }else{
                            $url = substr($a,1,strlen($a)-1);
                        }
                    }else{
                        if(strlen($item->icon)>0){
                            $url = Yii::$app->urlManager->createUrl([$item->icon,'code'=>$item->code]);
                        }
                    }

                    $res = $res . '<li class="nav__item has-subnav"><a  class="nav__link" href="'.$url.'" target="'.$target.'">'.$item->name.'</a></li>';
                }
            }
        }
        return $res;
    }

    public static function generateSubItem($res,$parent_id){

        foreach (Category::find()->where(['parent_id'=>$parent_id])->orderBy(['sort'=>SORT_ASC])->all() as $item ){
            if($item->status != 1){
                continue;
            }
            if(Category::find()->where(['parent_id'=>$item->id])->orderBy(['sort'=>SORT_ASC])->andWhere(['status'=>1])->count()>0){
                $url = "#";
                $target = "";
                $a = $item->code;
                if($a[0]=='-'){
                    if($a[1]=='h' and $a[2]=='t' and $a[3]=='t' and $a[4]=='p'){
                        $url = substr($a,1,strlen($a)-1);
                        $target = "_blank";
                    }else{
                        $url = substr($a,1,strlen($a)-1);
                    }
                }
                $res = $res .
                    ' <div class="nav-sub">
                            <div class="nav-sub__list container">
                                <ul class="submenu">';
                $res = static::generateSubItem($res,$item->id);
                $res = $res . '</ul>
                            </div>
                        </div></li>';
            }else{
                $url = "#";
                $target = "";
                $a = $item->code;
                if($a[0]=='-'){
                    if($a[1]=='h' and $a[2]=='t' and $a[3]=='t' and $a[4]=='p'){
                        $url = substr($a,1,strlen($a)-1);
                        $target = "_blank";
                    }else{
                        $url = substr($a,1,strlen($a)-1);
                    }
                }else{
                    if(strlen($item->icon)>0 and $item->icon!='#'){
                        $url = Yii::$app->urlManager->createUrl([$item->icon,'code'=>$item->code]);
                    }
                }

                $res = $res . '<li class="nav__item has-subnav"><a class="nav__link" href="'.$url.'" target="'.$target.'">'.$item->name.' </a></li>';
            }

        }

        return $res;

    }




    public static function generateMap(){
        $result = '';
        $result = static::generateMapItems($result);


        return $result;
    }




    public static function generateMapItems($res){
        $parents = Category::find()->where(['lang_id'=>static::getLang()])->all();
        foreach($parents as $item) {
            if ($item->id == 1) {
                continue;
            }

            if ($item->parent_id == 1) {
                if (Category::find()->where(['parent_id' => $item->id])->orderBy(['sort'=>SORT_ASC])->andWhere(['status' => 1])->count() > 0) {


                    $url = "#";
                    $target = "";
                    $a = $item->code;
                    if ($a[0] == '-') {
                        if ($a[1] == 'h' and $a[2] == 't' and $a[3] == 't' and $a[4] == 'p') {
                            $url = substr($a, 1, strlen($a) - 2);
                            $target = "_blank";
                        } else {
                            $url = substr($a, 1, strlen($a) - 2);
                        }
                    } else {
                        if (strlen($item->icon) > 0 and $item->icon != '#') {
                            $url = Yii::$app->urlManager->createUrl([$item->icon, 'code' => $item->code]);
                        }
                    }

                    $res = $res . '<li><a href="' . $url . '" target="' . $target . '">' . $item->name . '</a></li>';
                }
            }
            else $res.= static::generateMapSubItem('',$item->id);
        }
        return $res;
    }

    public static function generateMapSubItem($res,$parent_id){

        foreach (Category::find()->where(['parent_id'=>$parent_id])->orderBy(['sort'=>SORT_ASC])->all() as $item ){
            if($item->status != 1){
                continue;
            }
            $url = "#";
            $target = "";
            $a = $item->code;
            if($a[0]=='-'){
                if($a[1]=='h' and $a[2]=='t' and $a[3]=='t' and $a[4]=='p'){
                    $url = substr($a,1,strlen($a)-1);
                    $target = "_blank";
                }else{
                    $url = substr($a,1,strlen($a)-1);
                }
            }else{
                if(strlen($item->icon)>0 and $item->icon!='#'){
                    $url = Yii::$app->urlManager->createUrl([$item->icon,'code'=>$item->code]);
                }
            }

            $res = $res . '<li class=""><a href="'.$url.'" target="'.$target.'">'.$item->name.'</a></li>';
        }

        return $res;

    }
    public static function genereateLordsMap()
    {
        $result='<ul>';
        $result.=static::generateLordsMapItem();
        $result.='</ul>';
    }
    public static function generateLordsMapItem()
    {
        $result='';
        foreach (Category::find()->where(['parent_id' => 1])->andWhere(['>','status',0])->andWhere(['<>','id',1])->all() as $item) {

            if(Category::find()->where(['parent_id'=>$item->id])->orderBy(['sort'=>SORT_ASC])->andWhere(['status'=>1])->count()>0){
                $url = "#";
                $target = "";
                $a = $item->code;
                if($a[0]=='-'){
                    if($a[1]=='h' and $a[2]=='t' and $a[3]=='t' and $a[4]=='p'){
                        $url = substr($a,1,strlen($a)-1);
                        $target = "_blank";
                    }else{
                        $url = substr($a,1,strlen($a)-1);
                    }
                }

                $result .='<li><a href="'.$url.'" >'.$item->name.' </a>';
                $result .= static::generateLordsMapSubItem($item->id);
                $result .= '</li>';
            }else{
                $url = "#";
                $target = "";
                $a = $item->code;
                if($a[0]=='-'){
                    if($a[1]=='h' and $a[2]=='t' and $a[3]=='t' and $a[4]=='p'){
                        $url = substr($a,1,strlen($a)-1);
                        $target = "_blank";
                    }else{
                        $url = substr($a,1,strlen($a)-1);
                    }
                }else{
                    if(strlen($item->icon)>0 and $item->icon!='#'){
                        $url = Yii::$app->urlManager->createUrl([$item->icon,'code'=>$item->code]);
                    }
                }

                $result .= '<li><a href="'.$url.'" target="'.$target.'">'.$item->name.' </a></li>';
            }
        }
        return $result;
    }
    public static function generateLordsMapSubItem($parent_id){
        $result='<ul>';
        foreach (Category::find()->where(['parent_id' => $parent_id])->andWhere(['>', 'status', 0])->all() as $item) {
            $url = "#";
            $target = "";
            $a = $item->code;
            if($a[0]=='-'){
                if($a[1]=='h' and $a[2]=='t' and $a[3]=='t' and $a[4]=='p'){
                    $url = substr($a,1,strlen($a)-1);
                    $target = "_blank";
                }else{
                    $url = substr($a,1,strlen($a)-1);
                }
            }else{
                if(strlen($item->icon)>0 and $item->icon!='#'){
                    $url = Yii::$app->urlManager->createUrl([$item->icon,'code'=>$item->code]);
                }
            }

            $result .= '<li><a href="'.$url.'" target="'.$target.'">'.$item->name.' </a></li>';
        }
        $result.='</ul>';
        return $result;
    }


}