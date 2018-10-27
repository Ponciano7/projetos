<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjetoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projeto-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'num_processo') ?>

    <?= $form->field($model, 'inicio_previsto') ?>

    <?= $form->field($model, 'termino') ?>

    <?= $form->field($model, 'nome_coordenador') ?>

    <?php // echo $form->field($model, 'edital') ?>

    <?php // echo $form->field($model, 'titulo_projeto') ?>

    <?php // echo $form->field($model, 'num_protocolo') ?>

    <?php // echo $form->field($model, 'cotacao_moeda_estrangeira') ?>

    <?php // echo $form->field($model, 'numero_fapeam_outorga') ?>

    <?php // echo $form->field($model, 'publicacao_diario_oficial') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
