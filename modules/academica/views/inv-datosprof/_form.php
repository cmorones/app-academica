<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use app\modules\academica\models\EstadoCivil;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvDatosprof */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-datosprof-form">

    <?php $form = ActiveForm::begin(); ?>



  

      <?=  $form-> field($model, 'fecha_nac')->widget(DatePicker::classname(), [

                    'options' => ['placeholder' => 'Fecha de Ingreso'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd', 
                    ]
                ]);
    ?>

    <?= $form->field($model, 'lugar_nac')->textInput() ?>

    <?= $form->field($model, 'rfc')->textInput() ?>

    <?= $form->field($model, 'curp')->textInput() ?>

    <?= $form->field($model, 'edad')->textInput() ?>

 

       <?= $form->field($model, 'estado_civil', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(EstadoCivil::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona']); ?>


    <?= $form->field($model, 'telefono')->textInput() ?>

    <?= $form->field($model, 'celular')->textInput() ?>

    <?= $form->field($model, 'observaciones')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
