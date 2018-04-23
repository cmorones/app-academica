
<?php
use yii\helpers\Html; 
use yii\bootstrap\Modal;
use yii\helpers\Url;
//$adminUser = array_keys(\Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()));
?>

<div class="row">
  <div class="col-xs-12">
	<h2 class="page-header">	
	<i class="fa fa-info-circle"></i> Domicilio
	<div class="<?= (Yii::$app->language == 'ar') ? 'pull-left' : 'pull-right'?>">
	<?php // if((Yii::$app->user->can("/student/stu-master/update") && ($_REQUEST['id'] == Yii::$app->session->get('stu_id'))) || (in_array("SuperAdmin", $adminUser)) || Yii::$app->user->can("updateAllStuInfo")) { 
//	  if(Yii::$app->user->can('/soporte/inv-equipos/create')) {
			  	?>


	

			<?//= Html::a('<i class="fa fa-pencil-square-o"></i> '.Yii::t('app', 'Agregar'), ['/academica/inv-domicilios/create', 'id' => $model->id, 'tab' => 'guardians'], ['class' => 'btn btn-primary btn-sm', 'id' => 'update-data']) ?>

			 <?= Html::button('Agregar', ['value'=>Url::to(['/academica/inv-domicilios/create', 'id'=>$model->id]),'class' => 'btn btn-success','id'=>'modalButton2']) ?>
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

 $dom = app\modules\academica\models\InvDomicilios::find()->where(['id_prof'=>$model->id])->all();

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
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Domicilio #:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->id ?></strong></div>
	</div>

<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Calle:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->calle ?></strong></div>
	</div>

<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Num Int:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->num_int ?></strong></div>
	</div>


<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Num Ext:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->num_ext?></strong></div>
	</div>

<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Colonia:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->colonia?></strong></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Delegación:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->delegacion?></strong></div>
	</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Estado:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->estado?></strong></div>
	</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Codigo Postal:</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><strong><?= $value->cp?></strong></div>
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
	
	       <?php
      Modal::begin([
       // 'header'=>'<h4>Form</h4',
        'id'=>'modal2',
        'size'=>'modal2-lg',
        ]);

      echo "<div id='modalContent2'></div>";

      Modal::end();

    ?>

</div> <!---Main Row Div--->
