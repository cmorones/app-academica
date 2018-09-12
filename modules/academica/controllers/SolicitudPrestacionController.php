<?php

namespace app\modules\academica\controllers;

use Yii;
use app\modules\academica\models\SolicitudPrestacion;
use app\modules\academica\models\SolicitudPrestacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Expression;

/**
 * SolicitudPrestacionController implements the CRUD actions for SolicitudPrestacion model.
 */
class SolicitudPrestacionController extends Controller
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
     * Lists all SolicitudPrestacion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SolicitudPrestacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionOwner()
    {
        $searchModel = new SolicitudPrestacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('_owner', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

       public function actionPyt()
    {
       
        return $this->render('_pyt');
    }


    /**
     * Displays a single SolicitudPrestacion model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionReg_pyt($conv,$id_tipo,$id_anio)
    {
        $model = new SolicitudPrestacion();

        if ($model->load(Yii::$app->request->post())) {

            $model->created_by=Yii::$app->user->identity->user_id;
            $model->created_at = new Expression('NOW()');
            $model->tipo_permiso = $id_tipo;
            $model->id_conv = $conv;
            $model->id_platel=Yii::$app->user->identity->id_plantel;
            $model->id_periodo= $id_anio;
            $model->folio= $this->ultimofolio($id_anio,$id_tipo);
            $model->estado = 1;
            $model->id_emp = Yii::$app->user->identity->id_profesor;

          /*  if ($model->cambio_plantel==true) {
                # code...id_profesor
            }*/


              if (!$model->save()) {
                echo "<pre>";
                print_r($model->getErrors());
                exit;
                # code...Url::to(['post/view', 'id' => 100, '#' => 'content']);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create_pyt', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Creates a new SolicitudPrestacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SolicitudPrestacion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SolicitudPrestacion model.
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
     * Deletes an existing SolicitudPrestacion model.
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
     * Finds the SolicitudPrestacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SolicitudPrestacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SolicitudPrestacion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }



    public function ultimoFolio($id_tipo,$id_anio){

            $folio = \Yii::$app->db->createCommand("SELECT max(inv_convocatorias.id) as lastfolio
            FROM inv_convocatorias   WHERE id_anio=$id_anio and id_tipo=$id_tipo")->queryOne();

            if ($folio['lastfolio'] !=0 ){
                return $folio['lastfolio']+1;
            }else{
                return 0+1;
            }
    }
}
