<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\academica\models\InvProfesoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inv Profesores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user"></i> Agregar Profesores</h3>
                            </div>
                            <div class="panel-body">
    <p>
        <?= Html::a('Agregar Profesores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'expediente',
            'nombre',
            'apellido_p',
            'apellido_m',
            [
              'attribute'=>'modalidad',
              'value' => 'catModalidad.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\academica\models\CatModalidad::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
            [
              'attribute'=>'turno',
              'value' => 'catTurno.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\academica\models\CatTurno::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
             [
              'attribute'=>'id_plantel',
              'value' => 'catPlanteles.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\academica\models\CatPlanteles::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
            [
              'attribute'=>'id_plantel',
              'value' => 'catAcademias.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\academica\models\CatAcademias::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
             [
              'attribute'=>'tipo_profesor',
              'value' => 'tipoProfesor.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\academica\models\CatTipoProf::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],

              [
              'attribute'=>'nivel_categoria',
              'value' => 'nivelProfesor.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\academica\models\CatNivelProf::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
          
           // 'nivel_categoria',
            //'area_adcripcion',
             'plaza',
             'fecha_ingreso',
               [
              'attribute'=>'status',
              'value' => 'catEstado.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\academica\models\CatEstado::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
          
            // 'observaciones',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

             [
             'class' => 'app\components\CustomActionColumn',
      'template' => '{view} {delete}',
      'buttons' => [
        'view' => function ($url, $model) {
                return (Html::a('<span class="glyphicon glyphicon-search"></span>', $url, ['title' => Yii::t('app', 'View'),]));
            },
        'delete' => function ($url, $model) {
                return ((Yii::$app->user->can("/academica/inv-prof/delete")) ? Html::a('<span class="glyphicon glyphicon-remove"></span>', $url, ['title' => Yii::t('app', 'Delete'), 'data' => ['confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),'method' => 'post'],]) : '');
            }
      ],
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
