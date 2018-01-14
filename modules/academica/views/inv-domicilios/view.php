<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvDomicilios */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Domicilios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-domicilios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_prof',
            'fecha_reg',
            'calle',
            'num_int',
            'num_ext',
            'colonia',
            'delegacion',
            'estado',
            'cp',
            'status',
            'observaciones',
            'created_at',
            'created_by',
            'updated_at',
            'updated_by',
        ],
    ]) ?>

</div>
