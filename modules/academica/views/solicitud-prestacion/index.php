<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\academica\models\SolicitudPrestacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitud Prestacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitud-prestacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solicitud Prestacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'folio',
            'tipo_permiso',
            'id_platel',
            'id_periodo',
            // 'permiso_especial',
            // 'permiso_cyf',
            // 'cyf_horas',
            // 'cyf_dia',
            // 'fecha_inicio',
            // 'fecha_termino',
            // 'pt_nombre',
            // 'pt_plaza',
            // 'pt_numemp',
            // 'pt_turno',
            // 'pt_plantel',
            // 'pt_areaads',
            // 'pt_nivel',
            // 'pt_categoria',
            // 'pt_funcion_real',
            // 'cambio_turno_op1',
            // 'cambio_turno_op2',
            // 'cambio_turno_op3',
            // 'cambio_turno_anterior',
            // 'cambio_turno_cuenta',
            // 'fecha_inicio_ct',
            // 'fecha_termino_ct',
            // 'cambio_plantel_op1',
            // 'cambio_plantel_op2',
            // 'cambio_plantel_op3',
            // 'cambio_plantel_anterior',
            // 'cambio_plantel_cuenta',
            // 'fecha_inicio_cp',
            // 'fecha_termino_cp',
            // 'lcgs_primeravez',
            // 'lsgs_primeravez',
            // 'lsgs_prorroga',
            // 'lsgs_primeravez_admvo',
            // 'lsgs_prorroga_admvo',
            // 'lsgs_prorroga_quincedias',
            // 'lsgs_prorroga_anteriores',
            // 'lsgs_otra',
            // 'motivos',
            // 'fecha_termino_licanterior',
            // 'lcgs_justificante',
            // 'lcgs_prorroga_anteriores',
            // 'observaciones',
            // 'estado',
            // 'created_at',
            // 'created_by',
            // 'updated_at',
            // 'updated_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
