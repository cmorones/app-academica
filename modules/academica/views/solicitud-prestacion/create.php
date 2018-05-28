<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\SolicitudPrestacion */

$this->title = 'Create Solicitud Prestacion';
$this->params['breadcrumbs'][] = ['label' => 'Solicitud Prestacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Agregar Convocatorias</h3>
                            </div>
                            <div class="panel-body">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
