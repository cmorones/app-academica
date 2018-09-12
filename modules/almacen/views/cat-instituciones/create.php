<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\CatInstituciones */

$this->title = 'Create Cat Instituciones';
$this->params['breadcrumbs'][] = ['label' => 'Cat Instituciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-instituciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
