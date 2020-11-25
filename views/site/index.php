<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Звукозаписывающая студия "Public Enemy"';
$page = "main";
?>
<main class="<?php echo $page ?>">
	<div class="section1">

		<h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>

		<h2 class="jumbotron">PUBLIC ENEMY RECORDS - это профессиональная команда которая поможет вам найти свой собственный звук</h2>

		<div class="ad">
			<img src="../../web/images/img1.jpg">
			<h2>Професиональное оборудование</h2>
		</div>
		<div class="ad">
			<img src="../../web/images/img2.jpg">
			<h2>Опытная команда</h2>
		</div>
		<div class="ad">
			<img src="../../web/images/img3.jpg">
			<h2>Низкие цены</h2>
		</div>
	</div>

	<a class="section2" href="/site/services">
		<h1>Услуги</h1>
		<big>
			Наша студия предоставляет множество услуг по обработке и сведению звука для реализации ваших творческих идей.
		</big>
	</a>

	<a class="section3" href="/site/contacts">
		<h1>Резюме</h1>
		<big>
			Наша команда имеет большой опыт работы с разными клиентами и множеством жанров.
		</big>
	</a>

	<a class="section4" href="/site/customers">
		<h1>Сделать заказ</h1>
		<big>
			Мы свяжемся с вами, подберем удобную для записи дату и время, обсудим все детали и будем вместе готовиться делать ваш хит
		</big>
	</a>
</main>