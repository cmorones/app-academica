<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvConvocatorias */

$this->title = 'Create Inv Convocatorias';
$this->params['breadcrumbs'][] = ['label' => 'Inv Convocatorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Agregar Convocatorias</h3>
                            </div>
                            <div class="panel-body">




    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
