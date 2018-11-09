<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItemModel */

$this->title = 'Item nº '.$model->numero_item.': '.$model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Itens do Projeto', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="item-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'natureza',
            'valor',
            'numero_item',
            'justificativa:ntext',
            'quantidade',
            'custo_unitario',
            'tipo_item',
            'descricao:ntext',
            'id_projeto',
        ],
    ]) ?>

</div>

<script type="text/javascript">
    
</script>