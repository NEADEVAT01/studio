<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */
/* @var $form ActiveForm */
$this->title = 'Авторизация';
?>
<main class="login">
    <h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>
    <div class="site-register">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true])  ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton('Авторизоваться', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div><!-- site-login -->
</main>

