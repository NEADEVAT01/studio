<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Регистрация';
?>
<main class="register">
    <h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>
<div class="site-register">

    <?php $form = ActiveForm::begin(['id' => 'register-form',
        'enableAjaxValidation' => true]); ?>

        <?= $form->field($model, 'Nickname')?>
        <?= $form->field($model, 'Username')?>
        <?= $form->field($model, 'Email') ?>
        <?= $form->field($model, 'Password')->passwordInput() ?>
        <?= $form->field($model, 'repeat_password')->passwordInput() ?>
         <?= $form->field($model, 'file', ['enableAjaxValidation' => false])->fileInput()?>
    
        <div class="form-group">
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
</main>