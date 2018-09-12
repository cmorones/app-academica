<?php

namespace app\modules\academica\controllers;

use Yii;
use app\modules\academica\models\InvExperiencia;
use app\modules\academica\models\InvExperienciaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Expression;
use yii\helpers\Url;

/**
 * InvExperienciaController implements the CRUD actions for InvExperiencia model.
 */
class InvExperienciaController extends Controller
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
     * Lists all InvExperiencia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InvExperienciaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InvExperiencia model.
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
     * Creates a new InvExperiencia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new InvExperiencia();

        if ($model->load(Yii::$app->request->post()) ) {
            $model->id_prof=$id;
            $model->created_by=Yii::$app->user->identity->user_id;
            $model->created_at = new Expression('NOW()');
            $model->fecha_reg = new Expression('NOW()');
            $model->estado = '1';
            

             if (!$model->save()) {
                echo "<pre>";
                print_r($model->getErrors());
                exit;
                # code...
            }

             return $this->redirect(Url::to(['/academica/inv-profesores/view', 'id' => $model->id_prof,'active' => 5, '#' => 'docs']));
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing InvExperiencia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing InvExperiencia model.
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
     * Finds the InvExperiencia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return InvExperiencia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = InvExperiencia::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
