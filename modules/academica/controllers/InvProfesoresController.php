<?php

namespace app\modules\academica\controllers;

use Yii;
use app\modules\academica\models\InvProfesores;
use app\modules\academica\models\InvProfesoresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Expression;

/**
 * InvProfesoresController implements the CRUD actions for InvProfesores model.
 */
class InvProfesoresController extends Controller
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
     * Lists all InvProfesores models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InvProfesoresSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InvProfesores model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        
        $count = Yii::$app->db->createCommand('SELECT COUNT(*) FROM inv_datosprof where id_prof='.$id.'')->queryScalar();
        $count2 = Yii::$app->db->createCommand('SELECT COUNT(*) FROM inv_domicilios where id_prof='.$id.'')->queryScalar();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'count' => $count,
            'count2' => $count2,
        ]);
    }

    /**
     * Creates a new InvProfesores model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new InvProfesores();
        $model->created_by=Yii::$app->user->identity->user_id;
        $model->created_at = new Expression('NOW()');
        $model->status=1;



        if ($model->load(Yii::$app->request->post())) {

             if (!$model->save()) {
                echo "<pre>";
                print_r($model->getErrors());
                exit;
                }


            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing InvProfesores model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->updated_by=Yii::$app->user->identity->user_id;
        $model->updated_at = new Expression('NOW()');
    

        if ($model->load(Yii::$app->request->post()) && $model->save()) {


            //return $this->redirect(['index', 'id' => $model->id]);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing InvProfesores model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InvProfesores model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return InvProfesores the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = InvProfesores::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
