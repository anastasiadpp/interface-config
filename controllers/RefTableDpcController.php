<?php

namespace app\controllers;

use Yii;
use app\models\base\RefTableDpc;
use app\models\base\TableTemp;
use app\models\RefTableDpcSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RefTableDpcController implements the CRUD actions for RefTableDpc model.
 */
class RefTableDpcController extends Controller
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
     * Lists all RefTableDpc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RefTableDpcSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RefTableDpc model.
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
     * Creates a new RefTableDpc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RefTableDpc();
        $temp = new TableTemp();

        $max = $model::find() // AQ instance
        ->select('max(ID_REF_TABLE)') // we need only one column
        ->count();

        $model->ID_REF_TABLE = $max+1;

        if ($model->load(Yii::$app->request->post()) && $model->load(Yii::$app->request->post())) {
            $combine = $model->TABLE_SOURCE.'.'.$model->RECORD_SOURCE;
            $model->TABLE_SOURCE = $combine;
            $model->save();
            $maxtemp = $temp::find() // AQ instance
            ->select('ID_TEMP_TABLE') // we need only one column
            ->count();
            $temp->ID_TEMP_TABLE=$maxtemp+1;
            $temp->TABLE_NAME = $model->TABLE_REF;
            $temp->TYPE_NAME = 'R';

            if($temp->save()){
                return $this->redirect(['view', 'id' => $model->ID_REF_TABLE]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing RefTableDpc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_REF_TABLE]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing RefTableDpc model.
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
     * Finds the RefTableDpc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RefTableDpc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RefTableDpc::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
