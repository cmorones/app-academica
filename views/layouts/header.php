<?php
use \app\assets_b\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\NotFoundHttpException;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

Yii::$app->name = "APP";


?>
<!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">

                        <a href="index.html" class="logo"><img src="<?php echo Yii::$app->request->baseUrl; ?>/images/logo.jpeg" style="padding:5;width: 50px; height: 50px;"><span>  APP-Sistema de Gestión Docente IEMS </span></a>
                    </div>
                    

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                                                               <?php  
             if(Yii::$app->user->can('menuPlantac')) {
            ?>
                        <ul class="navigation-menu">
                            <li>
                               
                                <?= Html::a('<i class="md md-home"></i>Tablero',['/site'])  ?>
                            </li>

                        

                            <li class="has-submenu">
                                <a href="#"><i class="md ion-plus-circled"></i> <span>Plantac</span> </a>
                                  <ul class="submenu">
                                     <li>
                            <?= Html::a('<i class="fa  md-add"></i> Registrar',['/academica/plantac']) ?>
                        </li>

                          
                                    
                                </ul>
                            </li>

                          

                             





                                <li class="has-submenu">
                                <a href="#"><i class="md md-palette "></i><span> Administración </span> </a>
                                <ul class="submenu">

                                  <li>
                            <?= Html::a('<i class="fa fa-male"></i> Grados',['/academica/cat-grado']) ?>
                        </li>

                            <li>
                            <?= Html::a('<i class="fa fa-male"></i> Categorias',['/academica/categorias-pl']) ?>
                        </li>

                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Situacion Contractual',['/academica/situacion-pl']) ?>
                        </li>


                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Nivel Academico',['/academica/nivel-pl']) ?>
                        </li>


                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Asignaturas',['/academica/asignatura-pl']) ?>
                        </li>


                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Justificaciones',['/academica/justifica-pl']) ?>
                        </li>


                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Movimientos',['/academica/movimiento-pl']) ?>
                        </li>


                          

                                                       <?php 
                                             } 

             if(Yii::$app->user->can('menuAdmin')) {
            ?>
                        <ul class="navigation-menu">
                            <li>
                               
                                <?= Html::a('<i class="md md-home"></i>Tablero',['/site'])  ?>
                            </li>

                        

                            <li class="has-submenu">
                                <a href="#"><i class="md ion-plus-circled"></i> <span>Docentes</span> </a>
                                  <ul class="submenu">
                                     <li>
                            <?= Html::a('<i class="fa  md-add"></i> Lista de Profesores',['/academica/inv-profesores']) ?>
                        </li>

                                    
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md  md-exit-to-app"></i> <span> Convocatorias </span> </a>
                                  <ul class="submenu">

                                   <li>
                            <?= Html::a('<i class="fa  md-add"></i> Mostrar Convocatorias',['/academica/inv-convocatorias']) ?>
                        </li>
                                      
                           
                                </ul>
                            </li>

                               <li class="has-submenu">
                                <a href="#"><i class="md  md-event-note"></i> <span> Solucitudes </span> </a>
                                  <ul class="submenu">
                                    <li><?= Html::a('Lista de solicitudes',['/academica/solicitud-prestacion'])?></li>
                                 
                                    
                                </ul>
                            </li>

                             <li class="has-submenu">
                                <a href="#"><i class="md  md-event-note"></i> <span> Informes </span> </a>
                                  <ul class="submenu">
                                    <li><?= Html::a('Solicitudes',['/ventas/informes'])?></li>
                                    <li><?= Html::a('Convocatorias',['/ventas/informes'])?></li>
                                    <li><?= Html::a('Docentes',['/ventas/informes'])?></li>
                                 
                                    
                                </ul>
                            </li>





                                <li class="has-submenu">
                                <a href="#"><i class="md md-palette "></i><span> Administración </span> </a>
                                <ul class="submenu">

                                  <li>
                            <?= Html::a('<i class="fa fa-male"></i> Academias',['/academica/cat-academias']) ?>
                        </li>

                                 <li>
                            <?= Html::a('<i class="fa fa-male"></i> Turnos',['/academica/cat-turno']) ?>
                        </li>

                         <li>
                            <?= Html::a('<i class="fa fa-male"></i> Modalidad',['/academica/cat-modalidad']) ?>
                        </li>

                         <li>
                            <?= Html::a('<i class="fa fa-male"></i> Tipo Porfesor',['/academica/cat-tipo-prof']) ?>
                        </li>

                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Nivel Porfesor',['/academica/cat-nivel-prof']) ?>
                        </li>

                         <li>
                            <?= Html::a('<i class="fa fa-male"></i> Area Adscripcion',['/academica/cat-area-adscripcion']) ?>
                        </li>

                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Delegaciones',['/academica/cat-delegaciones']) ?>
                        </li>


                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Estados',['/academica/cat-estados']) ?>
                        </li>
                                                       <?php 
                                             } 
             if(Yii::$app->user->can('MenuSuper')) {
            ?>

                          <li>
                            <?= Html::a('<i class="fa fa-male"></i>Assignment',['/rights/assignment/index']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Roles',['/rights/role/index']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Permisos',['/rights/permission']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Rutas',['/rights/route']) ?>
                        </li>

                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Usuarios',['/admin/users']) ?>
                        </li>
    <?php
               }

               if(Yii::$app->user->can('MenuDTI')) {
            ?>
            
                        <ul class="navigation-menu">
                            <li>
                               
                                <?= Html::a('<i class="md md-home"></i>Tablero',['/site'])  ?>
                            </li>

                        

                            <li class="has-submenu">
                                <a href="#"><i class="md ion-plus-circled"></i> <span>Mis Datos</span> </a>
                                  <ul class="submenu">
                                     <li>
                            <?= Html::a('<i class="fa  md-add"></i>Modificar mis Datoss',['/academica/inv-profesores/personal']) ?>
                        </li>

                                    
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md  md-exit-to-app"></i> <span> Convocatorias </span> </a>
                                  <ul class="submenu">

                                   <li>
                            <?= Html::a('<i class="fa  md-add"></i> Mostrar Convocatorias',['/academica/inv-convocatorias']) ?>
                        </li>
                        </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="md  md-exit-to-app"></i> <span> Solicitudes </span> </a>
                                  <ul class="submenu">

                                   <li>
                            <?= Html::a('<i class="fa  md-add"></i> Mis Solicitudes',['/academica/solicitud-prestacion/owner']) ?>
                        </li>
                        <li><?= Html::a('<i class="fa  md-add"></i></i>Solicitudes Activas',['/academica/solicitud-prestacion/pyt'])?></li>
                                      
                           
                              <?php
                          }

                          ?>
                              
                                    
                                </ul>
                            </li>


        


                            <!--



                                       <li>
                            <?= Html::a('<i class="fa fa-male"></i>Assignment',['/rights/assignment/index']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Roles',['/rights/role/index']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Permisos',['/rights/permission']) ?>
                        </li>
                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Rutas',['/rights/route']) ?>
                        </li>

                        <li>
                            <?= Html::a('<i class="fa fa-male"></i> Usuarios',['/admin/users']) ?>
                        </li>


                            <li class="has-submenu">
                                <a href="#"><i class="md md-content-paste"></i> <span> Administración </span> </a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Icons</a>
                                        <ul class="submenu">
                                            <li><a href="material-icon.html">Material Design</a></li>
                                            <li><a href="ion-icons.html">Ion Icons</a></li>
                                            <li><a href="font-awesome.html">Font awesome</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Forms</a>
                                        <ul class="submenu">
                                            <li><a href="form-elements.html">General Elements</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-advanced.html">Advanced Form</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                            <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                                            <li><a href="code-editor.html">Code Editors</a></li>
                                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                            <li><a href="form-xeditable.html">X-editable</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Tables</a>
                                        <ul class="submenu">
                                            <li><a href="tables.html">Basic Tables</a></li>
                                            <li><a href="table-datatable.html">Data Table</a></li>
                                            <li><a href="tables-editable.html">Editable Table</a></li>
                                            <li><a href="responsive-table.html">Responsive Table</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Charts</a>
                                        <ul class="submenu">
                                            <li><a href="morris-chart.html">Morris Chart</a></li>
                                            <li><a href="chartjs.html">Chartjs</a></li>
                                            <li><a href="flot-chart.html">Flot Chart</a></li>
                                            <li><a href="peity-chart.html">Peity Charts</a></li>
                                            <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                            <li><a href="chart-radial.html">Radial charts</a></li>
                                            <li><a href="other-chart.html">Other Chart</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Maps</a>
                                        <ul class="submenu">
                                            <li><a href="gmap.html"> Google Map</a></li>
                                            <li><a href="vector-map.html"> Vector Map</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Mail</a>
                                        <ul class="submenu">
                                            <li><a href="inbox.html">Inbox</a></li>
                                            <li><a href="email-compose.html">Compose Mail</a></li>
                                            <li><a href="email-read.html">View Mail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->

                            <li class="has-submenu active">
                              
                                <?= Html::a(
                            Yii::t('app', '<i class="md md-pages"></i>SALIR'),
                            ['/site/logout']
                        ) ?>
                                
                            </li>

                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->
