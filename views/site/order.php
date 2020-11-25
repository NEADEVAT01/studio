<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form ActiveForm */
$this->title = 'Сделать заказ';
?>
<main class="order">
    <h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>
    <div class="site-register">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'service')->dropDownList([
            'Сведение' => 'Сведение',
            'Мастеринг' => 'Мастеринг',
            'Тюнинг голоса' => 'Тюнинг голоса',
            'Реампинг' => 'Реампинг'
        ]); ?>
        <?= $form->field($model, 'file')->fileInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div>
</main>
<!-- site-order -->
