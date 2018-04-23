<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvDoctos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-doctos-form">

    <?php $form = ActiveForm::begin(); ?>



      <?=  $form-> field($model, 'fecha_reg')->widget(DatePicker::classname(), [

                    'options' => ['placeholder' => 'Fecha de Ingreso'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd', 
                    ]
                ]);  ?>

     <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'infodocto')->textInput() ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
