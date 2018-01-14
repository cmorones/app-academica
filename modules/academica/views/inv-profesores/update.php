<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvProfesores */

$this->title = 'Update Inv Profesores: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Profesores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Modificar Profesor</h3>
                            </div>
                            <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
