<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contact */

$this->title = 'Добавить вопрос';
$this->params['breadcrumbs'][] = ['label' => 'Вопросы', 'url' => ['index']];
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
