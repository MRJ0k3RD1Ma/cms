<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
$hokim = "Жўрабек Рахимов";
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--	<meta name="google-site-verification" content="yM-oVjGPK3ps7bJp8oWJ24J3pfvsPfcNqGSwQHBkjLA">-->
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link rel="icon" type="image/png" href="/favicon.png"/>


    <?php $this->head() ?>
    <style>
        body {
            font-family: Montserrat, sans-serif;
        }
    </style>

    <?php
    $nomer = "+998623991617";
    $nomer1 = "+998623991673";
    $email = 'info@xonqahokimiyat.uz';
    $manzil = 'Хонқа тумани. Хонқа шаҳарчаси Халқлар дўстлиги кўчаси 30 уй, 220800';
    $tashkilot = 'Хонқа туман ҳокимлиги';
    ?>
</head>

<body>
<?php $this->beginBody() ?>




<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">
    <symbol viewBox="0 0 22 10" id="icon--glasses">
        <path d="M21.624 5.504C21.384 8.03 19.358 10 16.896 10c-2.562 0-4.65-2.135-4.747-4.805-.516-1.125-1.782-1.125-2.298 0C9.753 7.865 7.666 10 5.104 10 2.64 10 .616 8.029.376 5.504A.65.65 0 010 4.907v-.741c0-.34.248-.617.563-.645.6-2.04 2.406-3.522 4.54-3.522 2.059 0 3.81 1.377 4.471 3.302a2.577 2.577 0 012.851 0C13.086 1.376 14.838 0 16.895 0c2.136 0 3.942 1.482 4.541 3.522a.636.636 0 01.564.645v.74a.65.65 0 01-.376.598zM5.104 1.573c-1.798 0-3.256 1.534-3.256 3.426 0 1.892 1.458 3.426 3.256 3.426C6.902 8.425 8.36 6.891 8.36 5c0-1.892-1.458-3.426-3.256-3.426zm11.792 0c-1.798 0-3.256 1.534-3.256 3.426 0 1.892 1.458 3.426 3.256 3.426 1.798 0 3.256-1.534 3.256-3.426 0-1.892-1.458-3.426-3.256-3.426z"/>
    </symbol>

    <symbol viewBox="0 0 6 14" id="icon--facebook">
        <path d="M3.95 2.938v1.653H6l-.2 2.352H3.95v6.943c0 .062-.045.113-.1.113H1.4c-.055 0-.1-.05-.1-.113V6.943H0V4.59h1.3V2.546C1.3 1.14 2.318 0 3.575 0H5.95v2.463H4.375c-.235 0-.425.214-.425.476z"/>
    </symbol>

    <symbol viewBox="10 2 4 22" id="icon--twitter">
        <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path>
    </symbol>

    <symbol viewBox="0 0 14 14" id="icon--search">
        <path d="M13.749 13.749a.855.855 0 01-1.21 0l-2.731-2.732a6.124 6.124 0 111.21-1.21l2.73 2.732a.855.855 0 010 1.21zM6.124 1.524a4.6 4.6 0 100 9.2 4.6 4.6 0 000-9.2z"/>
    </symbol>

    <symbol viewBox="0 0 30 31" id="icon--call">
        <path d="M17.776 29.314C10.068 25.981 4.26 20.201.913 12.452-1.83 6.099 2.84 3.84 4.441 3.342c1.167-.362 1.79.786 1.79.786s2.214 3.09 3.004 4.152c.79 1.063-.147 1.864-.147 1.864S7.3 12.052 6.862 12.8c.988 3.47 7.12 9.602 10.562 10.584.746-.436 2.646-2.218 2.646-2.218s.798-.932 1.858-.144 4.141 2.997 4.141 2.997 1.145.622.784 1.785c-.495 1.596-2.743 6.25-9.077 3.51zm1.203-18.117a4.84 4.84 0 011.421 3.29c.02.7-.53 1.284-1.229 1.306a1.265 1.265 0 01-1.304-1.227 2.318 2.318 0 00-.68-1.576 2.318 2.318 0 00-1.576-.68 1.262 1.262 0 01-1.227-1.304 1.27 1.27 0 011.305-1.23 4.84 4.84 0 013.29 1.421zm-3.265-3.681a1.263 1.263 0 01-1.227-1.305c.021-.7.606-1.25 1.305-1.228a9.659 9.659 0 016.567 2.835 9.66 9.66 0 012.835 6.566c.02.7-.53 1.284-1.229 1.306a1.265 1.265 0 01-1.304-1.227 7.138 7.138 0 00-2.095-4.852 7.137 7.137 0 00-4.852-2.096zm11.801 6.883a12.06 12.06 0 00-3.54-8.198 12.06 12.06 0 00-8.198-3.54 1.262 1.262 0 01-1.227-1.304c.022-.7.606-1.25 1.306-1.228a14.581 14.581 0 019.912 4.28 14.58 14.58 0 014.28 9.912c.02.7-.53 1.284-1.229 1.306a1.265 1.265 0 01-1.304-1.228z"/>
    </symbol>

    <symbol viewBox="0 0 17 17" id="icon--phone">
        <path d="M11.205 16.468C6.329 14.362 2.655 10.71.538 5.814-1.197 1.8 1.757.373 2.77.059c.738-.23 1.132.496 1.132.496s1.4 1.952 1.9 2.623c.5.672-.093 1.178-.093 1.178S4.578 5.561 4.301 6.034c.625 2.193 4.504 6.067 6.681 6.687.472-.275 1.674-1.4 1.674-1.4s.505-.59 1.175-.092 2.62 1.893 2.62 1.893.724.393.496 1.128c-.313 1.008-1.735 3.949-5.742 2.218z"/>
    </symbol>

    <symbol viewBox="0 0 26.995 35.995" id="icon--play">
        <path d="M26.995 17.997L0 35.995V0z"/>
    </symbol>

    <symbol viewBox="0 0 10 18" id="icon--arrow-left">
        <path d="M2.852 9l7.146-7.506-1.43-1.501-8.574 9.006 8.574 9.007 1.43-1.501z"/>
    </symbol>

    <symbol viewBox="0 0 10 18" id="icon--arrow-right">
        <path d="M7.148 9L.002 1.493l1.43-1.501 8.574 9.006-8.575 9.007-1.429-1.501z"/>
    </symbol>

    <symbol viewBox="0 0 18.013 10.004" id="icon--arrow-down">
        <path d="M9.007 7.146L1.501 0 0 1.43l9.006 8.574 9.007-8.574L16.512 0z"/>
    </symbol>

    <symbol viewBox="0 0 24 19" id="icon--map">
        <path d="M24 15.553C24 17.457 22.439 19 20.513 19c-1.925 0-3.486-1.543-3.486-3.447 0-1.628 1.141-2.991 2.676-3.353v-1.858a.08.08 0 00-.081-.08h-6.73v1.958c1.493.39 2.594 1.734 2.594 3.333C15.486 17.457 13.926 19 12 19c-1.926 0-3.487-1.543-3.487-3.447 0-1.657 1.182-3.04 2.757-3.371v-1.92H4.378a.08.08 0 00-.08.08V12.2c1.534.362 2.675 1.725 2.675 3.353C6.973 17.457 5.412 19 3.486 19 1.561 19 0 17.457 0 15.553c0-1.628 1.141-2.991 2.676-3.353V9.46c0-.443.363-.802.81-.802h7.784v-1.84c-1.575-.332-2.757-1.715-2.757-3.37C8.513 1.542 10.074 0 12 0c1.925 0 3.486 1.543 3.486 3.447 0 1.6-1.1 2.944-2.594 3.333v1.878h7.621c.448 0 .811.36.811.802v2.74C22.86 12.562 24 13.925 24 15.553zm-22.378 0c0 1.018.835 1.844 1.864 1.844 1.03 0 1.865-.826 1.865-1.844a1.854 1.854 0 00-1.865-1.844c-1.03 0-1.864.825-1.864 1.844zM13.865 3.447A1.854 1.854 0 0012 1.603c-1.03 0-1.865.826-1.865 1.844 0 1.018.835 1.844 1.865 1.844s1.865-.826 1.865-1.844zM12 13.71c-1.03 0-1.865.825-1.865 1.844 0 1.018.835 1.844 1.865 1.844s1.865-.826 1.865-1.844A1.854 1.854 0 0012 13.709zm8.513 0c-1.03 0-1.864.825-1.864 1.844 0 1.018.834 1.844 1.864 1.844 1.03 0 1.865-.826 1.865-1.844a1.854 1.854 0 00-1.865-1.844z"/>
    </symbol>

    <symbol viewBox="0 0 44 44" id="icon--bank">
        <path d="M44 36.965v5.743C44 43.42 43.42 44 42.704 44H1.295A1.293 1.293 0 010 42.708v-5.743c0-.714.58-1.292 1.294-1.292h1.093v-2.074c0-.708.447-1.309 1.073-1.543v-11.6a1.648 1.648 0 01-1.116-1.558v-2.062H.911a.801.801 0 01-.802-.801V10.58c0-.473.277-.903.708-1.099L21.477.11a1.27 1.27 0 011.045 0l20.66 9.371c.432.196.709.626.709 1.1v5.454c0 .442-.36.8-.802.8h-1.434v2.063c0 .723-.467 1.336-1.116 1.558v11.6a1.648 1.648 0 011.073 1.543v2.074h1.093c.715 0 1.294.578 1.294 1.292zM6.353 9.418h31.29L22 2.32zm35.305 5.189v-2.97H2.34v2.97zM35.8 34.179v1.494h3.58v-1.494zm2.506-2.229V20.547H36.96V31.95zm1.116-13.632v-1.482h-3.58v1.482zm-8.226 15.28v2.075h2.372v-2.074c0-.74.487-1.365 1.158-1.574V20.457a1.648 1.648 0 01-1.116-1.559v-2.062h-2.37v2.062a1.65 1.65 0 01-1.117 1.559v11.599a1.648 1.648 0 011.074 1.543zm-5.811.581v1.494h3.58v-1.494zm2.506-2.229V20.547h-1.348V31.95zm1.116-13.632v-1.482h-3.58v1.482zm-8.162 15.28v2.075h2.308v-2.074c0-.74.487-1.365 1.158-1.574V20.457a1.648 1.648 0 01-1.116-1.559v-2.062h-2.393v2.062a1.65 1.65 0 01-1.116 1.559v11.568a1.65 1.65 0 011.159 1.574zm-2.275-15.28v-1.482h-3.58v1.482zm-2.464 2.229V31.95h1.348V20.547zm-1.073 15.126h3.58v-1.494h-3.58zm-4.603-2.074v2.074h2.37v-2.074c0-.708.448-1.309 1.074-1.543v-11.6a1.648 1.648 0 01-1.116-1.558v-2.062h-2.371v2.062c0 .723-.467 1.336-1.116 1.558v11.569a1.65 1.65 0 011.159 1.574zM8.156 18.318v-1.482h-3.58v1.482zm-2.464 2.229V31.95H7.04V20.547zM4.619 35.673h3.58v-1.494h-3.58zm37.149 2.229H2.232v3.869h39.536z"/>
    </symbol>

    <symbol viewBox="0 0 38 43" id="icon--docs">
        <path d="M27.705 36.349v6.65H0V6.343h10.295V0h17.864l9.821 10.034-.02.02H38v26.295zM2.574 8.97v31.4H25.13V18.096H16.2V8.971zm20.583 6.497l-4.384-4.48v4.48zm5.91-10.821v4.479h4.385zm6.36 7.108h-8.933V2.63H12.868v3.713h4.996l9.821 10.033-.02.02h.04v4.64h4.542v2.63h-4.542v3.713h4.542v2.63h-4.542v3.711h7.721zm-29.674 9.28h8.932v2.63H5.753zm16.2 8.972h-16.2v-2.63h16.2zm0 6.342h-16.2v-2.63h16.2z"/>
    </symbol>

    <symbol viewBox="0 0 41 41" id="icon--dollar-works">
        <path d="M37.667 31.703H40.1v2.67h-7.44v-7.439h2.67v2.998a17.392 17.392 0 002.747-9.434c0-9.693-7.886-17.58-17.58-17.58-3.34 0-6.59.94-9.398 2.72L9.537 3.17a20.44 20.44 0 0110.96-3.173C31.803-.002 41 9.194 41 20.498c0 4.036-1.149 7.876-3.332 11.205zM22.487 11.01v1.764c2.037.619 3.52 2.475 3.52 4.662H23.11c0-1.135-.947-2.059-2.112-2.059a2.11 2.11 0 00-2 1.402c-.055.16-.198.848.26 1.295 1.958 1.908 3.668 2.017 5.21 3.52 1.555 1.517 1.66 2.906 1.465 3.974-.369 1.755-1.71 3.166-3.446 3.684v1.759h-2.954v-1.766c-2.034-.621-3.514-2.475-3.514-4.66h2.896c0 1.135.947 2.059 2.112 2.059a2.11 2.11 0 002-1.402c.055-.16.177-.828-.26-1.295-1.126-1.201-3.182-2.104-3.477-2.293-2.044-1.128-3.657-2.817-3.198-5.201.369-1.753 1.707-3.163 3.44-3.682v-1.76zm-16.793.036a17.573 17.573 0 00-2.776 9.452c0 9.694 7.886 17.58 17.58 17.58 3.301 0 6.518-.92 9.303-2.66l1.548 2.477a20.45 20.45 0 01-10.851 3.104c-11.304 0-20.5-9.196-20.5-20.5 0-4 1.187-7.885 3.351-11.2H.926V6.63h7.438v7.438h-2.67z"/>
    </symbol>

    <symbol viewBox="0 0 49 33" id="icon--finance">
        <path d="M0 33V0h49v33zM46.43 2.578H2.57v27.844h43.86zM9.961 17.056c-1.84-.958-3.291-2.395-2.879-4.421.332-1.49 1.537-2.688 3.097-3.13V8.01h2.659v1.499c1.833.526 3.168 2.103 3.168 3.962h-2.607c0-.965-.853-1.75-1.9-1.75-.837 0-1.547.5-1.8 1.192-.05.136-.18.72.234 1.1 1.762 1.623 3.3 1.716 4.688 2.993 1.4 1.289 1.495 2.47 1.32 3.378-.333 1.492-1.54 2.69-3.103 3.13v1.496h-2.659v-1.5c-1.83-.529-3.162-2.105-3.162-3.962h2.607c0 .965.852 1.75 1.9 1.75.836 0 1.546-.5 1.8-1.191.05-.137.16-.704-.234-1.1-1.013-1.022-2.863-1.79-3.129-1.95zm12.8 1.648c.97-1.24 1.81-2.31 2.754-1.762.77.447.487 1.378.366 1.775-.122.403-.312.906-.513 1.439-.106.279-.247.652-.38 1.024.382-.329.779-.693 1.085-.973 1.865-1.708 3.097-2.836 4.142-2.105.7.49.55 1.363.396 2.094.267-.162.557-.35.79-.501 1.204-.781 2.567-1.666 3.843-1.666.768 0 1.19.4 1.418.614.029.027.065.062.09.083.753.117 1.746-.19 2.542-.792a.94.94 0 011.32.187.947.947 0 01-.186 1.324c-1.245.94-2.757 1.364-4.042 1.137-.519-.092-.83-.387-1.017-.563a1.97 1.97 0 00-.11-.099h-.015c-.72 0-1.933.787-2.819 1.362-1.335.867-2.39 1.551-3.288.923-.597-.418-.604-1.102-.498-1.756a43.98 43.98 0 00-1.295 1.154c-1.83 1.676-3.04 2.784-4.074 2.104-.593-.39-.654-1.038-.439-1.94-.676.94-1.528 2.157-2.6 3.733a.94.94 0 01-1.31.248.947.947 0 01-.247-1.314c1.764-2.594 3.14-4.522 4.086-5.73zm-2.43-3.644v-2.735h12.193v2.735zm0-7.032h20.92v2.736H20.33z"/>
    </symbol>

    <symbol viewBox="0 0 44 44" id="icon--lifebuoy">
        <path d="M44 22c0 12.13-9.87 22-22 22C9.869 44 0 34.13 0 22 0 9.869 9.869 0 22 0c12.13 0 22 9.869 22 22zM25.57 2.214v7.491a12.855 12.855 0 018.682 8.576h7.505C40.225 10.124 33.749 3.687 25.57 2.215zM42.02 20.18h-7.347c.085.595.132 1.202.132 1.82 0 .558-.04 1.106-.11 1.644h7.34a20.275 20.275 0 00-.015-3.464zM32.908 22c0-6.014-4.894-10.907-10.908-10.907-6.015 0-10.908 4.893-10.908 10.908 0 6.014 4.893 10.908 10.908 10.908 6.014 0 10.908-4.894 10.908-10.908zM22 1.898c-.604 0-1.201.028-1.792.08v7.346A12.861 12.861 0 0122 9.195c.567 0 1.125.04 1.673.113V1.967c-.552-.046-1.11-.07-1.673-.07zM2.243 18.28h7.504a12.858 12.858 0 018.564-8.542V2.237C10.188 3.75 3.767 10.163 2.243 18.282zM9.195 22c0-.619.047-1.226.132-1.821H1.98a20.258 20.258 0 00-.016 3.464h7.34c-.07-.538-.11-1.086-.11-1.643zm9.116 19.763V34.26a12.855 12.855 0 01-8.614-8.72H2.209c1.463 8.202 7.92 14.698 16.102 16.222zm3.689.34c.563 0 1.121-.024 1.673-.07v-7.341c-.548.072-1.106.113-1.673.113-.608 0-1.206-.046-1.792-.128v7.345c.59.053 1.188.08 1.792.08zM41.79 25.54h-7.487a12.852 12.852 0 01-8.733 8.754v7.491c8.239-1.482 14.75-8.002 16.22-16.245z"/>
    </symbol>

    <symbol viewBox="0 0 50 34" id="icon--money">
        <path d="M7.5 34v-7.106H0V0h42.5v7.106H50V34zm2.264-2.23h3.798c-.432-1.853-1.916-3.314-3.798-3.74zm-7.5-7.106h3.798c-.432-1.853-1.916-3.314-3.798-3.74zm0-22.435v3.74c1.882-.425 3.366-1.887 3.798-3.74zm37.972 0h-3.798c.432 1.853 1.916 3.315 3.798 3.74zm0 6.01c-3.133-.48-5.615-2.924-6.103-6.01H8.367c-.488 3.086-2.97 5.53-6.103 6.01v10.415c3.133.481 5.615 2.925 6.103 6.01h25.766c.488-3.085 2.97-5.529 6.103-6.01zm0 12.686c-1.882.425-3.366 1.886-3.798 3.74h3.798zm7.5-11.59h-3.798c.432 1.854 1.916 3.315 3.798 3.74zm0 6.01a7.341 7.341 0 01-5.236-3.568v15.117H12.702c1.662 1.098 2.844 2.849 3.165 4.876h25.766c.488-3.085 2.97-5.529 6.103-6.01zm0 12.686c-1.882.425-3.366 1.886-3.798 3.74h3.798zM21.25 20.832c-4.136 0-7.5-3.313-7.5-7.385 0-4.073 3.364-7.385 7.5-7.385 4.135 0 7.5 3.312 7.5 7.385 0 4.072-3.365 7.385-7.5 7.385zm0-12.54c-2.887 0-5.236 2.312-5.236 5.155 0 2.843 2.349 5.156 5.236 5.156 2.887 0 5.236-2.313 5.236-5.156 0-2.843-2.349-5.156-5.236-5.156z"/>
    </symbol>

    <symbol viewBox="0 0 49 39" id="icon--prepaid">
        <path d="M7.71 28.395v2.737h2.741v-2.737zm6.168 0v2.737h2.74v-2.737zm6.167 0v2.737H41.29v-2.737zM49 39V14.026h-2.57v22.237H2.57v-19.67h27.413v-2.738H2.57V8.724h36.483l-4.075 4.086 1.893 1.898 5.423-5.439.012.012 1.898-1.903-.013-.012.013-.013-1.893-1.898-.012.013-5.45-5.466-1.897 1.904 4.07 4.08H0V39z"/>
    </symbol>

    <symbol viewBox="0 0 40 43" id="icon--umbrella">
        <path d="M39.932 21.5h-18.28v14.394c0 2.113 1.724 3.826 3.853 3.826 2.128 0 3.853-1.713 3.853-3.826h3.302c0 3.924-3.203 7.106-7.155 7.106-3.953 0-7.156-3.182-7.156-7.106V21.5H.069a19.975 19.975 0 01-.07-1.64C0 8.892 8.955 0 20 0c11.047 0 20 8.892 20 19.86 0 .552-.024 1.099-.068 1.64zM20 3.28c-8.664 0-15.786 6.553-16.615 14.94h33.23C35.785 9.833 28.665 3.28 20 3.28z"/>
    </symbol>

    <symbol viewBox="0 0 44 42" id="icon--blog">
        <path d="M7.255 16.521c-.01-.81.625-1.475 1.418-1.485l13.31-.163h.018c.785 0 1.425.646 1.435 1.45.01.81-.625 1.475-1.418 1.484l-13.31.163h-.019c-.784 0-1.425-.645-1.434-1.449zm0-8.196c-.007-.81.63-1.473 1.423-1.48l19.133-.162c.794-.008 1.44.644 1.447 1.454.007.81-.63 1.473-1.423 1.48L8.702 9.78H8.69c-.787 0-1.429-.649-1.435-1.455zm35.997 6.621L36.78 21.54v8.316c0 1.663-1.323 3.015-2.95 3.015h-6.92l2.008 6.194h2.653V42H4.943v-2.934h2.754l2.008-6.194H2.95C1.323 32.871 0 31.52 0 29.856V3.016C0 1.351 1.323 0 2.95 0h30.88c1.626 0 2.95 1.352 2.95 3.015v4.376a2.497 2.497 0 012.88.427l3.537 3.391a2.64 2.64 0 01.055 3.737zM23.885 32.871H12.728l-2.007 6.194h15.172zm10.024-8.407l-1.586 1.616H8.69c-.793 0-1.435-.657-1.435-1.467s.642-1.467 1.435-1.467h16.616l.031-3.613a2.12 2.12 0 01.626-1.606l7.946-7.862v-7.05a.08.08 0 00-.08-.081H2.95a.08.08 0 00-.079.081v26.84a.08.08 0 00.08.082h30.88a.08.08 0 00.08-.081zm7.077-11.352l-3.062-2.936-9.719 9.616-.029 3.354h2.96z"/>
    </symbol>

    <symbol viewBox="0 0 11 8" id="icon--barb-arrow">
        <path d="M7.052 8l-.789-.8 2.526-2.56H0V3.36h8.79L6.263.8l.79-.8L11 4z"/>
    </symbol>

    <symbol viewBox="0 0 14 14" id="icon--close">
        <path d="M14 12.607l-1.358 1.355L7.014 8.35 1.37 14 .012 12.644l5.643-5.648-5.656-5.64L1.36-.002l5.653 5.638 5.62-5.625 1.356 1.358L8.37 6.992z"/>
    </symbol>

    <symbol viewBox="0 0 12 12" id="icon--time">
        <path d="M6 12a6 6 0 116-6 6 6 0 01-6 6zM6 1.5A4.5 4.5 0 1010.5 6 4.5 4.5 0 006 1.5zm-.77 5.959v-4.5h1.5v3H9v1.5H5.23z" fill-rule="evenodd"/>
    </symbol>

    <symbol viewBox="0 0 16 17" id="icon--print">
        <path d="M14.381 13.33a.535.535 0 010-1.07.581.581 0 00.577-.59V5.58a.41.41 0 00-.409-.42h-13.1a.41.41 0 00-.409.42v6.26a.432.432 0 00.12.3.4.4 0 00.289.12.535.535 0 010 1.07 1.449 1.449 0 01-1.026-.43 1.528 1.528 0 01-.425-1.06V5.58a1.474 1.474 0 011.451-1.49H2.9V1.32a1.329 1.329 0 01.376-.93A1.26 1.26 0 014.184 0h7.628a1.3 1.3 0 011.284 1.32v1.1a.521.521 0 11-1.042 0v-1.1a.245.245 0 00-.242-.25H4.184a.226.226 0 00-.171.07.276.276 0 00-.071.18v2.77h10.6a1.474 1.474 0 011.451 1.49v6.09a1.639 1.639 0 01-1.612 1.66zM3.745 8.18h8.51a.849.849 0 01.843.86v6.82a1.126 1.126 0 01-1.11 1.14H4.012a1.126 1.126 0 01-1.11-1.14V9.04a.849.849 0 01.843-.86zm.2 7.68a.069.069 0 00.068.07h7.976a.069.069 0 00.068-.07V9.25H3.945v6.61z" fill-rule="evenodd"/>
    </symbol>

    <symbol viewBox="0 0 20 24" id="icon--docs-2">
        <path d="M17.64 24H5.577c-.631 0-1.224-.23-1.669-.648a2.125 2.125 0 01-.691-1.561v-.804h-.858c-1.3 0-2.359-.99-2.359-2.209V5.222c0-.187.08-.365.22-.497L5.045.206A.779.779 0 015.576 0h8.847c1.301 0 2.36.991 2.36 2.21v.802h.857c1.301 0 2.36.992 2.36 2.21V21.79c0 1.219-1.06 2.21-2.36 2.21zM5.63 1.647L1.76 5.272h3.012c.473 0 .858-.36.858-.803zm9.651.562c0-.442-.385-.803-.858-.803H7.131V4.47c0 1.218-1.058 2.21-2.359 2.21h-3.27v12.099c0 .443.384.803.858.803h12.063c.473 0 .858-.36.858-.803zm3.217 3.013c0-.443-.385-.803-.858-.803h-.857v14.36c0 1.217-1.059 2.208-2.36 2.208H4.72v.804c0 .214.089.416.25.567a.881.881 0 00.608.236H17.64c.473 0 .858-.36.858-.803zm-6.487 8.234H4.772c-.414 0-.75-.315-.75-.703 0-.388.336-.703.75-.703h7.239c.414 0 .75.315.75.703 0 .388-.336.703-.75.703zm0-3.012H4.772c-.414 0-.75-.315-.75-.703 0-.389.336-.704.75-.704h7.239c.414 0 .75.315.75.704 0 .388-.336.703-.75.703zm-7.239 4.618h4.022c.414 0 .75.315.75.703 0 .389-.336.704-.75.704H4.772c-.414 0-.75-.315-.75-.704 0-.388.336-.703.75-.703z"/>
    </symbol>

    <symbol viewBox="0 0 22 22" id="icon--check-circle">
        <path d="M11 22a11 11 0 1111-11 11 11 0 01-11 11zm4.174-15.67L9.71 11.95 6.83 9.07l-1.944 1.94 4.776 4.67 7.456-7.4z" fill-rule="evenodd"/>
    </symbol>

    <symbol viewBox="0 0 18 18" id="icon--call-circle">
        <path d="M8.993 18.013A9.006 9.006 0 118.993 0a9.006 9.006 0 010 18.012zm0-15.76a6.754 6.754 0 100 13.508 6.754 6.754 0 100-13.508zm2.267 10.813c-1.5.3-2.985.18-4.674-1.51l.024-.024C4.857 9.78 4.703 8.268 4.974 6.753c.17-.946 1.248-2.584 1.927-1.905.56.559.665.619 1.134 1.088.911.911.04 1.77-.432 2.24-.75.75-.534 1.382-.458 1.481.278.365.89 1.024 1.3 1.333.096.072.714.27 1.468-.484.475-.475 1.34-1.353 2.218-.474.452.452.509.555 1.047 1.094.655.655-.983 1.752-1.918 1.94z"/>
    </symbol>

    <symbol viewBox="0 0 21 20" id="icon--coffee">
        <path d="M17.316 14.391h-.77C16.091 17.564 13.417 20 10.186 20H6.429C2.88 20 0 17.06 0 13.432V8.339c0-.815.648-1.476 1.446-1.476h15.87C19.352 6.863 21 8.55 21 10.627c0 2.079-1.65 3.764-3.684 3.764zm-2.507-5.314a.365.365 0 00-.361-.369H2.168c-.2 0-.362.166-.362.37v4.354c0 2.608 2.07 4.723 4.623 4.723h3.757c2.553 0 4.623-2.115 4.623-4.723zm2.507-.369h-.701v3.838h.7c1.038 0 1.879-.86 1.879-1.919 0-1.06-.84-1.919-1.878-1.919zm-5.734-4.464c0 .47-.366.85-.818.85-.453 0-.82-.38-.82-.85 0-1.2.613-1.835 1.06-2.298.4-.416.578-.62.578-1.098 0-.468.367-.848.819-.848.452 0 .819.38.819.848 0 1.201-.612 1.835-1.059 2.299-.401.416-.579.62-.579 1.097zm-3.275 0c0 .47-.366.85-.818.85-.453 0-.819-.38-.819-.85 0-1.2.612-1.835 1.059-2.298.401-.416.578-.62.578-1.098 0-.468.367-.848.82-.848.452 0 .818.38.818.848 0 1.201-.612 1.835-1.059 2.299-.401.416-.579.62-.579 1.097zm-3.274 0c0 .47-.367.85-.82.85-.451 0-.818-.38-.818-.85 0-1.2.612-1.835 1.059-2.298.401-.416.579-.62.579-1.098C5.033.38 5.399 0 5.85 0c.453 0 .82.38.82.848 0 1.201-.613 1.835-1.06 2.299-.4.416-.578.62-.578 1.097z"/>
    </symbol>

    <symbol viewBox="0 0 20 19" id="icon--wechat">
        <path d="M20 12.711a5.315 5.315 0 01-2.29 4.26l.37 1.2c-.01-.016.03.117.03.2a.642.642 0 01-.65.635.9.9 0 01-.38-.122l-1.58-.834a7.605 7.605 0 01-2.08.287c-3.54 0-6.42-2.375-6.58-5.356a9.108 9.108 0 01-1.61-.311c-.46.237-1.35.689-1.81.92a2.289 2.289 0 01-.65.242.642.642 0 01-.65-.635.727.727 0 01.04-.229l.52-1.537A6.115 6.115 0 010 6.518C0 2.918 3.49.006 7.79.006s7.79 2.915 7.79 6.512a5.027 5.027 0 01-.07.87A5.779 5.779 0 0120 12.711zM7.79 1.338c-3.55 0-6.42 2.316-6.42 5.174a4.911 4.911 0 002.52 4.113.728.728 0 01.16.771l-.13.468s.43-.212.89-.446a.987.987 0 01.64-.087 7.737 7.737 0 001.5.311c.59-2.592 3.26-4.55 6.47-4.55.25 0 .5.013.75.037a4.2 4.2 0 00.04-.616c0-2.859-2.87-5.175-6.42-5.175zm5.63 7.092c-2.88 0-5.22 1.917-5.22 4.282s2.34 4.282 5.22 4.282a6.294 6.294 0 001.65-.219 1.417 1.417 0 011.33.33.758.758 0 01.22-1.016 4.044 4.044 0 002.01-3.377c0-2.366-2.33-4.282-5.21-4.282zm2.09 3.5a.736.736 0 11.75-.736.746.746 0 01-.75.737zm-4.01 0a.736.736 0 11.75-.736.746.746 0 01-.75.737zm-1.84-5.8a.892.892 0 11.91-.892.9.9 0 01-.91.895zm-4.88 0a.892.892 0 11.91-.892.9.9 0 01-.91.895z" fill-rule="evenodd"/>
    </symbol>

    <symbol viewBox="0 0 14 16" id="icon--safety">
        <path d="M6.48 9.471a.15.15 0 01-.12-.04L4.87 7.845a.776.776 0 00-.56-.226.793.793 0 00-.55 1.366l1.48 1.589.01.008a1.763 1.763 0 001.22.483h.11a1.782 1.782 0 001.26-.652c.01-.012.01-.023.02-.035l3.03-3.519a.8.8 0 00-1.3-.927L6.58 9.426a.135.135 0 01-.1.045zm7.05-6.629L7.33.07A.849.849 0 007 0a.849.849 0 00-.33.07L.47 2.842a.807.807 0 00-.47.727v4.813a8.052 8.052 0 002.02 5.225 7.34 7.34 0 002.23 1.727 6 6 0 005.5 0 7.343 7.343 0 002.23-1.727A8.052 8.052 0 0014 8.382V3.568a.807.807 0 00-.47-.727zm-1.13 5.54c0 3.135-2.57 6.007-5.4 6.026-2.83-.019-5.4-2.891-5.4-6.026v-4.3L7 1.666l5.4 2.416v4.3z" fill-rule="evenodd"/>
    </symbol>

    <symbol viewBox="0 0 13 13" id="icon--rss">
        <path d="M10.53 13A10.534 10.534 0 00.01 2.477V0A13 13 0 0113 13h-2.47zM1.86 9.271A1.857 1.857 0 110 11.128a1.855 1.855 0 011.86-1.857zM.01 4.333A8.67 8.67 0 018.67 13H6.2A6.2 6.2 0 00.01 6.81V4.334z" fill-rule="evenodd"/>
    </symbol>
