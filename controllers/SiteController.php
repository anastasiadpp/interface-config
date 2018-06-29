<?php

namespace app\controllers;

use app\models\PasienSearch;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\RegisterForm;
use app\models\PemesananForm;

use app\models\base\BkTable;
use app\models\base\BkTableDpc;
use app\models\base\LinkTable;
use app\models\base\LinkTableDpc;
use app\models\base\CtxTableDpc;
use app\models\base\RefTableDpc;
use app\models\base\PitTableDpc;
use app\models\base\Admin;
use app\models\Pasien;
use app\models\Dokter;
use app\models\TransaksiPemesanan;
use app\models\TransaksiPenjualan;
use app\models\Barang;
use app\models\Kategori;


use yii\db\Expression;


class SiteController extends Controller
{
    /**
     * @inheritdoc
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
     * @inheritdoc
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
        if (Yii::$app->user->isGuest) {
            return $this->redirect(["site/login"]);
        }
        $bktable = count(BkTable::find()->all());
        $bktabledpc = BkTableDpc::find()->select('TABLE_REF')->distinct()->count();
        $linktabledpc = LinkTableDpc::find()->select('TABLE_LINK')->distinct()->count();
        $ctxtabledpc = CtxTableDpc::find()->select('TABLE_DESC')->distinct()->count();
        $reftabledpc = RefTableDpc::find()->select('TABLE_REF')->distinct()->count();
        $pittabledpc = PitTableDpc::find()->select('TABLE_PIT')->distinct()->count();

        return $this->render('index', [
            'bktable' => $bktable,
            'bktabledpc' => $bktabledpc,
            'linktabledpc' => $linktabledpc,
            'ctxtabledpc' => $ctxtabledpc,
            'reftabledpc' => $reftabledpc,
            'pittabledpc' => $pittabledpc,
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = 'layout-login';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            //log last login column
            $user = Yii::$app->user->identity;
            $user->LAST_LOGIN = date('d-m-Y h:i:s');
            $user->AUTHKEY = $user->AUTHKEY;
            $user->save();

            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionRegister()
    {
        $this->layout = 'layout-login';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new RegisterForm();

        if ($model->load(Yii::$app->request->post()) && $model->register()) {
            Yii::$app->session->addFlash("success", "Register success, please login");
            return $this->redirect(["site/login"]);
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {

        $user = Yii::$app->user->identity;
        $user->LAST_LOGOUT = 'TEst';
        $user->LAST_LOGOUT = date('d-m-Y h:i:s');
        $user->AUTHKEY = $user->AUTHKEY;
        $user->save();
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

}
