<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvProfesoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-profesores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellido_p') ?>

    <?= $form->field($model, 'apellido_m') ?>

    <?= $form->field($model, 'modalidad') ?>

    <?php // echo $form->field($model, 'turno') ?>

    <?php // echo $form->field($model, 'id_plantel') ?>

    <?php // echo $form->field($model, 'id_academia') ?>

    <?php // echo $form->field($model, 'tipo_profesor') ?>

    <?php // echo $form->field($model, 'nivel_categoria') ?>

    <?php // echo $form->field($model, 'area_adcripcion') ?>

    <?php // echo $form->field($model, 'plaza') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'fecha_ingreso') ?>

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
