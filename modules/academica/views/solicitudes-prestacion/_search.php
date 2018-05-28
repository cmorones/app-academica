<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\SolicitudPrestacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitud-prestacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'folio') ?>

    <?= $form->field($model, 'tipo_permiso') ?>

    <?= $form->field($model, 'id_platel') ?>

    <?= $form->field($model, 'id_periodo') ?>

    <?php // echo $form->field($model, 'permiso_especial') ?>

    <?php // echo $form->field($model, 'permiso_cyf') ?>

    <?php // echo $form->field($model, 'cyf_horas') ?>

    <?php // echo $form->field($model, 'cyf_dia') ?>

    <?php // echo $form->field($model, 'fecha_inicio') ?>

    <?php // echo $form->field($model, 'fecha_termino') ?>

    <?php // echo $form->field($model, 'pt_nombre') ?>

    <?php // echo $form->field($model, 'pt_plaza') ?>

    <?php // echo $form->field($model, 'pt_numemp') ?>

    <?php // echo $form->field($model, 'pt_turno') ?>

    <?php // echo $form->field($model, 'pt_plantel') ?>

    <?php // echo $form->field($model, 'pt_areaads') ?>

    <?php // echo $form->field($model, 'pt_nivel') ?>

    <?php // echo $form->field($model, 'pt_categoria') ?>

    <?php // echo $form->field($model, 'pt_funcion_real') ?>

    <?php // echo $form->field($model, 'cambio_turno_op1') ?>

    <?php // echo $form->field($model, 'cambio_turno_op2') ?>

    <?php // echo $form->field($model, 'cambio_turno_op3') ?>

    <?php // echo $form->field($model, 'cambio_turno_anterior') ?>

    <?php // echo $form->field($model, 'cambio_turno_cuenta') ?>

    <?php // echo $form->field($model, 'fecha_inicio_ct') ?>

    <?php // echo $form->field($model, 'fecha_termino_ct') ?>

    <?php // echo $form->field($model, 'cambio_plantel_op1') ?>

    <?php // echo $form->field($model, 'cambio_plantel_op2') ?>

    <?php // echo $form->field($model, 'cambio_plantel_op3') ?>

    <?php // echo $form->field($model, 'cambio_plantel_anterior') ?>

    <?php // echo $form->field($model, 'cambio_plantel_cuenta') ?>

    <?php // echo $form->field($model, 'fecha_inicio_cp') ?>

    <?php // echo $form->field($model, 'fecha_termino_cp') ?>

    <?php // echo $form->field($model, 'lcgs_primeravez') ?>

    <?php // echo $form->field($model, 'lsgs_primeravez') ?>

    <?php // echo $form->field($model, 'lsgs_prorroga') ?>

    <?php // echo $form->field($model, 'lsgs_primeravez_admvo') ?>

    <?php // echo $form->field($model, 'lsgs_prorroga_admvo') ?>

    <?php // echo $form->field($model, 'lsgs_prorroga_quincedias') ?>

    <?php // echo $form->field($model, 'lsgs_prorroga_anteriores') ?>

    <?php // echo $form->field($model, 'lsgs_otra') ?>

    <?php // echo $form->field($model, 'motivos') ?>

    <?php // echo $form->field($model, 'fecha_termino_licanterior') ?>

    <?php // echo $form->field($model, 'lcgs_justificante') ?>

    <?php // echo $form->field($model, 'lcgs_prorroga_anteriores') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
