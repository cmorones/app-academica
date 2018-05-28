<?php

use yii\helpers\Html;


?>
<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">CONVOCATORIAS ACTIVAS PARA REALIZAR CAMBIO DE TURNO Y/O PLANTEL</h3>
                            </div>
                            <div class="panel-body">

                            	<?php
                            		$numConv = app\modules\academica\models\InvConvocatorias::find()->where(['id_tipo'=>1])->count();

                            		if ($numConv ==0) { ?>
									<div class="row">
										<h33>NO HAY CONVOCATORIAS DISPONIBLES</h3>
									</div>

								<?php
								}else{
                            	?>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Fecha de Publicacion</th>
                                                    <th>Año</th>
                                                    <th>Semestre</th>
                                                   
                                                    <th>Fecha de Inicio</th>
                                                    <th>Fecha de Termino</th>
                                                     <th>Convocatoria</th>
                                                     <th>Estado</th>
                                                    <th>Agregar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php

                                              

                                             $dom = app\modules\academica\models\InvConvocatorias::find()->where(['id_tipo'=>1])->all();

                                             $i=1;

foreach ($dom as $value) {


                                            	?>
                                                <tr>
                                                    <td><?=$i?></td>
                                                   
                                                    <td><?=$value->fecha_reg?></td>
                                                    <td><?=$value->anios->nombre?></td>
                                                    <td><?=$value->semestre->nombre?></td>
                                                    <td><?=$value->fecha_ini?></td>
                                                    <td><?=$value->fecha_fin?></td>
                                                    <td><button type="button" class="btn btn-primary waves-effect waves-light m-b-5"><?=$value->docto?></button></td>
                                                         <td>Activa</td>


                                                     <td><?= Html::a('<i class="fa fa-plus-square" aria-hidden="true"></i>Registrar', ['reg_pyt', 'conv' => $value['id']], ['class' => 'btn btn-primary']) ?></td>
                                                   
                                               
                                                </tr>

                                                <?php
                                                $i++;
                                                	}

                                                ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                                <?php
                                              
                                                	}

                                                	?>
                                

                            </div>
                        </div>


<div class="panel panel-color panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">CONVOCATORIAS ACTIVAS PARA SOLICITUD DE LICENCIA CON O SIN GOCE DE SUELDO O RENOVACIÓN (PRORROGA)</h3>
                            </div>
                            <div class="panel-body">

                            	<?php
                            		$numConv = app\modules\academica\models\InvConvocatorias::find()->where(['id_tipo'=>2])->count();

                            		if ($numConv ==0) { ?>
									<div class="row">
										<h3>NO HAY CONVOCATORIAS DISPONIBLES</h3>
									</div>

								<?php
								}else{
                            	?>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Fecha de Publicacion</th>
                                                    <th>Año</th>
                                                    <th>Semestre</th>
                                                   
                                                    <th>Fecha de Inicio</th>
                                                    <th>Fecha de Termino</th>
                                                     <th>Convocatoria</th>
                                                     <th>Estado</th>
                                                    <th>Agregar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php

                                              

                                             $dom = app\modules\academica\models\InvConvocatorias::find()->where(['id_tipo'=>2])->all();

                                             $i=1;

foreach ($dom as $value) {


                                            	?>
                                                <tr>
                                                    <td><?=$i?></td>
                                                   
                                                    <td><?=$value->fecha_reg?></td>
                                                    <td><?=$value->anios->nombre?></td>
                                                    <td><?=$value->semestre->nombre?></td>
                                                    <td><?=$value->fecha_ini?></td>
                                                    <td><?=$value->fecha_fin?></td>
                                                    <td><button type="button" class="btn btn-info waves-effect waves-light m-b-5"><?=$value->docto?></button></td>
													<td>Activa</td>
                                                    <td><button type="button" class="btn btn-info waves-effect waves-light m-b-5">Registrar Solicitud</button></td>
                                                    
                                                </tr>

                                                <?php
                                                $i++;
                                                	}

                                                ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                                <?php
                                              
                                                	}

                                                	?>
                                

                            </div>
                        </div>


<div class="panel panel-color panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">CONVOCATORIAS ACTIVAS PARA PERMISOS ESPECIALES O  RENOVACIÓNES (PRORROGA)</h3>
                            </div>
                            <div class="panel-body">

                            	<?php
                            		$numConv = app\modules\academica\models\InvConvocatorias::find()->where(['id_tipo'=>3])->count();

                            		if ($numConv ==0) { ?>
									<div class="row">
										<h3>NO HAY CONVOCATORIAS DISPONIBLES</h3>
									</div>

								<?php
								}else{
                            	?>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Fecha de Publicacion</th>
                                                    <th>Año</th>
                                                    <th>Semestre</th>
                                                   
                                                    <th>Fecha de Inicio</th>
                                                    <th>Fecha de Termino</th>
                                                     <th>Convocatoria</th>
                                                     <th>Estado</th>
                                                    <th>Agregar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php

                                              

                                             $dom = app\modules\academica\models\InvConvocatorias::find()->where(['id_tipo'=>3])->all();

                                             $i=1;

foreach ($dom as $value) {


                                            	?>
                                                <tr>
                                                    <td><?=$i?></td>
                                                   
                                                    <td><?=$value->fecha_reg?></td>
                                                    <td><?=$value->anios->nombre?></td>
                                                    <td><?=$value->semestre->nombre?></td>
                                                    <td><?=$value->fecha_ini?></td>
                                                    <td><?=$value->fecha_fin?></td>
                                                    <td><button type="button" class="btn btn-purple waves-effect waves-light m-b-5"><?=$value->docto?></button></td>
                                                     <td>Activa</td>

                                                    <td><button type="button" class="btn btn-purple waves-effect waves-light m-b-5">Registrar Solicitud</button></td>
                                                    <td><?= Html::a('<i class="fa fa-plus-square" aria-hidden="true"></i>Mostrar', ['periodo', 'idp' => $value['id']], ['class' => 'btn btn-purple']) ?></td>
                                                   
                                                </tr>

                                                <?php
                                                $i++;
                                                	}

                                                ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                                <?php
                                              
                                                	}

                                                	?>
                                

                            </div>
                        </div>
