<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<main class="admins">

    <h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить заказы', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer_id',
            'service',
            'total_price',
            'responsible_worker_id',
            'source_files',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</main>
