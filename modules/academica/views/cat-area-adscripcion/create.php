<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\CatAreaAdscripcion */

$this->title = 'Create Cat Area Adscripcion';
$this->params['breadcrumbs'][] = ['label' => 'Cat Area Adscripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-area-adscripcion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
