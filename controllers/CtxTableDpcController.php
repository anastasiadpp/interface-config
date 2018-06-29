<?php

namespace app\controllers;

use Yii;
use app\models\base\CtxTableDpc;
use app\models\base\TesBk;
use app\models\base\TableTemp;
use app\models\base\LinkTableDpc;
use app\models\base\RefTableDpc;
use app\models\CtxTableDpcSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CtxTableDpcController implements the CRUD actions for CtxTableDpc model.
 */
class CtxTableDpcController extends Controller
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
     * Lists all CtxTableDpc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CtxTableDpcSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CtxTableDpc model.
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
     * Creates a new CtxTableDpc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CtxTableDpc();

        $max = $model::find() // AQ instance
        ->select('max(ID_CTX_TABLE)') // we need only one column
        ->scalar();

        $model->ID_CTX_TABLE = $max+1;

        if ($model->load(Yii::$app->request->post())) {
            $model->ADDITIONAL_KEY = implode(', ', $model->ADDITIONAL_KEY);
            $combine = $model->TABLE_SOURCE.'.'.$model->RECORD_SOURCE;
            $model->TABLE_SOURCE = $combine;
            $model->save();
            return $this->redirect(['view', 'id' => $model->ID_CTX_TABLE]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CtxTableDpc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_CTX_TABLE]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CtxTableDpc model.
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

    public function actionLists($id)
     {
        if($id == 'BK'){
            $countPosts = \app\models\base\TesBk::find()
            ->distinct()
            ->count();
             
            $posts = \app\models\base\TesBk::find()
            ->select('TABLE_REF')
            ->distinct()
            ->all();
            echo "<option>-Choose a Key Ref-</option>";

            if($countPosts>0){
                foreach($posts as $post){
                echo "<option value='".$post->TABLE_REF."'>".$post->TABLE_REF."</option>";
                }
            }
            else{
                echo "<option></option>";
            }
        }

        elseif($id == 'L') {
            $countPosts = \app\models\base\LinkTableDpc::find()
            ->distinct()
            ->count();
             
            $posts = \app\models\base\LinkTableDpc::find()
            ->select('TABLE_LINK')
            ->distinct()
            ->all();
            echo "<option>-Choose a Key Ref-</option>";

            if($countPosts>0){
                foreach($posts as $post){
                echo "<option value='".$post->TABLE_LINK."'>".$post->TABLE_LINK."</option>";
                }
            }
            else{
                echo "<option></option>";
            }
        }

        elseif($id == 'R'){
            $countPosts = \app\models\base\RefTableDpc::find()
            ->distinct()
            ->count();
             
            $posts = \app\models\base\RefTableDpc::find()
            ->select('TABLE_REF')
            ->distinct()
            ->all();
            echo "<option>-Choose a Key Ref-</option>";

            if($countPosts>0){
                foreach($posts as $post){
                echo "<option value='".$post->TABLE_REF."'>".$post->TABLE_REF."</option>";
                }
            }
            else{
                echo "<option></option>";
            }
        }
        else{
            echo "<option></option>";
        }
    }

    public function actionListkey($id)
     {
     $countPosts = \app\models\base\LinkTableDpc::find()
     ->where(['TABLE_LINK' => $id])
     ->distinct()
     ->count();
     
     $posts = \app\models\base\LinkTableDpc::find()
     ->select('ID')
     ->where(['TABLE_LINK' => $id])
     ->distinct()
     ->all();

     echo "<option>-Choose a Key Source-</option>";
     if($countPosts>0){
     foreach($posts as $post){
     echo "<option value='".$post->ID."'>".$post->ID."</option>";
     
     }
     }
     else{
     echo "<option></option>";
     }
     
     }


    /**
     * Finds the CtxTableDpc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CtxTableDpc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CtxTableDpc::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
