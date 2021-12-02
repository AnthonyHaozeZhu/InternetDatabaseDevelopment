<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
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
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
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
<?php $this->endPage() ?>
