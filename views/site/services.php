<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Услуги';
$page = 'services';
?>
<main class="<?php echo $page ?>">
	<h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>
	<div>
			<div class="ad-cust">
				<img src="../../web/images/img4.jpg">
				<h1>Сведение</h1>
                <h3>15 000 р.</h3>
				<a href="/site/order">Запиcаться</a>
			</div>
			<div class="ad-cust">
				<img src="../../web/images/img5.jpg">
				<h1>Мастеринг</h1>
                <h3>10 000 р.</h3>
				<a href="/site/order">Запиcаться</a>
			</div>
			<div class="ad-cust">
				<img src="../../web/images/img6.jpg">
				<h1>Тюнинг голоса</h1>
                <h3>5 000 р.</h3>
				<a href="/site/order">Запиcаться</a>
			</div>
			<div class="ad-cust">
				<img src="../../web/images/img7.jpg">
				<h1>Реампинг</h1>
                <h3>8 000 р.</h3>
				<a href="/site/order">Запиcаться</a>
			</div>
	</div>
</main>