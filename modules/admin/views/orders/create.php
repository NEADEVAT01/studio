<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = 'Добавить заказ';
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
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
