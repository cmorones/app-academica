<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\CatNivelProf */

$this->title = 'Create Cat Nivel Prof';
$this->params['breadcrumbs'][] = ['label' => 'Cat Nivel Profs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-nivel-prof-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
