<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\academica\models\InvExperienciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inv Experiencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-experiencia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Inv Experiencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_prof',
            'fecha_reg',
            'ultimo_grado',
            'estudio',
            // 'institucion',
            // 'situacion',
            // 'docto_comp',
            // 'cedula',
            // 'valida_cedula',
            // 'estado',
            // 'observaciones',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
