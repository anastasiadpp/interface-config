<?php

namespace app\controllers;

use Yii;
use app\models\base\LinkTableDpc;
use app\models\base\TableTemp;
use app\models\LinkTableDpcSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LinkTableDpcController implements the CRUD actions for LinkTableDpc model.
 */
class LinkTableDpcController extends Controller
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
     * Lists all LinkTableDpc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LinkTableDpcSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LinkTableDpc model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new LinkTableDpc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LinkTableDpc();
        $temp = new TableTemp();

        $max = $model::find() // AQ instance
        ->select('max(ID_LK_TABLE)') // we need only one column
        ->scalar();

        $model->ID_LK_TABLE = $max+1;

        if ($model->load(Yii::$app->request->post()) && $model->load(Yii::$app->request->post())) {
            $combine = $model->TABLE_SOURCE.'.'.$model->RECORD_SOURCE;
            $model->TABLE_SOURCE = $combine;
            $model->save();
            $maxtemp = $temp::find() // AQ instance
            ->select('ID_TEMP_TABLE') // we need only one column
            ->count();
            $temp->ID_TEMP_TABLE=$maxtemp+1;
            $temp->TABLE_NAME = $model->TABLE_LINK;
            $temp->TYPE_NAME = 'L';
            if($temp->save()){
                return $this->redirect(['view', 'id' => $model->ID_LK_TABLE]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing LinkTableDpc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID_LK_TABLE]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing LinkTableDpc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
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
     $countPosts = \app\models\base\TesBk::find()
     ->where(['TABLE_REF' => $id])
     ->distinct()
     ->count();
     
     $posts = \app\models\base\TesBk::find()
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

     public function actionListflag($id)
     {
        if($id == 1){
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
        else{
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
     
     
     }

    /**
     * Finds the LinkTableDpc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return LinkTableDpc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = LinkTableDpc::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
