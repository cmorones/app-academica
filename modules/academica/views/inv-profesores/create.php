<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvProfesores */

$this->title = 'Create Inv Profesores';
$this->params['breadcrumbs'][] = ['label' => 'Inv Profesores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Agregar Profesor</h3>
                            </div>
                            <div class="panel-body">

  
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
