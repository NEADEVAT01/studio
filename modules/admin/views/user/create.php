<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Создать пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<main class="admins">

    <h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>
<div class="site-register">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</main>
