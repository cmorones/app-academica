<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\academica\models\CatAnos;
use app\modules\academica\models\CatEstado;
use app\modules\academica\models\CatConvocatorias;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvConvocatorias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-convocatorias-form">

    <?php $form = ActiveForm::begin(); ?>

  
     <?//= $form->field($model, 'id_anio', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatAnos::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Año']); ?>

     <?= $form->field($model, 'id_tipo', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatConvocatorias::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Tipo de Convoctoria']); ?>

       <?= $form->field($model, 'id_anio', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'tipo'] ] )->dropDownList(ArrayHelper::map(CatAnos::find()->orderBy(['id'=>SORT_ASC])->all(),'id','nombre'),
                                                 [
                                                    'prompt'=>Yii::t('app', '--- Selecciona Año ---'),
                                                   'onchange'=>'
                                                        $.post( "'.Yii::$app->urlManager->createUrl('academica/inv-convocatorias/semestres?id=').'"+$(this).val(), function( data ) {
                                                          $( "select#invconvocatorias-id_semestre" ).html( data );
                                                        });



                                                    ']); ?>

    <?//= $form->field($model, 'id_semestre')->textInput() ?>

         <?= $form->field($model, 'id_semestre', ['inputOptions'=>[ 'class'=>'form-control', 'placeholder' => 'modelo'] ] )->dropDownList(ArrayHelper::map(app\modules\academica\models\CatSemestre::find()->orderBy(['id'=>SORT_ASC])->all(),'id','nombre'),['prompt'=>Yii::t('app', '--- Selecciona Semestre ---')]); ?>

  
     <?=  $form-> field($model, 'fecha_reg')->widget(DatePicker::classname(), [

                    'options' => ['placeholder' => 'Fecha de Registro'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd', 
                    ]
                ]);
    ?>


   <?=  $form-> field($model, 'fecha_ini')->widget(DatePicker::classname(), [

                    'options' => ['placeholder' => 'Fecha de Inicio'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd', 
                    ]
                ]);
    ?>

      <?=  $form-> field($model, 'fecha_fin')->widget(DatePicker::classname(), [

                    'options' => ['placeholder' => 'Fecha de Termino'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd', 
                    ]
                ]);
    ?>

      <?= $form->field($model, 'descripcion')->textInput() ?>



 

    <?= $form->field($model, 'file')->fileInput() ?>

        <?= $form->field($model, 'status', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatEstado::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Estado']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
