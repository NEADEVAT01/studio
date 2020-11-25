<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
$this->title = "Профиль";
?>
<main class="profile">
    <h1 class="jumbotron"><?= Html::encode($this->title) ?></h1>
    <div class="profile_window">
        <ul>
            <li><img class="profile_pic" src="<?php echo Yii::$app->user->identity->image; ?>"></li>
            <li>Ник: <?php echo Yii::$app->user->identity->Nickname; ?></h1></li>
            <li>Имя пользователя: <?php echo Yii::$app->user->identity->Username; ?></li>
            <li>Email: <?php echo Yii::$app->user->identity->Email; ?></li>
            <li>Статус: <?php
                if (Yii::$app->user->identity->Status == 'Admin') {
                    echo 'Администратор';
                } else {
                    echo 'Пользователь';
                }
                ?></li>
            <li><a href="/admin/default">Перейти в Админ-панель</a></li>
            <h2>Ваши заказы</h2>
            <table>
                <tr>
                    <td>ID заказа</td>
                    <td>Услуга</td>
                    <td>Цена</td>
                    <td>Выполняет</td>
                    <td>Исходники</td>
                    <td>Статус</td>
                </tr>
                <?php foreach ($orders as $order) {
                    echo "<tr><td>" . $order['id'] . "</td>
<td>" . $order['service'] . "</td>
<td>" . $order['total_price'] . "</td>
<td>" . Yii::$app->user->identity->findOne(['ID' => $order['responsible_worker_id']])->Username . "</td>
<td> <form action='downloadFile(". $order['source_files'] .")'><input type='submit'></form></td>
<td>" . $order['status'] . "</td>
</tr>";
                } ?>
            </table>

        </ul>
    </div>

</main><!-- site-profile -->
