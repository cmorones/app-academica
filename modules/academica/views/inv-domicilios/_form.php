<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\academica\models\CatDelegaciones;
use app\modules\academica\models\CatEstados;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvDomicilios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-domicilios-form">

    <?php $form = ActiveForm::begin(); ?>



 
    <?= $form->field($model, 'calle')->textInput() ?>

    <?= $form->field($model, 'num_int')->textInput() ?>

    <?= $form->field($model, 'num_ext')->textInput() ?>

    <?= $form->field($model, 'colonia')->textInput() ?>

     <?= $form->field($model, 'delegacion', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatDelegaciones::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Delegación']); ?>

       <?= $form->field($model, 'estado', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatEstados::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Estados']); ?>

    <?= $form->field($model, 'cp')->textInput() ?>



    <?= $form->field($model, 'observaciones')->textInput() ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
