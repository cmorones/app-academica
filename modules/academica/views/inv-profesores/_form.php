<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\academica\models\CatModalidad;
use app\modules\academica\models\CatTurno;
use app\modules\admin\models\CatPlanteles;
use app\modules\academica\models\CatAcademias;
use app\modules\academica\models\CatNivelProf;
use app\modules\academica\models\CatTipoProf;
use app\modules\academica\models\CatEstado;
use app\modules\academica\models\CatAreaAdscripcion;
use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvProfesores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-profesores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'expediente')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput() ?>

    <?= $form->field($model, 'apellido_p')->textInput() ?>

    <?= $form->field($model, 'apellido_m')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'modalidad', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatModalidad::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Modalidad']); ?>

    <?= $form->field($model, 'turno', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatTurno::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Turno']); ?>

    <?= $form->field($model, 'id_plantel', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatPlanteles::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Plantel']); ?>

    <?= $form->field($model, 'id_academia', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatAcademias::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Academia']); ?>

       <?= $form->field($model, 'tipo_profesor', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatTipoProf::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Tipo']); ?>

     <?= $form->field($model, 'nivel_categoria', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatNivelProf::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Nivel']); ?>

 

     <?= $form->field($model, 'area_adcripcion', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatAreaAdscripcion::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Area']); ?>

    <?= $form->field($model, 'plaza')->textInput() ?>

    <?= $form->field($model, 'status', ['inputOptions'=>[ 'class'=>'form-control'] ] )->dropDownList(ArrayHelper::map(CatEstado::find()->all(), 'id', 'nombre'), ['prompt'=>'Selecciona Estado']); ?>

   

      <?=  $form-> field($model, 'fecha_ingreso')->widget(DatePicker::classname(), [

                    'options' => ['placeholder' => 'Fecha de Ingreso'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd', 
                    ]
                ]);
    ?>

    <?= $form->field($model, 'observaciones')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
