<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\CatAcademias */

$this->title = 'Create Cat Academias';
$this->params['breadcrumbs'][] = ['label' => 'Cat Academias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-academias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
