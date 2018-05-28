<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\SolicitudPrestacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitud-prestacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio')->textInput() ?>

    <?= $form->field($model, 'tipo_permiso')->textInput() ?>

    <?= $form->field($model, 'id_platel')->textInput() ?>

    <?= $form->field($model, 'id_periodo')->textInput() ?>

    <?= $form->field($model, 'permiso_especial')->textInput() ?>

    <?= $form->field($model, 'permiso_cyf')->textInput() ?>

    <?= $form->field($model, 'cyf_horas')->textInput() ?>

    <?= $form->field($model, 'cyf_dia')->textInput() ?>

    <?= $form->field($model, 'fecha_inicio')->textInput() ?>

    <?= $form->field($model, 'fecha_termino')->textInput() ?>

    <?= $form->field($model, 'pt_nombre')->textInput() ?>

    <?= $form->field($model, 'pt_plaza')->textInput() ?>

    <?= $form->field($model, 'pt_numemp')->textInput() ?>

    <?= $form->field($model, 'pt_turno')->textInput() ?>

    <?= $form->field($model, 'pt_plantel')->textInput() ?>

    <?= $form->field($model, 'pt_areaads')->textInput() ?>

    <?= $form->field($model, 'pt_nivel')->textInput() ?>

    <?= $form->field($model, 'pt_categoria')->textInput() ?>

    <?= $form->field($model, 'pt_funcion_real')->textInput() ?>

    <?= $form->field($model, 'cambio_turno_op1')->textInput() ?>

    <?= $form->field($model, 'cambio_turno_op2')->textInput() ?>

    <?= $form->field($model, 'cambio_turno_op3')->textInput() ?>

    <?= $form->field($model, 'cambio_turno_anterior')->textInput() ?>

    <?= $form->field($model, 'cambio_turno_cuenta')->textInput() ?>

    <?= $form->field($model, 'fecha_inicio_ct')->textInput() ?>

    <?= $form->field($model, 'fecha_termino_ct')->textInput() ?>

    <?= $form->field($model, 'cambio_plantel_op1')->textInput() ?>

    <?= $form->field($model, 'cambio_plantel_op2')->textInput() ?>

    <?= $form->field($model, 'cambio_plantel_op3')->textInput() ?>

    <?= $form->field($model, 'cambio_plantel_anterior')->textInput() ?>

    <?= $form->field($model, 'cambio_plantel_cuenta')->textInput() ?>

    <?= $form->field($model, 'fecha_inicio_cp')->textInput() ?>

    <?= $form->field($model, 'fecha_termino_cp')->textInput() ?>

    <?= $form->field($model, 'lcgs_primeravez')->textInput() ?>

    <?= $form->field($model, 'lsgs_primeravez')->textInput() ?>

    <?= $form->field($model, 'lsgs_prorroga')->textInput() ?>

    <?= $form->field($model, 'lsgs_primeravez_admvo')->textInput() ?>

    <?= $form->field($model, 'lsgs_prorroga_admvo')->textInput() ?>

    <?= $form->field($model, 'lsgs_prorroga_quincedias')->textInput() ?>

    <?= $form->field($model, 'lsgs_prorroga_anteriores')->textInput() ?>

    <?= $form->field($model, 'lsgs_otra')->textInput() ?>

    <?= $form->field($model, 'motivos')->textInput() ?>

    <?= $form->field($model, 'fecha_termino_licanterior')->textInput() ?>

    <?= $form->field($model, 'lcgs_justificante')->textInput() ?>

    <?= $form->field($model, 'lcgs_prorroga_anteriores')->textInput() ?>

    <?= $form->field($model, 'observaciones')->textInput() ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
