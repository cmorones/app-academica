<?php

namespace app\modules\academica\controllers;

use Yii;
use app\modules\academica\models\InvDomicilios;
use app\modules\academica\models\InvDomiciliosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Expression;
use yii\helpers\Url;

/**
 * InvDomiciliosController implements the CRUD actions for InvDomicilios model.
 */
class InvDomiciliosController extends Controller
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
     * Lists all InvDomicilios models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InvDomiciliosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InvDomicilios model.
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
     * Creates a new InvDomicilios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new InvDomicilios();

        if ($model->load(Yii::$app->request->post())) {

            $model->id_prof=$id;
            $model->created_by=Yii::$app->user->identity->user_id;
            $model->created_at = new Expression('NOW()');
            $model->fecha_reg = new Expression('NOW()');
            $model->status = '1';
         
            //$model->updated_by=1;
            if (!$model->save()) {
                echo "<pre>";
                print_r($model->getErrors());
                exit;
                # code...
            }
             return $this->redirect(Url::to(['/academica/inv-profesores/view', 'id' => $model->id_prof,'active' => 3, '#' => 'docs']));
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing InvDomicilios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id, $ide)
    {
        $model = $this->findModel($id);
         $model->updated_by=Yii::$app->user->identity->user_id;
         $model->updated_at = new Expression('NOW()');

        if ($model->load(Yii::$app->request->post()) ) {


            if (!$model->save()) {
                echo "<pre>";
                print_r($model->getErrors());
                exit;
                # code...
            }
             return $this->redirect(['/academica/inv-profesores/view', 'id' => $ide, '#' =>'guardians']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing InvDomicilios model.
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
     * Finds the InvDomicilios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return InvDomicilios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = InvDomicilios::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
