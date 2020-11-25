<?php

namespace app\modules\admin\controllers;
use app\models\Orders;
use app\models\User;
use app\models\Contact;
use yii\web\Controller;


/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionUsers() {
        $allUsers = User::find()->orderBy('id desc')->all();

        return $this->render('users', [
            'allUsers' => $allUsers
        ]);
    }
    public function actionOrders() {
        $allOrders = Orders::find()->orderBy('id desc')->all();
        $allUsers = User::find()->orderBy('id desc')->all();
        return $this->render('orders', [
            'allOrders' => $allOrders
        ]);
    }
    public function actionContacts() {
        $allQuestions = Contact::find()->orderBy('id desc')->all();
        return $this->render('contacts', [
            'allQuestions' => $allQuestions
        ]);
    }
}
