<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CatModelo */

$this->title = 'Create Cat Modelo';
$this->params['breadcrumbs'][] = ['label' => 'Cat Modelos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
<br>
<div class="col-xs-12" style="padding-top: 10px;">
  <div class="box">
   <div class="box-body table-responsive">
     <div class="assignment-index">
  <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
   
     </div>
   </div>
  </div>
</div>