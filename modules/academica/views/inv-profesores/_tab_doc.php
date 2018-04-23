
<?php
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;



//$adminUser = array_keys(\Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()));
?>

<div class="row">
  <div class="col-xs-12">
	<h2 class="page-header">	
	<i class="fa fa-info-circle"></i> Documentos
	<div class="<?= (Yii::$app->language == 'ar') ? 'pull-left' : 'pull-right'?>">
	<?php // if((Yii::$app->user->can("/student/stu-master/update") && ($_REQUEST['id'] == Yii::$app->session->get('stu_id'))) || (in_array("SuperAdmin", $adminUser)) || Yii::$app->user->can("updateAllStuInfo")) { 
//	  if(Yii::$app->user->can('/soporte/inv-equipos/create')) {
			  	?>


	

			<?//= Html::a('<i class="fa fa-pencil-square-o"></i> '.Yii::t('app', 'Agregar'), ['/academica/inv-doctos/create', 'id' => $model->id, 'tab' => 'guardians'], ['class' => 'btn btn-primary btn-sm', 'id' => 'update-data']) ?>

 <?= Html::button('Agregar', ['value'=>Url::to(['/academica/inv-doctos/create', 'id'=>$model->id]),'class' => 'btn btn-success','id'=>'modalButton']) ?>
		<?php
//	}
	?>
	</div>
	</h2>
  </div><!-- /.col -->
</div>

<div class="row">
<?php

if($count3 <> 0){

 $dom = app\modules\academica\models\InvDoctos::find()->where(['id_prof'=>$model->id])->all();

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

<table class="table table-striped">
	<tr>
		<th>Num</th>
		<th>Fecha de Ingreso</th>
		<th>Información del Documento</th>
		<th>Descargar</th>
	</tr>

<?php
$i=1;
foreach ($dom as $value) {

?>
<tr>
	
	<td><strong><?= $i ?></strong></td>
	<td><?= $value->fecha_reg ?></td>
	<td><strong><?= $value->infodocto ?></strong></td>
	<td><strong><?= $value->docto ?></strong></strong></td>
</tr>


<?
$i++; 
}
?>

</table>



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
        'id'=>'modal',
        'size'=>'modal-lg',
        ]);

      echo "<div id='modalContent'></div>";

      Modal::end();


    ?>


</div> <!---Main Row Div--->
