<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Item Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'natureza',
            'valor',
            'numero_item',
            'justificativa:ntext',
            //'quantidade',
            //'custo_unitario',
            //'tipo_item',
            //'descricao:ntext',
            //'id_projeto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
