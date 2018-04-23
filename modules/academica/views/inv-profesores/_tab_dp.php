
<?php
use yii\helpers\Html; 
$adminUser = array_keys(\Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()));
?>

<div class="row">
  <div class="col-xs-12">
	<h3 class="page-header">	
	<i class="fa fa-info-circle"></i> Datos Profesor
	<div class="<?= (Yii::$app->language == 'ar') ? 'pull-left' : 'pull-right'?>">
	<?php // if((Yii::$app->user->can("/student/stu-master/update") && ($_REQUEST['id'] == Yii::$app->session->get('stu_id'))) || (in_array("SuperAdmin", $adminUser)) || Yii::$app->user->can("updateAllStuInfo")) { 
//print_r($adminUser);

    // if(Yii::$app->user->can('/soporte/inv-equipos/update')) {
            	
		?>
		<?php // echo Html::a('<i class="fa fa-pencil-square-o"></i> '.Yii::t('app', 'Editar'), ['update', 'id' => $model->id, 'tab' => 'personal'], ['class' => 'btn btn-primary btn-sm', 'id' => 'update-data']) ?>

	</div>
	</h3>
  </div><!-- /.col -->
</div>

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Expediente:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $model->expediente ?></strong></div>
	</div>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Nombre:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->nombre ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Apellido Paterno:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->apellido_p ?></div>
	</div>


	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Apellido Materno:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->apellido_m ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Email:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->email ?></div>
	</div>



	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Modalidad:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->catModalidad->nombre ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Turno:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->catTurno->nombre ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Plantel:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->catPlanteles->nombre ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Academia:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->catAcademias->nombre ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Tipo:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->tipoProfesor->nombre ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Nivel:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->nivelProfesor->nombre ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Area:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?//= $model->areaAdscripcion->nombre ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Plaza:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->plaza ?></div>
	</div>


	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Fecha de Ingres:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->fecha_ingreso ?></div>
	</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Estado:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light m-b-5"><?= $model->catEstado->nombre ?></button></div>
	</div>






<?php 

	/*
<!--
	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edusec-bg-row">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('id_tipo') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?//= $model->tipoEquipo->nombre ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('marca') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->catMarca->nombre ?></div>
	  </div>
	</div>


	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edusec-bg-row">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('modelo') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->catModelo->modelo ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('serie') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->serie ?></div>
	  </div>
	</div>

	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edusec-bg-row">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('estado') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->estadoEquipo->nombre ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('procesador') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->procesador ?></div>
	  </div>
	</div>

		<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edusec-bg-row">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('ram') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->ram ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('disco_duro') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->disco_duro ?></div>
	  </div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('clasif') ?></strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->catAntiguedad->nombre ?></div>
	</div>

	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edusec-bg-row">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('monitor') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->monitor ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('monitor_serie') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->monitor_serie ?></div>
	  </div>
	</div>

	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edusec-bg-row">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('teclado') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->teclado ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('teclado_serie') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->teclado_serie ?></div>
	  </div>
	</div>
	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edusec-bg-row">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('mouse') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->mouse ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('mouse_serie') ?></strong></div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?= $model->mouse_serie ?></div>
	  </div>
	</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong><?= $model->getAttributeLabel('observaciones') ?></strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $model->observaciones ?></div>
	</div>
-->
	
*/  ?>

	

</div> <!---Main Row Div--->