</svg>

<div class="wrap">
    <header class="header">
        <div class="container">
            <div class="row align-items-center justify-content-between m-0">
                <div class="header__left">
                    <div class="header-logo">
                        <div class="header-logo__item header-logo__item--keg">
                            <a href="/">
                                <img src="/design/images/logo.png" style="width: 120px;float: left;">
                                <span class="title">
										Қўшкўпир тумани
										<br>
										ҳокимлиги
										<span class="subtitle">Расмий веб-сайти <sup style="color: red;">beta</sup></span>
									</span>
                            </a>
                        </div>
                    </div><!-- /.header-logo -->
                    <div class="header__hamburger">
                        <div class="header-hamburger d-flex align-items-center justify-content-center js-header-hamburger">
                            <div class="hamburger hamburger--spring">
                                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                            </div>
                        </div>
                    </div>
                </div><!-- /.header__left -->

                <div class="header__right">
                    <div class="header__right-row">
                        <div class="header__lang">
                            <div class="header-lang" id="languages">
                                <a class="header-lang__link link" id="latinica" style="cursor: pointer;" onclick="$(&#39;#latinica&#39;).hide();$(&#39;#cirilica&#39;).fadeIn();$(&#39;#cirilica&#39;).html();" title="O&#39;zbek lotin alifbosiga o&#39;tish">
                                    Lotin
                                </a>
                                <a class="header-lang__link link" id="cirilica" style="margin-left: -50px;display: none;cursor: pointer;" onclick="$(&#39;#cirilica&#39;).hide();$(&#39;#latinica&#39;).fadeIn();$(&#39;#latinica&#39;).html();" title="Ўзбек кирил алифбосига ўтиш">
                                    Кирил
                                </a>
                            </div><!-- /.header-lang -->
                        </div>

                        <div class="header__refs ml-7">
                            <ul class="header-refs">
                                <li class="header-refs__item">
                                    <a class="header-refs__link link link--gray p-1"
                                       href="/rss" target="_blank">
                                        <svg class="icon icon--rss mr-0">
                                            <use xlink:href="#icon--rss"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="header-refs__item bvi-hide">
                                    <a class="header-refs__link link link--gray bvi-open" href="javascript:;">
                                        <svg class="icon icon--glasses">
                                            <use xlink:href="#icon--glasses"></use>
                                        </svg>
                                        Кўз нури ожизлар учун
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="header__right-row">
                        <div class="header__safety">
                            <a target="_blank" class="header__safety-btn btn btn--type-2 btn--animate-slide" href="<?= Yii::$app->urlManager->createUrl(['/site/contact/'])?>">
								    <span>
										<svg class="icon icon--safety">
											<use xlink:href="#icon--safety"></use>
										</svg>
								        Мурожаат юбориш
								    </span>
                            </a>
                        </div>

                        <div class="header__social">
                            <div class="header-socials">
                                <a class="header-socials__link link" href="https://www.facebook.com/Qushkupiruz" target="_blank">
                                    <svg class="icon icon--facebook">
                                        <use xlink:href="#icon--facebook"></use>
                                    </svg>
                                </a>
                                <a class="header-socials__link link" href="https://instagram.com/Qushkupiruz" target="_blank">
									<i class="fa fa-instagram"></i>
                                </a>
                                <a class="header-socials__link link" href="#" target="_blank">
                                    
									<i class="fa fa-youtube"></i>
                                </a>
                                <a class="header-socials__link link" href="https://t.me/Qushkupiruz" target="_self">
									<i class="fa fa-telegram"></i>
                                </a>
                            </div><!-- /.header-socials -->
                        </div>
                        <div class="header__search">
                            <form id="q_search" action="<?= Yii::$app->urlManager->createUrl(['/site/search'])?>" class="header-search" method="post">
                                <input class="header-search__input" id="title-search-input" type="text" name="story" value="" autocomplete="off" placeholder="Сайтдан излаш...">
                                <button class="header-search__submit" name="s" type="submit">
                                    <svg class="icon icon--search">
                                        <use xlink:href="#icon--search"></use>
                                    </svg>
                                </button>
                                <input type="hidden" name="do" value="search">
                                <input type="hidden" name="subaction" value="search">
                            </form>
                        </div>


                    </div>
                </div><!-- /.header__right -->
            </div>
        </div><!-- /.container -->

        <div class="header-mobile" style="display: none;">
            <div class="header-mobile__inner d-flex flex-wrap align-items-center justify-content-center">
                <div class="header-mobile__item header-mobile__item--lang">
                    <div class="header-lang">
                        <a class="header-lang__link link is-active" href="#">ўзб</a>
                        <a class="header-lang__link link" href="#">O'zb</a>
                    </div>
                    <!-- /.header-lang -->
                    <ul class="header-mobile__refs d-sm-none">


                        <li class="header-mobile__refs-item bvi-hide ml-3">
                            <a class="link link--gray bvi-open p-2" href="javascript:;">
                                <svg class="icon icon--glasses">
                                    <use xlink:href="#icon--glasses"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="header-mobile__item header-mobile__item--refs d-none d-sm-block">
                    <ul class="header-refs">
                        <li class="header-refs__item">
                            <a class="header-refs__link link link--gray p-1" target="_blank">
                                <svg class="icon icon--rss mr-0">
                                    <use xlink:href="#icon--rss"></use>
                                </svg>
                            </a>
                        </li>

                        <li class="header-refs__item bvi-hide">
                            <a class="header-refs__link link link--gray bvi-open" href="javascript:;">
                                <svg class="icon icon--glasses">
                                    <use xlink:href="#icon--glasses"></use>
                                </svg>
                                Ko'zi ojizlar uchun imkoniyat
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="header-mobile__item header-mobile__item--socials d-none d-sm-block">
                    <div class="header-socials">
                        <a class="header-socials__link link" href="https://facebook.com/hokimermanov" target="_blank">
                            <svg class="icon icon--facebook">
                                <use xlink:href="#icon--facebook"></use>
                            </svg>
                        </a>
                        <a class="header-socials__link link" href="https://twitter.com/Ermanov_f" target="_blank">
                            <svg class="icon icon--twitter">
                                <use xlink:href="#icon--twitter"></use>
                            </svg>
                        </a>
                        <a class="header-socials__link link" href="#wechat-modal" target="_self">
                            <svg class="icon icon--wechat">
                                <use xlink:href="#icon--wechat"></use>
                            </svg>
                        </a>
                    </div>
                    <!-- /.header-socials -->
                </div>

                <div class="header-mobile__item header-mobile__item--search">
                    <form class="header-search" action="#">
                        <input class="header-search__input" type="text" name="query" placeholder="Маълумот қидириш" value="" />
                        <button class="header-search__submit" type="submit">
                            <svg class="icon icon--search">
                                <use xlink:href="#icon--search"></use>
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="header-mobile__item header-mobile__item--safety">
                    <a class="header__safety-btn btn btn--type-2 btn--animate-slide" href="<?= Yii::$app->urlManager->createUrl(['/site/contact'])?>">
			                <span>
			                    <svg class="icon icon--safety">
			                        <use xlink:href="#icon--safety"></use>
			                    </svg>
								Мурожаат юбориш
			                </span>
                    </a>
                </div>


                <div class="header-mobile__item header-mobile__item--nav">
                    <nav class="nav">
                        <?= \app\components\MenuBuilder::generate('menu')?>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="main">
        <section class="section s-nav mb-0">
            <nav class="nav">

                <?= \app\components\MenuBuilder::generate('menu')?>



            </nav>
        </section>


        <?php if(Yii::$app->controller->action->id == 'index'){?>




            <section class="section s-intro-slider">
                <div class="intro-slider js-intro-slider">
                    <div class="intro-slider__list slick-slider">
                        <?php  $ns = \app\models\News::find()->where(['<>','image','default.jpg'])->orderBy(['created'=>SORT_DESC])->limit(4)->all(); foreach ($ns as $item):?>
                            <div>
                                <div class="intro-slider__slide">
                                    <div class="intro-slider__image-wrap">
                                        <div class="intro-slider__image" style="background-image: url('/uploads/<?= $item->image?>')"></div>
                                    </div>
                                    <div class="container h-100">
                                        <div class="intro-slider__info">
                                            <h2 class="intro-slider__title"><?= $item->name ?></h2>
                                            <div class="intro-slider__desc"><p><a href="<?= Yii::$app->urlManager->createUrl(['/site/view','code'=>$item->code])?>"><?= mb_substr($item->preview,0,255)?>...</a></p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="intro-slider__dots container"></div>
                </div><!-- /.intro-slider -->
            </section>



        <?php }?>


        <section class="section">
            <div class="container">
                <div class="section__inner">
                    <div class="row">

                        <div class="col-md-9 col-lg-12 col-xl-9">

                            <?= $content?>


                        </div>

                        <div class="col-md-3 col-lg-12 col-xl-3">

                            <div class="aside-block second-nav">
                                <ul class="second-nav__list">
                                    <img src="/bg/2021.jpg" />
                                </ul>
                            </div>
                            <h2 class="title-section">Оммавий сўровнома</h2>
                            <?= $this->render('/site/_vote')?>
                            <hr />
                            <h2 class="title-section">Сайт Бўлимлари</h2>
                            <div class="aside-block second-nav">
                                <ul class="second-nav__list">
                                    <?php foreach (\app\models\Category::find()->where(['icon'=>'/site/news'])->all() as $item):?>
                                        <li class="is-active">
                                            <a class="link" href="<?= Yii::$app->urlManager->createUrl(['/site/news','code'=>$item->code])?>">
                                                <?= $item->name?>
                                            </a>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>






        <?php if(Yii::$app->controller->action->id == 'index'){?>

        <section class="section mb-xl-7 section__inner line-decor line-decor--2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mb-4 mb-xl-0">
                        <div class="posts">
                            <br />
                            <h2 class="title-section">
                                <a class="link link--black-3" href="<?= Yii::$app->urlManager->createUrl(['/site/news','code'=>'elonlar-va-tenderlar'])?>">ЭЪЛОНЛАР ВА ОЧИҚ ТЕНДЕРЛАР</a>
                            </h2>
                            <div class="row">
                                <?php foreach (\app\models\News::find()->where(['cat_id'=>\app\models\Category::findOne(['code'=>'elonlar-va-tenderlar'])->id])->orderBy(['created'=>SORT_DESC])->limit(3)->all() as $item):?>
                                <div class="posts-item col-md-4 mb-5">
                                    <a class="posts-item__image-wrap ratio link" href="<?= Yii::$app->urlManager->createUrl(['/site/view','code'=>$item->code])?>">
                                        <img class="posts-item__image" src="/uploads/<?= $item->image?>" alt="<?= $item->name?>">
                                    </a>
                                    <div class="posts-item__info">
                                        <h3 class="posts-item__title">
                                            <a class="link link--black-2" href="<?= Yii::$app->urlManager->createUrl(['/site/view','code'=>$item->code])?>" title="<?= $item->name?>"><?= mb_substr($item->name,0,100)?></a>
                                        </h3>
                                        <div class="posts-item__meta">
                                            <time class="posts-item__date" datetime="<?= $item->created?>"><?= $this->render('/site/_date',['date'=>$item->created])?></time>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div><!-- /.posts -->
                    </div>

                    <div class="col-xl-3">
                        <div class="widget-blog"><br />
                            <h2 class="title-section">Мурожаат</h2>

                            <div class="widget-blog__inner">
                                <h3 class="widget-blog__title">
                                    <a class="link" href="<?= Yii::$app->urlManager->createUrl(['/site/contact'])?>" target="_blank">Мурожаат қолдириш</a>
                                    <svg class="icon icon--blog">
                                        <use xlink:href="#icon--blog"></use>
                                    </svg>
                                </h3>

                                <p class="widget-blog__desc"><p>Қўшкўпир тумани ҳокими <?= $hokim?>га мурожаат қолдириш</p></p>
                            </div>
                        </div><!-- /.widget-blog -->
                    </div>

                </div>
            </div>
        </section>





        <!-- faqat boshifga ruhsat berish -->
        <div class="section">
            <div class="container">
                <div class="col-md-4">
                    <div id="sharedMapInfo" class="poll">
                        <div class="card-body" data-id="33">
                            <div class="row no-gutters">
                                <h3>Қўшкўпир тумани ҳокимлиги</h3>
                            </div>
                            <div>
                                <br>
                                <p>
                                   
                                    <span class="mapicons"></span><strong>Тел:</strong> +998 (62) 32-95-229 <br>
                                    <span class="mapicons"></span><strong>Тел:</strong> +998 (62) 32-95-229 <br>
                                    <span class="mapicons"></span><strong>Фуқароларни қабул қилиш кунлари:</strong> <br>
                                    Ҳар ҳафтанинг чоршанба куни соат 9. 00дан 11.00 гача Қўшкўпир тумани ҳокимлиги биноси фуқароларни қабул қилиш хонасида (1 қават).

                                </p><p>
                                    <span class="mapicons"><i class="fas fa-map-marked-alt"></i></span><strong>Манзил: Беруний кўчаси 14-уй</strong>
                                </p>
                                <p><span class="mapicons"><i class="fas fa-phone-alt"></i></span><strong>Тел.:</strong> +998 (62) 32-95-229
                                    <br><span class="mapicons2"></span><strong>Факс:</strong> +998 (62) 32-95-229</p>
                                <p><span class="mapicons"><i class="fas fa-envelope"></i></span><strong>e-xat:</strong> qushkupir@exat.uz
                                    <br><span class="mapicons2"></span><strong>Эл-почта:</strong> info@qushkupir.uz</p>
                                <p><span class="mapicons"><i class="fas fa-clock"></i></span><strong>Иш вақти:</strong> 9:00 дан 18:00 гача
                                    <br><span class="mapicons2"></span>Душанба-Жума</p>
								<p><span class="mapicons"><i class="fas fa-clock"></i></span><strong>Дам олиш куни:</strong> шанба ва якшанба
                                    </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53125.997702115375!2d60.33085203275691!3d41.531718467274615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2145580b4e4243d8!2z0prRntGI0LrRntC_0LjRgCDRgtGD0LzQsNC9INKz0L7QutC40LzQu9C40LPQuA!5e0!3m2!1sru!2s!4v1631017098082!5m2!1sru!2s"  style="border:0; width: 100%; height: 468px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <section class="section s-partners">
            <div class="container">
                <div class="partners slick-slider js-partners">




                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="https://gov.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/365govuz.png" alt="Ўзбекистон Республикаси Ҳукумат портали"></div>
                            <div class="text"><span>Ўзбекистон Республикаси Ҳукумат портали</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://press-service.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/press-serviceuz.png" alt="Ўзбекистон Республикаси Президент матбуот хизмати"></div>
                            <div class="text"><span>Ўзбекистон Республикаси Президент матбуот хизмати</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://senat.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/press-serviceuz.png" alt="Ўзбекистон Республикаси Олий Мажлисининг Сенати"></div>
                            <div class="text"><span>Ўзбекистон Республикаси Олий Мажлисининг Сенати</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://parliament.gov.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/parliamentgovuz.png" alt="Ўзбекистон Республикаси Олий Мажлиси Конунчилик Палатаси"></div>
                            <div class="text"><span>Ўзбекистон Республикаси Олий Мажлиси Конунчилик Палатаси</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="https://my.gov.uz" target="_blank">
                            <div class="pic"><img class="img" src="/icon/mygovuz.png" alt="Ягона интерактив давлат хизматлари портали"></div>
                            <div class="text"><span>Ягона интерактив давлат хизматлари портали</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://data.gov.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/datagovuz.png" alt="Ўзбекистон Республикаси очиқ маълумотлар портали"></div>
                            <div class="text"><span>Ўзбекистон Республикаси очиқ маълумотлар портали</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://lex.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/lexuz.png" alt="Ўзбекистон Республикаси Қонун ҳужжатлари маълумотлари миллий базаси"></div>
                            <div class="text"><span>Ўзбекистон Республикаси Қонун ҳужжатлари маълумотлари миллий базаси</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://e-kommunal.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/e-kommunaluz.png" alt="Коммунал хўжалиги ва уй-жой фонди портали"></div>
                            <div class="text"><span>Коммунал хўжалиги ва уй-жой фонди портали</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://license.gov.uz" target="_blank">
                            <div class="pic"><img class="img" src="/icon/licensegovuz.png" alt="Ўзбeкистон Рeспубликасида элeктрон лицензиялаш"></div>
                            <div class="text"><span>Ўзбeкистон Рeспубликасида элeктрон лицензиялаш</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://365.gov.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/365govuz.png" alt="Ўзбекистон Республикаси воқеалар ва тадбирлар портали"></div>
                            <div class="text"><span>Ўзбекистон Республикаси воқеалар ва тадбирлар портали</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://constitution.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/govuz.png" alt="Ўзбекистон Республикаси Конституцияси"></div>
                            <div class="text"><span>Ўзбекистон Республикаси Конституцияси</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://mustaqillik.gov.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/mustaqillikgovuz.png" alt="Мустақил Ўзбекистон солномаси"></div>
                            <div class="text"><span>Мустақил Ўзбекистон солномаси</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://dd.gov.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/ddgovuz.png" alt="Ўзбекистон Республикаси давлат дастурлари портали"></div>
                            <div class="text"><span>Ўзбекистон Республикаси давлат дастурлари портали</span></div>
                        </a>
                    </div>
                    <div class="partners__slide">
                        <a class="partners__link link link--image" href="http://dxarid.uzex.uz/" target="_blank">
                            <div class="pic"><img class="img" src="/icon/dxariduzexuz.png" alt="Давлат харидлари савдо тизими"></div>
                            <div class="text"><span>Давлат харидлари савдо тизими</span></div>
                        </a>
                    </div>
                </div>

            </div>
            <?php }?>

