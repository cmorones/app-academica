<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use app\modules\admin\models\CatPlanteles;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\SolicitudPrestacion */
/* @var $form yii\widgets\ActiveForm */


$this->registerJs(
    "$(document).ready(function(){
     $('#cuadro1').hide();
     $('#cuadro2').hide();
     $('#cuadro3').hide();
     $('#cuadro11').hide();
     $('#send').hide();
$('#cambio_plantel').change(function(){
   
if($('#cambio_plantel').prop('checked')) {
    $('#cuadro1').show();
     $('#send').show();
    
} else {
    $('#cuadro1').hide();
 $('#send').hide();
}
});

$('#cambio_turno').change(function(){
   
if($('#cambio_turno').prop('checked')) {
    $('#cuadro2').show();
    $('#send').show();
    
} else {
    $('#cuadro2').hide();
     $('#send').hide();
  
}
});


$('#cambio_permuta').change(function(){
   
if($('#cambio_permuta').prop('checked')) {
    $('#cuadro3').show();
     $('#send').show();
    
} else {
    $('#cuadro3').hide();
     $('#send').hide();
  
}
});

$('#cambio_plantel_anterior').change(function(){
   
if($('#cambio_plantel_anterior').prop('checked')) {
    $('#cuadro11').show();
    
} else {
    $('#cuadro11').hide();
  
}
});
});",
    View::POS_END,
    'my-button-handler'
);

?>
<br>
<br>
<br>
<br>
<br>

      
        <?php $form = ActiveForm::begin(); ?>               

<div class="solicitud-prestacion-form">


 
<div class=" waves-effect waves-light autohidebut">  <?= $form->errorSummary($model); ?>     </div>


  <h3>Favor de marcar el tipo de permiso que solicita:</h3>                             
   

<?= $form->field($model, 'cambio_plantel')->checkbox(['id' => 'cambio_plantel']) ?>
<?= $form->field($model, 'cambio_turno')->checkbox(['id' => 'cambio_turno']) ?>
<?= $form->field($model, 'cambio_permuta')->checkbox(['id' => 'cambio_permuta']) ?>
 
<hr>
 <div id=cuadro1>


      <?= $form->field($model, 'cambio_plantel_op1', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatPlanteles::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Tipo de Convoctoria']); ?>

       <?= $form->field($model, 'cambio_plantel_op2', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatPlanteles::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Tipo de Convoctoria']); ?>


        <?= $form->field($model, 'cambio_plantel_op3', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatPlanteles::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Tipo de Convoctoria']); ?>

 

       <?= $form->field($model, 'cambio_plantel_anterior')->checkbox(['id' => 'cambio_plantel_anterior']) ?>


  <div id=cuadro11>
    
    <?= $form->field($model, 'cambio_plantel_cuenta')->textInput() ?>
    
 <?=  $form-> field($model, 'fecha_termino_cp')->widget(DatePicker::classname(), [

                    'options' => ['placeholder' => 'Fecha ultimo cambio'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd', 
                    ]
                ]);
    ?>
    
       </div>
 </div>

  <div id=cuadro2>
     Aqui va el cuadro 2
 </div>


  <div id=cuadro3>
     Aqui va el cuadro 3
 </div>

   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['id' => 'send', 'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
