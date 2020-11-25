<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Задать вопрос';
?>
<main class="forum">
    <h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>
    <div class="site-register">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Nickname') ?>
        <?= $form->field($model, 'Email') ?>
        <?= $form->field($model, 'Topic') ?>
        <?= $form->field($model, 'Question') ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

</main>
