<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'service')->dropDownList([
        'Сведение' => 'Сведение',
        'Мастеринг' => 'Мастеринг',
        'Тюнинг голоса' => 'Тюнинг голоса',
        'Реампинг' => 'Реампинг'
    ]) ?>

    <?= $form->field($model, 'total_price')->textInput() ?>

    <?= $form->field($model, 'responsible_worker_id')->textInput() ?>

    <?= $form->field($model, 'source_files')->Input('file') ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
