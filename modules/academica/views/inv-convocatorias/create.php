<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\InvConvocatorias */

$this->title = 'Create Inv Convocatorias';
$this->params['breadcrumbs'][] = ['label' => 'Inv Convocatorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-convocatorias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
