<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvExperienciaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-experiencia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_prof') ?>

    <?= $form->field($model, 'fecha_reg') ?>

    <?= $form->field($model, 'ultimo_grado') ?>

    <?= $form->field($model, 'estudio') ?>

    <?php // echo $form->field($model, 'institucion') ?>

    <?php // echo $form->field($model, 'situacion') ?>

    <?php // echo $form->field($model, 'docto_comp') ?>

    <?php // echo $form->field($model, 'cedula') ?>

    <?php // echo $form->field($model, 'valida_cedula') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

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
