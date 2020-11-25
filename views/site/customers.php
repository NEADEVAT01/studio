<?php

/* @var $this yii\web\View */


use yii\helpers\Html;


$this->title = 'Резюме';
$page = "customers";
?>
<main class="<?php echo $page ?>">
	<h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>
	<div class="row">
		<div class="customer">
			<img src="../../web/images/Customers/Nobody.one.jpg">
			<h2>nobody.one</h2>
			<h3>Mercy, Please Mercy! (2020)</h3>
			<h4>Tribe Solider</h4>
			<audio src="../../web/music/nobody-one-tribe-solder.mp3"/>
		</div>
		<div class="customer">
			<img src="../../web/images/Customers/KARNA.jpg">
			<h2>KARNA</h2>
			<h3>Гуцул-метал (2017)</h3>
			<h4>ARKAN</h4>
			<audio src="../../web/music/Карна - ARKAN.mp3"/>
		</div>
		<div class="customer">
			<img src="../../web/images/Customers/K.jpg">
			<h2>Кассиопея</h2>
			<h3>Крестик (2016)</h3>
			<h4>Денис</h4>
			<audio src="../../web/music/кассиопея-денис.mp3"/>
		</div>
		<div class="customer">
			<img src="../../web/images/Customers/VK.jpg">
			<h2>Василий К.</h2>
			<h3>Пока (2017)</h3>
			<h4>Привести их всех</h4>
			<audio src="../../web/music/василии-к-приведи-их-всех.mp3"/>
		</div>
	</div>
</main>
