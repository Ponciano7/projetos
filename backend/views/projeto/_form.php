<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjetoModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projeto-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_processo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inicio_previsto')->widget(\yii\jui\DatePicker::class, []) ?>

    <?= $form->field($model, 'termino')->widget(\yii\jui\DatePicker::class, []) ?>

    <?= $form->field($model, 'nome_coordenador')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titulo_projeto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_protocolo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cotacao_moeda_estrangeira')->textInput() ?>

    <?= $form->field($model, 'numero_fapeam_outorga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publicacao_diario_oficial')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
