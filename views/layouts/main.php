<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../web/css">
    <link rel="shortcut icon" href="../../web/images/favicon.jpg" type="image/x-icon">
    <script src="../../web/audiojs/audio.min.js"></script>
    <script>
        audiojs.events.ready(function () {
            var as = audiojs.createAll();
        });
    </script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<?php if (!Yii::$app->user->isGuest) { ?>
    <header>
        <a href="/site/index"><img class="logo" src="../../web/images/site_logo.png"></a>
        <a href="/site/services" class="nav">Услуги</a>
        <a href="/site/customers" class="nav">Резюме</a>
        <a href="/site/contact" class="nav">Задать вопрос</a>
        <a href="/site/order" class="nav">Сделать заказ</a>

            <a class="profile_pic" href="/site/profile"><img class="profile_pic"
                                                             src="<?php echo Yii::$app->user->identity->image; ?>"></a>

            <div class="profile_btns2">
                <a class="username"><?php echo Yii::$app->user->identity->Username; ?></a><br>
                <a href="/site/profile" class="profile_btn">Профиль</a><a class="line"> | </a>
                <?=
                Html::beginForm(['/site/logout'], 'post') . Html::submitButton(
                    'Выйти',
                    ['class' => 'logout_btn']
                ) . Html::endForm() ?>

        </div>

    </header>
<?php } else { ?>
    <header>
        <a href="/site/index"><img class="logo" src="../../web/images/site_logo.png"></a>
        <a href="/site/services" class="nav">Услуги</a>
        <a href="/site/customers" class="nav">Резюме</a>
        <a href="/site/contact" class="nav">Задать вопрос</a>
        <a href="/site/order" class="nav">Сделать заказ</a>
        <a href="/site/login" class="log">Авторизация </a>|
        <a href="/site/register" class="log">Регистрация</a>
    </header>
<?php } ?>
<?= $content ?>

<footer class="footer">
    <p>&copy; NEADEKVAT <?= date('Y') ?></p>
    <a href="
    <?php
    if (Yii::$app->user->identity->Status == 'Admin') {
        echo '/../admin';
    } else {
        echo 'index';
    }

    ?>

"><img class="logo" src="../../web/images/site_logo.png"></a>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
