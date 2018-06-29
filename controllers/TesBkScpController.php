<?php

namespace app\controllers;

use Yii;
use app\models\base\TesBkScp;
use app\models\TesBkScpSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TesBkScpController implements the CRUD actions for TesBkScp model.
 */
class TesBkScpController extends Controller
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
     * Lists all TesBkScp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TesBkScpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TesBkScp model.
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
     * Creates a new TesBkScp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TesBkScp();

        $max = $model::find() // AQ instance
        ->select('max(ID_BK_TABLE_SCP)') // we need only one column
        ->scalar();

        $model->ID_BK_TABLE_SCP = $max+1;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_BK_TABLE_SCP]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TesBkScp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_BK_TABLE_SCP]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TesBkScp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionLists($id)
     {
     $countPosts = \app\models\base\TesBkScp::find()
     ->where(['TABLE_REF' => $id])
     ->distinct()
     ->count();
     
     $posts = \app\models\base\TesBkScp::find()
     ->select('TABLE_REF,KEY_REF')
     ->where(['TABLE_REF' => $id])
     ->distinct()
     ->all();
     echo "<option>-Choose a Key Ref-</option>";

     if($countPosts>0){
     foreach($posts as $post){
     echo "<option value='".$post->KEY_REF."'>".$post->KEY_REF."</option>";
     
     }
     }
     else{
     echo "<option></option>";
     }
     
     }

     public function actionListkey($id)
     {
     $countPosts = \app\models\base\TesBkScp::find()
     ->where(['KEY_REF' => $id])
     ->distinct()
     ->count();
     
     $posts = \app\models\base\TesBkScp::find()
     ->select('KEY_REF,KEY_SOURCE')
     ->where(['KEY_REF' => $id])
     ->distinct()
     ->all();

     echo "<option>-Choose a Key Source-</option>";
     if($countPosts>0){
     foreach($posts as $post){
     echo "<option value='".$post->KEY_REF."'>".$post->KEY_REF."</option>";
     
     }
     }
     else{
     echo "<option></option>";
     }
     
     }

     public function actionListsource($id)
     {
     $countPosts = \app\models\base\TesBkScp::find()
     ->where(['RECORD_SOURCE' => $id])
     ->distinct()
     ->count();
     
     $posts = \app\models\base\TesBkScp::find()
     ->select('RECORD_SOURCE,RUN_KEY')
     ->where(['RECORD_SOURCE' => $id])
     ->distinct()
     ->all();

     echo "<option></option>";
     if($countPosts>0){
     foreach($posts as $post){
     echo "<option value='".$post->RECORD_SOURCE."'>".$post->RUN_KEY."</option>";
     
     }
     }
     else{
     echo "<option></option>";
     }
     
     }

    /**
     * Finds the TesBkScp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TesBkScp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TesBkScp::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
