<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\academica\models\InvConvocatoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inv Convocatorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Listado de Convocatorias</h3>
                            </div>
                            <div class="panel-body">

    <p>
        <?= Html::a('Agregar Convocatorias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'fecha_reg',
           // 'id_anio',
             [
              'attribute'=>'id_anio',
              'value' => 'anios.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\academica\models\CatAnos::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
             [
              'attribute'=>'id_semestre',
              'value' => 'semestre.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\academica\models\CatSemestre::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
            'fecha_ini',
            'fecha_fin',
            'descripcion',
            [
              'attribute'=>'status',
              'value' => 'estado.nombre',
              'filter' => yii\helpers\ArrayHelper::map(app\modules\academica\models\CatEstado::find()->orderBy('nombre')->asArray()->all(),'id','nombre')
            ],
            //'docto',
           
                     [ 'attribute' => 'Documento',
              'filter' =>false,
              'format' => 'raw', 'value' => function($data){

               
                  return (Html::a('<center><span class="glyphicon glyphicon-print"></span> PDF</center>', [
                            '/academica/inv-convocatorias/pdf',
                            'id' => $data->id,
                        ], [
                            'class' => 'btn btn-success btn-sm',
                            'target' => '_blank',
                        ]));
                 
              
            }
              ],
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

              [
             'class' => 'app\components\CustomActionColumn',
      'template' => '{update} ',
      'buttons' => [
        'update' => function ($url, $model) {
                return ((Yii::$app->user->can("MenuSuper")) ? Html::a('<span class="glyphicon glyphicon-search"></span>', $url, ['title' => Yii::t('app', 'update'),]) : '');
            },
        
      ],
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
</div>
