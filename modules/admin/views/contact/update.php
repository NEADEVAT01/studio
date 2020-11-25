<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */

$this->title = 'Изменить вопрос: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Вопросы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
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
