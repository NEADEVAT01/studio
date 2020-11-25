<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Изменить пользователя: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<main class="admins">

    <h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>
<div class="site-register">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</main>
