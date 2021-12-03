<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>
<html lang="en">
<head>
<title>Logistics &mdash; Colorlib Website Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="statics/css/style.css">

<link rel="stylesheet" href="statics/css/bootstrap.min.css">
<link rel="stylesheet" href="statics/css/magnific-popup.css">
<link rel="stylesheet" href="statics/css/jquery-ui.css">
<link rel="stylesheet" href="statics/css/owl.carousel.min.css">
<link rel="stylesheet" href="statics/css/owl.theme.default.min.css">

<link rel="stylesheet" href="statics/css/bootstrap-datepicker.css">

<link rel="stylesheet" href="statics/css/flaticon.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">


<link rel="stylesheet" href="statics/css/aos.css">

<link rel="stylesheet" href="statics/css/style1.css">
<div class="wrap">
<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '后台主页', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<script src="statics/js/jquery-3.3.1.min.js"></script>
<script src="statics/js/jquery-migrate-3.0.1.min.js"></script>
<script src="statics/js/jquery-ui.js"></script>
<script src="statics/js/jquery.easing.1.3.js"></script>
<script src="statics/js/popper.min.js"></script>
<script src="statics/js/bootstrap.min.js"></script>
<script src="statics/js/owl.carousel.min.js"></script>
<script src="statics/js/jquery.stellar.min.js"></script>
<script src="statics/js/jquery.countdown.min.js"></script>
<script src="statics/js/jquery.magnific-popup.min.js"></script>
<script src="statics/js/bootstrap-datepicker.min.js"></script>
<script src="statics/js/aos.js"></script>
<script src="statics/js/main.js"></script>

</body>
</html>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
