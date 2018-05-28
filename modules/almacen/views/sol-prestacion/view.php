<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\SolicitudPrestacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Solicitud Prestacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitud-prestacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'folio',
            'tipo_permiso',
            'id_platel',
            'id_periodo',
            'permiso_especial',
            'permiso_cyf',
            'cyf_horas',
            'cyf_dia',
            'fecha_inicio',
            'fecha_termino',
            'pt_nombre',
            'pt_plaza',
            'pt_numemp',
            'pt_turno',
            'pt_plantel',
            'pt_areaads',
            'pt_nivel',
            'pt_categoria',
            'pt_funcion_real',
            'cambio_turno_op1',
            'cambio_turno_op2',
            'cambio_turno_op3',
            'cambio_turno_anterior',
            'cambio_turno_cuenta',
            'fecha_inicio_ct',
            'fecha_termino_ct',
            'cambio_plantel_op1',
            'cambio_plantel_op2',
            'cambio_plantel_op3',
            'cambio_plantel_anterior',
            'cambio_plantel_cuenta',
            'fecha_inicio_cp',
            'fecha_termino_cp',
            'lcgs_primeravez',
            'lsgs_primeravez',
            'lsgs_prorroga',
            'lsgs_primeravez_admvo',
            'lsgs_prorroga_admvo',
            'lsgs_prorroga_quincedias',
            'lsgs_prorroga_anteriores',
            'lsgs_otra',
            'motivos',
            'fecha_termino_licanterior',
            'lcgs_justificante',
            'lcgs_prorroga_anteriores',
            'observaciones',
            'estado',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
        ],
    ]) ?>

</div>
