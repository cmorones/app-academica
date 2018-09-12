
<?php
use yii\helpers\Html; 
use yii\helpers\Url;
//$adminUser = array_keys(\Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()));
?>

<div class="row">
  <div class="col-xs-12">
	<h2 class="page-header">	
	<i class="fa fa-info-circle"></i> Experiencia Académica
	<div class="<?= (Yii::$app->language == 'ar') ? 'pull-left' : 'pull-right'?>">
	<?php // if((Yii::$app->user->can("/student/stu-master/update") && ($_REQUEST['id'] == Yii::$app->session->get('stu_id'))) || (in_array("SuperAdmin", $adminUser)) || Yii::$app->user->can("updateAllStuInfo")) { 
//	  if(Yii::$app->user->can('/soporte/inv-equipos/create')) {
			  	?>


	

			<?= Html::a('<i class="fa fa-pencil-square-o"></i> '.Yii::t('app', 'Agregar'), ['/academica/inv-experiencia/create', 'id' => $model->id, 'tab' => 'guardians'], ['class' => 'btn btn-primary btn-sm', 'id' => 'update-data']) ?>

			 <?//= Html::button('Agregar', ['value'=>Url::to(['/academica/inv-domicilios/create', 'id'=>$model->id]),'class' => 'btn btn-success','id'=>'modalButton2']) ?>
		<?php
//	}
	?>
	</div>
	</h2>
  </div><!-- /.col -->
</div>

<div class="row">
<?php

if($count2 <> 0){

 $dom = app\modules\academica\models\InvExperiencia::find()->where(['id_prof'=>$model->id])->all();

/*$dom = \Yii::$app->db ->createCommand('SELECT 
  cat_sw.nombre AS so, 
  estado_equipo.nombre, 
  inv_sw.id,
  inv_sw.id_equipo,
  inv_sw.observaciones
FROM 
  public.inv_sw, 
  public.estado_equipo, 
  public.cat_sw
WHERE 
  inv_sw.estado = estado_equipo.id AND
  cat_sw.id = inv_sw.id_so and id_equipo='.$model->id.'')
        ->queryAll();*/


?>



<?php
$i=1;
foreach ($dom as $value) {

?>
<hr>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Registro #:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->id ?></strong></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Ultimo Grado Académico:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->catUltimo->nombre ?></strong></div>
	</div>


	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Estudio:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->catEstudio->nombre ?></strong></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Institución:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->catInstitucion->nombre ?></strong></div>
	</div>


	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Situación:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->catSituacion->nombre ?></strong></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Soporte Documental:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->soporte->nombre ?></strong></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Cedula:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->cedula ?></strong></div>
	</div>



	

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Observaciones:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->observaciones ?></strong></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Validación de Cedula:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text">

	<?php		
if ($value->valida_cedula ==0) {
	?>

<button type="button" class="btn btn-danger btn-rounded waves-effect waves-light m-b-5">NO</button>
<?php } else { ?>
<button type="button" class="btn btn-success btn-rounded waves-effect waves-light m-b-5">SI</button>
<?php
}

?>
	</div>
	</div>











</div>
<hr>

<?
$i++; 
}
?>



<?php
 }else{ ?>	

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12 col-sm-12 col-xs-6 edusec-profile-label edusecArLangCss">No existe domicilio registrado</div>
		
		</div>

<?php
 } ?>
	

</div> <!---Main Row Div--->
