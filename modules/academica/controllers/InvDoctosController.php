<?php

namespace app\modules\academica\controllers;

use Yii;
use app\modules\academica\models\InvDoctos;
use app\modules\academica\models\InvDoctosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\db\Expression;
use yii\helpers\Url;
/**
 * InvDoctosController implements the CRUD actions for InvDoctos model.
 */
class InvDoctosController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
               'access' => [
                'class' => AccessControl::className(),
               // 'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['index','create','view','update','docto','pdf'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all InvDoctos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InvDoctosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InvDoctos model.
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
     * Creates a new InvDoctos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new InvDoctos();

        if ($model->load(Yii::$app->request->post()) ) {
            $model->id_prof=$id;
            $model->created_by=Yii::$app->user->identity->user_id;
            $model->created_at = new Expression('NOW()');
            $model->fecha_reg = new Expression('NOW()');
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs('docs_dtis/'.$model->file->baseName.'-'.date('Y-m-d h:m:s').'.'.$model->file->extension);
       //  $model->file->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
        $model->docto = $model->file->baseName.'-'.date('Y-m-d h:m:s').'.'.$model->file->extension;
         
            //$model->updated_by=1;
            if (!$model->save()) {
                echo "<pre>";
                print_r($model->getErrors());
                exit;
                # code...Url::to(['post/view', 'id' => 100, '#' => 'content']);
            }
          //  return $this->redirect(['/academica/inv-profesores/view', 'id' => $model->id_prof]);
            return $this->redirect(Url::to(['/academica/inv-profesores/view', 'id' => $model->id_prof,'active' => 4, '#' => 'docs']));
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing InvDoctos model.
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
     * Deletes an existing InvDoctos model.
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
     * Finds the InvDoctos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return InvDoctos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = InvDoctos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
