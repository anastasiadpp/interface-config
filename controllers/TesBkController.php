<?php

namespace app\controllers;

use Yii;
use app\models\base\TesBk;
use app\models\base\TesBkScp;
use app\models\base\TableTemp;
use app\models\base\AllColum;
use yii\helpers\ArrayHelper;
use app\models\TesBkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\db\Expression;
/**
 * TesBkController implements the CRUD actions for TesBk model.
 */
class TesBkController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TesBk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TesBkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TesBk model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TesBk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TesBk();
        $temp = new TableTemp();
        $tes = new TesBkScp();
        $max = $model::find() // AQ instance
        ->select('ID_BK_TABLE') // we need only one column
        ->count();

        $model->ID_BK_TABLE = $max+1;
        //$model->START_DATE = new Expression('SYSDATE()'); 

        if ($model->load(Yii::$app->request->post()) && $model->load(Yii::$app->request->post()) && $model->load(Yii::$app->request->post())) {
            $combine = $model->TABLE_SOURCE.'.'.$model->RECORD_SOURCE;
            $model->TABLE_SOURCE = $combine;
            $model->save();
            $maxtemp = $temp::find() // AQ instance
            ->select('ID_TEMP_TABLE') // we need only one column
            ->count();
            $maxtes = $tes::find() // AQ instance
            ->select('ID_BK_TABLE') // we need only one column
            ->count();
            $temp->ID_TEMP_TABLE=$maxtemp+1;
            $temp->TABLE_NAME = $model->TABLE_REF;
            $temp->TYPE_NAME = 'BK';
            $tes->ID_BK_TABLE_SCP = $maxtes+1;
            $tes->TABLE_REF = $model ->TABLE_REF;
            $tes->KEY_REF = $model->KEY_REF;
            $tes->KEY_SOURCE = $model->KEY_SOURCE;
            $tes->RECORD_SOURCE = $model->RECORD_SOURCE;
            $tes->RUN_KEY = $model->RUN_KEY;

            if($temp->save()&& $tes->save()){
                return $this->redirect(['view', 'id' => $model->ID_BK_TABLE]);    
            }

            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TesBk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $tes = new TesBkScp();
        $coba = $tes::find()->where(['TABLE_REF' => $model ->TABLE_REF,
            'KEY_REF' => $model->KEY_REF,
            'KEY_SOURCE' => $model->KEY_SOURCE,
            'RECORD_SOURCE' => $model->RECORD_SOURCE,
            'RUN_KEY' => $model->RUN_KEY])->one();

        if ($model->load(Yii::$app->request->post()) && $model->load(Yii::$app->request->post())) {
            $coba->TABLE_REF = $model ->TABLE_REF;
            $coba->KEY_REF = $model->KEY_REF;
            $coba->KEY_SOURCE = $model->KEY_SOURCE;
            $coba->RECORD_SOURCE = $model->RECORD_SOURCE;
            $coba->RUN_KEY = $model->RUN_KEY;
            $model->save();
            if($coba->save()){
                return $this->redirect(['view', 'id' => $model->ID_BK_TABLE]);    
            }

        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    

    /**
     * Deletes an existing TesBk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->END_DATE = date('d-M-y');
        $model->save();
           
        return $this->redirect(['index']);
    }

    /**
     * Finds the TesBk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TesBk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TesBk::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
