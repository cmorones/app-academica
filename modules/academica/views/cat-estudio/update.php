<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\CatEstudio */

$this->title = 'Update Cat Estudio: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cat Estudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cat-estudio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
