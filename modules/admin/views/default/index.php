<?php

use yii\helpers\Html;

$this->title = 'Админ-панель';
?>

<main class="admins">
    <h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>
    <h2 class="jumbotron2">Выберите раздел</h2>
    <div class="admin-menu">
        <a class="ad-cust" href="/../admin/user">
            <img src="../../web/images/img4.jpg">
            <h1>Пользователи</h1>
        </a>
        <a class="ad-cust" href="/../admin/orders">
            <img src="../../web/images/img5.jpg">
            <h1>Заказы</h1>
        </a>
        <a class="ad-cust" href="/../admin/contact">
            <img src="../../web/images/img6.jpg">
            <h1>Вопросы</h1>
        </a>
    </div>
</main>