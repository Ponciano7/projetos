<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItemModel */

$this->title = 'Alterar Item: ' . $model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Item Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-model-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
        	'natureza',
        	],
    ]) ?>
    <!-- <div><?php echo $model->natureza; ?></div> -->
    <?php //$form->field($model, 'natureza')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'valor')->textInput() ?>
    <?php //$form->field($model, 'numero_item')->textInput(['maxlength' => true]) ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'numero_item',
            ],
    ]) ?>
    <?= $form->field($model, 'justificativa')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'quantidade')->textInput() ?>
    <?= $form->field($model, 'custo_unitario')->textInput() ?>
    <?php //$form->field($model, 'tipo_item')->textInput() ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tipo_item',
            ],
    ]) ?>
    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>
    <?php //$form->field($model, 'id_projeto')->textInput() ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
        	'id_projeto',
        	],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php //$this->render('_form', [
        //'model' => $model,
    //]) ?>

</div>
