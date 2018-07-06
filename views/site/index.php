<?php
/* @var $this yii\web\View */$this->title = 'APP-SISMA';
use yii\helpers\Html;
use app\modules\soporte\models\InvBajas;
use app\modules\admin\models\CatPlanteles;
use app\modules\soporte\models\InvEquipos;
use app\modules\soporte\models\InvImpresoras;
use app\modules\soporte\models\InvNobreak;





?>
                <div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-dashboard"></i> Tablero |<small> Dirección Academica</small>        </h1>
       

    </section>
  
	<div class="callout callout-info show msg-of-day" >
	    <h4><i class="fa fa-bullhorn"></i> Mensaje del dia</h4>
	    <marquee onmouseout="this.setAttribute('scrollamount', 6, 0);" onmouseover="this.setAttribute('scrollamount', 0, 0);" scrollamount="6" behavior="scroll" direction="left">Bienvenido al Sistema de Gestión Docente </marquee>
	</div>
    <?php
 if(!Yii::$app->user->can('menuPlantac')) {
    ?>
  <section class="content">
       <div class="row">
                   <div class="col-sm-6 col-lg-3">
                        <div class="mini-stat clearfix bx-shadow bg-info">
                            <span class="mini-stat-icon"><i class="ion-android-contacts"></i></span>
                            <div class="mini-stat-info text-right">
                                <span class="counter">15852</span>
                                TOTAL DOCENTES
                            </div>
                            <div class="tiles-progress">
                                <div class="m-t-20">
                                    <h5 class="text-uppercase text-white m-0">Tramites total<span class="pull-right">235</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="mini-stat clearfix bg-purple bx-shadow">
                            <span class="mini-stat-icon"><i class="ion-android-contacts"></i></span>
                            <div class="mini-stat-info text-right">
                                <span class="counter">3</span>
                                CAMBIOS DE PLANTEL
                            </div>
                            <div class="tiles-progress">
                                <div class="m-t-20">
                                    <h5 class="text-uppercase text-white m-0">Tramites <span class="pull-right">59</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                   <div class="col-sm-6 col-lg-3">
                        <div class="mini-stat clearfix bg-primary bx-shadow">
                            <span class="mini-stat-icon"><i class="ion-android-contacts"></i></span>
                            <div class="mini-stat-info text-right">
                                <span class="counter">100</span>
                               DOCENTES LSGS
                            </div>
                            <div class="tiles-progress">
                                <div class="m-t-20">
                                    <h5 class="text-uppercase text-white m-0">Tramites <span class="pull-right">136</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                  <div class="col-sm-6 col-lg-3">
                        <div class="mini-stat clearfix bg-success bx-shadow">
                            <span class="mini-stat-icon"><i class="ion-android-contacts"></i></span>
                            <div class="mini-stat-info text-right">
                                <span class="counter">20544</span>
                               DOCENTES ACTIVOS
                            </div>
                            <div class="tiles-progress">
                                <div class="m-t-20">
                                    <h5 class="text-uppercase text-white m-0">Tramites <span class="pull-right">1026</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 

    </section><!-- right col -->


    <?php
}

?>
</div><!-- /.row (main row) -->