<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\CatModalidad */

$this->title = 'Create Cat Modalidad';
$this->params['breadcrumbs'][] = ['label' => 'Cat Modalidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-modalidad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
