<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\academica\models\CatAcademiasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cat Academias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Agregar Academicas</h3>
                            </div>
                            <div class="panel-body">


    <p>
        <?= Html::a('Agregar Academias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //  'id',
            'nombre',

         //   ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
