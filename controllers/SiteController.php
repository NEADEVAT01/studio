<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;
use app\models\Contact;
use app\models\Orders;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }


    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionOrder()
    {
        $model = new Orders();
        if (!Yii::$app->user->isGuest) {
            $model['customer_id'] = Yii::$app->user->identity->ID;
            $model['status'] = 'В обработке';
            if ($model->load(Yii::$app->request->post())) {
                // Загружаем файл в переменную до валидации
                $model->file = UploadedFile::getInstance($model, 'file');
                // если валидация прошла успешно и файл был загружен
                if ($uploadedFileName = $model->upload()) {
                    $model->source_files = $uploadedFileName;
                    // принудительная установка роли
                    if ($model['service'] == "Сведение") {
                        $model['total_price'] = 15000;
                    } elseif ($model['service'] == "Мастеринг") {
                        $model['total_price'] = 10000;
                    } elseif ($model['service'] == "Тюнинг голоса") {
                        $model['total_price'] = 5000;
                    } elseif ($model['service'] == "Реампинг") {
                        $model['total_price'] = 8000;
                    }
                    $model->save(false);
                    Yii::$app->session
                        ->setFlash('success', 'Вы успешно сделали заказ!');
                    // перенаправление на главную
                    return $this->redirect('profile');
                }
            }
            return $this->render('order', [
                'model' => $model,
            ]);
        } else {
            return $this->redirect('login');
        }}



    public
    function actionServices()
    {
        return $this->render('services');
    }

    public
    function actionCustomers()
    {
        return $this->render('customers');
    }

    public
function actionRegister()
{
    $model = new \app\models\User();
    // ajax проверка
    if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
        Yii::$app->response->format = Response::FORMAT_JSON;
        return ActiveForm::validate($model);
    }

    if ($model->load(Yii::$app->request->post())) {
        // Загружаем файл в переменную до валидации
        $model->file = UploadedFile::getInstance($model, 'file');
        // если валидация прошла успешно и файл был загружен
        if ($model->validate() && $uploadedFileName = $model->upload()) {
            $model->image = $uploadedFileName;
            // принудительная установка роли
            $model->Status = 'User';
            $model->save(false);
            // установка флеш-сообщения, для улучшения юзабилити
            Yii::$app->session
                ->setFlash('success', 'Вы успешно зарегистрированы!');
            // перенаправление на главную
            return $this->goHome();
        }
    }
    return $this->render('register', [
        'model' => $model,
    ]);
}

    public
    function actionProfile()
    {
        if (!Yii::$app->user->isGuest) {
            $orders = Orders::find()->where(['customer_id' => Yii::$app->user->identity->ID])->all();
            return $this->render('profile', ['orders' => $orders]);
        } else {
            return $this->render('index');
        }
    }

    public
    function actionContact()
    {
        $model = new Contact();
        if (!Yii::$app->user->isGuest) {
            $model['Nickname'] = Yii::$app->user->identity->Nickname;
            $model['Email'] = Yii::$app->user->identity->Email;
            if ($model->load(Yii::$app->request->post())) {
                $model->save(false);
                if ($model->validate()) {
                    Yii::$app->session
                        ->setFlash('success', 'Вы успешно отправили вопрос!');
                    // перенаправление на главную
                    return $this->goHome();
                }
            }
        }

        return $this->render('contact', [
            'model' => $model
        ]);
    }
    public function downloadFile($url)
    {

        return Yii::$app->response->sendFile(Yii::getAlias('@webroot') . $url);
    }
}
