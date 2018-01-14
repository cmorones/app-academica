<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\CatDelegaciones */

$this->title = 'Create Cat Delegaciones';
$this->params['breadcrumbs'][] = ['label' => 'Cat Delegaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Agregar Delegaciones</h3>
                            </div>
                            <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
