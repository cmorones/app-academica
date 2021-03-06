<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use dosamigos\switchinput\SwitchRadio;
$active = 1;

if ($active==1){
  $muestra1 ='active';
  $muestra2 ='';
  $muestra3 = '';
  $muestra4 = '';
  $muestra5 = '';

}

if ($active==2){
  $muestra1 ='';
  $muestra2 ='active';
  $muestra3 = '';
  $muestra4 = '';
  $muestra5 = '';
  
  

}

if ($active==3){
  $muestra1 ='';
  $muestra2 ='';
  $muestra3 = 'active';
  $muestra4 = '';
  $muestra5 = '';
}

if ($active==4){
  $muestra1 ='';
  $muestra2 ='';
  $muestra3 = '';
  $muestra4 = 'active';
  $muestra5 = '';
}

if ($active==5){
  $muestra1 ='';
  $muestra2 ='';
  $muestra3 = '';
  $muestra4 = '';
  $muestra5 = 'active';
}

//use app\assets_b\EduSecUserProfile;
//EduSecUserProfile::register($this);

/* @var $this yii\web\View */
/* @var $model app\modules\student\models\StuMaster */

/*$this->title = $model->stuMasterStuInfo->stu_first_name." ".$model->stuMasterStuInfo->stu_last_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('stu', 'Student'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('stu', 'Manage Students'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<?php if(\Yii::$app->session->hasFlash('file_upload_err')) : ?>
<div class="bg-danger text-danger" style = "padding:10px">
    <?php echo \Yii::$app->session->getFlash('file_upload_err'); ?>
</div>
<?php endif; ?>

<section class="content-header">

<div class="row">
  <div class="col-xs-12">
    <h2 class="page-header">    
        <i class="fa fa-user"></i>Información de profesores del IEMS
        <div class="<?= (Yii::$app->language == 'ar') ? 'pull-left' : 'pull-right'?>">

          <?php  if(Yii::$app->user->can('menuAdmin')) {  ?>

            <?= Html::a('<i class="fa fa-file-pdf-o"></i> '.Yii::t('app', 'Regresar'), ['/academica/inv-profesores'], ['class' => 'btn-sm btn btn-warning', 'id' => 'export-pdf']) ?>

            <?php
          }
          ?>
  
        </div>
    </h2>
  </div><!-- /.col -->
</div>
</section>


<section class="content edusec-user-profile">
<div class="row">

<div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <img class="center-block img-circle img-thumbnail img-responsive" src="images/foto.png" alt="No Image" style="width:100px;height:100px">                                    <a class="text-center center-block" href="/employee/emp-master/emp-photo?id=20" title="Change Profile Picture" data-target="#globalModal" data-toggle="modal" data-modal-size="modal-sm"><i class="fa fa-pencil-square" aria-hidden="true"></i> Imagen</a>                             <h4 class="profile-username text-center">
                   <?=$model->nombre?>   <?=$model->apellido_p?>          </h4>
                <h5 class="text-center">
                    
                    <?
                   if ($model->status == 1 ) {

                       echo '<span class="label label-success">Funciona</span>';
                       }
                      else{
                        echo '<span class="label label-danger">No funciona</span>';
                    }
                    ?>
                </h5>
                <hr>

              <table class="table table-striped">
            <tr>
                <th><?//= $info->getAttributeLabel('stu_unique_id') ?></th>
                <td><? //= Html::encode($info->stu_unique_id) ?></td>
            </tr>
            <tr>
                <th>Datos Profesor</th>
                <td><div style="right: 10px; text-align:right" id="rating_2" data-hash="0xf3b0f0979bfa741f264e31acb590ac8662e7616b6869078b90420c6f7908a053" data-area="39,,70,">
            
          
           <button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class="fa fa-thumbs-o-up"></i> </button>
            
           
        </div></td>
            </tr>

             <tr>
                <th>Datos Personales</th>
                <td><div style="right: 10px; text-align:right" id="rating_2" data-hash="0xf3b0f0979bfa741f264e31acb590ac8662e7616b6869078b90420c6f7908a053" data-area="39,,70,">
            
              <?php
            if ($count<>0) {
            ?>
               <button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class="fa fa-thumbs-o-up"></i> </button>
            <?php
                # code...
            } else {
            ?>

           <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-thumbs-o-down"></i> </button>

            <?php
              }
             ?>
        </div></td>
            </tr>

              <tr>
                <th>Domicilio</th>
                <td><div style="right: 10px; text-align:right" id="rating_2" data-hash="0xf3b0f0979bfa741f264e31acb590ac8662e7616b6869078b90420c6f7908a053" data-area="39,,70,">
            
              <?php
            if ($count<>0) {
            ?>
               <button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class="fa fa-thumbs-o-up"></i> </button>
            <?php
                # code...
            } else {
            ?>

           <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-thumbs-o-down"></i> </button>

            <?php
              }
             ?>
        </div></td>
            </tr>

             <tr>
                <th>Experiencia Academica</th>
                <td><div style="right: 10px; text-align:right" id="rating_2" data-hash="0xf3b0f0979bfa741f264e31acb590ac8662e7616b6869078b90420c6f7908a053" data-area="39,,70,">
            
              <?php
            if ($count<>0) {
            ?>
               <button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class="fa fa-thumbs-o-up"></i> </button>
            <?php
                # code...
            } else {
            ?>

           <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-thumbs-o-down"></i> </button>

            <?php
              }
             ?>
        </div></td>
            </tr>

              <tr>
                <th>Documentos</th>
                <td><div style="right: 10px; text-align:right" id="rating_2" data-hash="0xf3b0f0979bfa741f264e31acb590ac8662e7616b6869078b90420c6f7908a053" data-area="39,,70,">
            
              <?php
            if ($count<>0) {
            ?>
               <button class="btn btn-icon waves-effect waves-light btn-success m-b-5"> <i class="fa fa-thumbs-o-up"></i> </button>
            <?php
                # code...
            } else {
            ?>

           <button class="btn btn-icon waves-effect waves-light btn-danger m-b-5"> <i class="fa fa-thumbs-o-down"></i> </button>

            <?php
              }
             ?>
        </div></td>
            </tr>

           



           
           
           
         
        </table>

                <div class="clearfix">
                    <span class="pull-left">Informacion Completada</span>
                    <small class="pull-right">42%</small>
                </div>
                <div class="progress sm" style="background-color:#efefef">
                    <div style="width: 42%;" class="progress-bar progress-bar-green"></div>
                </div>

                                   <!--  <a id="export-pdf" class="btn btn-app" href="/employee/emp-master/emp-profile-pdf?id=20" target="blank"><i class="fa fa-file-pdf-o"></i> Imprimir Perfil de Usuario PDF</a>                
                                   <a class="btn btn-app" href="/hr/employee-attendance/view?id=20" target="_blank"><i class="fa fa-hand-o-up"></i> Attendance</a>                
                                    <a class="btn btn-app" href="/timetable/timetable-details/employee-timetable?id=20" target="_blank"><i class="fa fa-calendar-o"></i> Timetable</a>    -->             
            </div>
        </div>
    </div>
 
    <div class="col-lg-9 profile-data">
        <ul class="nav nav-tabs responsive" id = "profileTab">
            <li  class="<?=$muestra1?>" id = "personal-tab"><a href="#personal" data-toggle="tab"><i class="fa fa-street-view"></i>Datos Profesor</a></li>
            <li class="<?=$muestra2?>" id = "guardians-tab"><a href="#guardians" data-toggle="tab"><i class="fa fa-file-text"></i>Datos Personales</a></li>
             <li class="<?=$muestra3?>" id = "address-tab"><a href="#address" data-toggle="tab"><i class="fa fa-file-text"></i>Domicilio</a></li>
              <li class="<?=$muestra5?>" id = "address-tab"><a href="#exp" data-toggle="tab"><i class="fa fa-file-text"></i>Experiencia Academica</a></li>
              <li class="<?=$muestra4?>" id = "docs-tab"><a href="#docs" data-toggle="tab"><i class="fa fa-file-text"></i>Documentos</a></li>
            <?php  
           /*   if(Yii::$app->user->can('modTelecom')) {  */
            ?>
           <!-- <li id = "telecom-tab"><a href="#telecom" data-toggle="tab"><i class="fa fa-home"></i>Info Telecom</a></li> -->
            <?php
          //  }
            ?>
          <!--  <li id = "guardians-tab"><a href="#guardians" data-toggle="tab"><i class="fa fa-file-text"></i>Sistema Operativo</a></li>
            <li id = "address-tab"><a href="#address" data-toggle="tab"><i class="fa fa-file-text"></i>Software Instalado</a></li>
             <li id = "user-tab"><a href="#user" data-toggle="tab"><i class="fa fa-street-view"></i>Usuario</a></li>
             <li id = "user-tab"><a href="#inv" data-toggle="tab"><i class="fa fa-street-view"></i>Inventario</a></li>
              <li id = "user-tab"><a href="#reu" data-toggle="tab"><i class="fa fa-street-view"></i>Ubicacion Temporal</a></li>
           <!-- <li id = "address-tab"><a href="#address" data-toggle="tab"><i class="fa fa-street-view"></i>Licenciamiento</a></li>
            <li id = "address-tab"><a href="#address" data-toggle="tab"><i class="fa fa-street-view"></i>Usuario</a></li>
            <li id = "documents-tab"><a href="#documents" data-toggle="tab"><i class="fa fa-file-text"></i>Mantenimiento Preventivo</a></li>
            <li id = "documents-tab"><a href="#documents" data-toggle="tab"><i class="fa fa-file-text"></i>Tickets</a></li>
             <li id = "documents-tab"><a href="#documents" data-toggle="tab"><i class="fa fa-file-text"></i>Info Inventario</a></li>
            <li id = "documents-tab"><a href="#documents" data-toggle="tab"><i class="fa fa-file-text"></i>Historico</a></li>-->
            
            
        </ul>
         <div id='content' class="tab-content responsive">
            <div class="tab-pane  <?=$muestra1?>" id="personal">
                <?= $this->render('_tab_dp', ['model' => $model]) ?> 
            </div>

             <div class="tab-pane <?=$muestra2?>" id="guardians">
                 <?= $this->render('_tab_dpprof', ['count' => $count, 'model' => $model]) ?>  
            </div>

             <div class="tab-pane <?=$muestra3?>" id="address">
                <?= $this->render('_tab_dom', ['count2' => $count2, 'model' => $model]) ?>  
            </div>

            <div class="tab-pane <?=$muestra5?>" id="exp">
                <?= $this->render('_tab_ac', ['count2' => $count2, 'model' => $model]) ?>  
            </div>


            <div class="tab-pane <?=$muestra4?>" id="docs">
                <?= $this->render('_tab_doc', ['count3' => $count3, 'model' => $model]) ?>  
            </div>
            <div class="tab-pane" id="telecom">
                <?//= $this->render('_tab_telecom', ['count' => $count, 'info' => $info, 'model' => $model]) ?> 
            </div>
           
            <div class="tab-pane" id="address">
                <?//= $this->render('_tab_sw', ['count3' => $count3, 'info' => $info, 'model' => $model]) ?>  
            </div>
             <div class="tab-pane" id="user">
                <?//= $this->render('_tab_us', ['count3' => $count3, 'info' => $info, 'model' => $model]) ?>  
            </div>

             <div class="tab-pane" id="reu">
                <?//= $this->render('_tab_rec', ['count3' => $count3, 'info' => $info, 'model' => $model]) ?>  
            </div>

             <div class="tab-pane" id="inv">
                <?//= $this->render('_tab_inv', ['count3' => $count3, 'info' => $info, 'model' => $model]) ?>  
            </div>
            <div class="tab-pane" id="documents">
                <?//= $this->render('_tab_stu_documents', ['stu_docs' => $stu_docs, 'model'=>$model]) ?>  
            </div>
         <?php if(!Yii::$app->session->get('stu_id')) : ?>
            <div class="tab-pane" id="fees">
                <?//= $this->render('_tab_stu_fees', ['model' => $feesTranModel, 'FccModel'=>$feesCatModel, 'stuData'=>$model]) ?>    
            </div>
        <?php endif; ?>
        </div>
    </div>
     </div> <!---End Row Div--->
</section>

<!--  POP UP Window for Photo Upload/Update -->
<div class="modal fade col-xs-12 col-lg-12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="photoup">
  <div class="modal-dialog">
    <div class="modal-content row">
    </div>
  </div>
</div>

