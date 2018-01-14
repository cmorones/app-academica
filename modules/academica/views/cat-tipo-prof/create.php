<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\academica\models\CatTipoProf */

$this->title = 'Create Cat Tipo Prof';
$this->params['breadcrumbs'][] = ['label' => 'Cat Tipo Profs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-tipo-prof-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
