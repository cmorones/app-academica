<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\academica\models\CatEstudio;
use app\modules\academica\models\CatInstituciones;
use app\modules\academica\models\CatSituacionp;
use app\modules\academica\models\SoporteDocumental;
use app\modules\academica\models\CatNivelAc;

use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvExperiencia */ 
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-experiencia-form">

    <?php $form = ActiveForm::begin(); ?>





       <?= $form->field($model, 'ultimo_grado', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatNivelAc::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Ultimo Grado']); ?>

    <?= $form->field($model, 'estudio', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatEstudio::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Estudio']); ?>



      <?= $form->field($model, 'institucion', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatInstituciones::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Institucion']); ?>
       <?= $form->field($model, 'situacion', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatSituacionp::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona situación profesional']); ?>

  

    

      <?= $form->field($model, 'docto_comp', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(SoporteDocumental::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Documento Comprobatorio']); ?>

    <?= $form->field($model, 'cedula')->textInput() ?>



    <?= $form->field($model, 'valida_cedula')->checkbox(['id' => 'activa']) ?>

    <?= $form->field($model, 'observaciones')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
