<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvConvocatoriasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-convocatorias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_anio') ?>

    <?= $form->field($model, 'id_semestre') ?>

    <?= $form->field($model, 'fecha_reg') ?>

    <?= $form->field($model, 'fecha_ini') ?>

    <?php // echo $form->field($model, 'fecha_fin') ?>

    <?php // echo $form->field($model, 'docto') ?>

    <?php // echo $form->field($model, 'status') ?>

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
