
<?php
use yii\helpers\Html; 
use app\modules\academica\models\InvDatosprof;
use yii\helpers\Url;


//$adminUser = array_keys(\Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()));

 $datosprof =  InvDatosprof::find()->where(['id_prof' => $model->id])->one();
?>

<div class="row">
  <div class="col-xs-12">
	<h3 class="page-header">	
	<i class="fa fa-info-circle"></i> Datos Personales
	<div class="<?= (Yii::$app->language == 'ar') ? 'pull-left' : 'pull-right'?>">
	<?php // if((Yii::$app->user->can("/student/stu-master/update") && ($_REQUEST['id'] == Yii::$app->session->get('stu_id'))) || (in_array("SuperAdmin", $adminUser)) || Yii::$app->user->can("updateAllStuInfo")) { ?>

	<?php
//if(Yii::$app->user->can('modTelecom')) {


if($count <> 0){



            	
		?>

		<?= Html::a('<i class="fa fa-pencil-square-o"></i> '.Yii::t('app', 'Editar'), ['/academica/inv-datosprof/update', 'id' => $datosprof->id, 'ide' => $model->id, 'tab' => 'personal'], ['class' => 'btn btn-primary btn-sm', 'id' => 'update-data']) ?>

		 <?//= Html::button('Modificar', ['value'=>Url::to(['/academica/inv-datosprof/update', 'id'=>$datosprof->id, 'ide' => $model->id]),'class' => 'btn btn-success','id'=>'modalButton']) ?>
	<?php }else { ?>

			<?= Html::a('<i class="fa fa-pencil-square-o"></i> '.Yii::t('app', 'Agregar'), ['/academica/inv-datosprof/create', 'id' => $model->id, 'tab' => 'personal'], ['class' => 'btn btn-primary btn-sm', 'id' => 'update-data']) ?>
			 <?//= Html::button('Agregar', ['value'=>Url::to(['/academica/inv-datosprof/create', 'id'=>$model->id]),'class' => 'btn btn-success','id'=>'modalButton1']) ?>
			<?php
		}

//}
		?>
	</div>
	</h3>
  </div><!-- /.col -->
</div>

<div class="row">
<?php

if($count <> 0){

?>


	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Fecha de Nacimiento</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $datosprof->fecha_nac ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Lugar de Nacimiento</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $datosprof->lugar_nac ?></div>
	</div>


	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>RFC</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $datosprof->rfc ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>CURP</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $datosprof->curp ?></div>
	</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Edad</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $datosprof->edad ?></div>
	</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Estado Civil</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $datosprof->estado_civil ?></div>
	</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Telefono</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $datosprof->telefono ?></div>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss"><strong>Celular</strong></div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?= $datosprof->celular ?></div>
	</div>





<?php
 }else{ ?>	

		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12 col-sm-12 col-xs-6 edusec-profile-label edusecArLangCss">No existe datos personales para este profesor</div>
		
		</div>

<?php
 } ?>
	

</div> <!---Main Row Div--->
