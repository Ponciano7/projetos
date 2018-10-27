<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProjetoModel */

$this->title = 'Create Projeto Model';
$this->params['breadcrumbs'][] = ['label' => 'Projeto Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projeto-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
