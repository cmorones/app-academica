<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\SolicitudPrestacion */

$this->title = 'Create Solicitud Prestacion';
$this->params['breadcrumbs'][] = ['label' => 'Solicitud Prestacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">AGREGAR SOLICITUD DE  CAMBIO DE TURNO Y/O PLANTEL</h3>
                            </div>
                            <div class="panel-body">



    <?= $this->render('_formpyt', [
        'model' => $model,
    ]) ?>

</div>
</div>
