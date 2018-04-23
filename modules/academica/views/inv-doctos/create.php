<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvDoctos */

$this->title = 'Create Inv Doctos';
$this->params['breadcrumbs'][] = ['label' => 'Inv Doctos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user"></i> Agregar Documentos</h3>
                            </div>
                            <div class="panel-body">

 
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