</div>

<footer class="footer line-decor line-decor--3" style="background: url(images/gif_gerb.svg) #009ac5 no-repeat bottom center;">
    <div class="container">

        <div class="footer__bottom">
            <div class="row align-items-center">
                <div class="col-xl-4 mb-6 mb-xl-0 order-1 order-xl-0">
                    <div class="footer__copyright">
                        <div class="footer__copyright-title">&copy;  &laquo;Қўшкўпир тумани ҳокимлиги ахборот хизмати&raquo;<br /> 2020-<?= date('Y')?></div>
                        <div class="footer__copyright-desc"><p>Сайтда хатоликларга дуч келсангиз Ctrl + Enter<br /> тугмаларини босган ҳолда бизга хабар<br /> жўнатишинингиз мумкинг</p></div>
                    </div><!-- /.footer__copyright -->
                </div>

                <div class="col-xl-5 mb-5 mb-xl-0 order-0 order-xl-0 d-print-none">
                    <ul class="footer__controls">
                        <li class="footer__controls-item bvi-hide">
                            <a class="footer__controls-link bvi-open" href="javascript:;">
						            <span class="footer__controls-icon">
										<svg class="icon icon--glasses">
											<use xlink:href="#icon--glasses"></use>
										</svg>
									</span>
                                Кўз нури ожизлар учун
                            </a>
                        </li>

                        <li class="footer__controls-item">
                            <a class="footer__controls-link" href="#">
						            <span class="footer__controls-icon">
										<svg class="icon icon--map">
											<use xlink:href="#icon--map"></use>
										</svg>
									</span>
                                Сайт харитаси
                            </a>
                        </li>

                        <!-- START WWW.UZ TOP-RATING --><SCRIPT language="javascript" type="text/javascript">
                            <!--
                            top_js="1.0";top_r="id=45884&r="+escape(document.referrer)+"&pg="+escape(window.location.href);document.cookie="smart_top=1; path=/"; top_r+="&c="+(document.cookie?"Y":"N")
                            //-->
                        </SCRIPT>
                        <SCRIPT language="javascript1.1" type="text/javascript">
                            <!--
                            top_js="1.1";top_r+="&j="+(navigator.javaEnabled()?"Y":"N")
                            //-->
                        </SCRIPT>
                        <SCRIPT language="javascript1.2" type="text/javascript">
                            <!--
                            top_js="1.2";top_r+="&wh="+screen.width+'x'+screen.height+"&px="+
                                (((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth)
                            //-->
                        </SCRIPT>
                        <SCRIPT language="javascript1.3" type="text/javascript">
                            <!--
                            top_js="1.3";
                            //-->
                        </SCRIPT>
                        <SCRIPT language="JavaScript" type="text/javascript">
                            <!--
                            top_rat="&col=0063AF&t=ffffff&p=E6850F";top_r+="&js="+top_js+"";document.write('<a href="http://www.uz/ru/res/visitor/index?id=45884" target=_top><img src="http://cnt0.www.uz/counter/collect?'+top_r+top_rat+'" width=88 height=31 border=0 alt="Топ рейтинг www.uz"></a>')//-->
                        </SCRIPT><NOSCRIPT><A href="http://www.uz/ru/res/visitor/index?id=45884" target=_top><IMG height=31 src="http://cnt0.www.uz/counter/collect?id=45884&pg=http%3A//uzinfocom.uz&&col=0063AF&amp;t=ffffff&amp;p=E6850F" width=88 border=0 alt="Топ рейтинг www.uz"></A></NOSCRIPT><!-- FINISH WWW.UZ TOP-RATING -->

                    </ul><!-- /.footer__controls -->
                </div>

                <div class="col-xl-3 mb-xl-0 order-2 order-xl-0 d-print-none">
                    <div class="footer__dev">
                        Веб-сайт
                        <a class="link" href="http://raqamli.uz" target="_blank">
                            &laquo;Рақамли иқтисодиётни ривожлантириш&raquo;
                        </a>
                        МЧЖ томонидан яратилди.
                    </div><!-- /.footer__dev -->
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</footer>



</div>




<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
