<?php
use yii\helpers\Html;
use yii\grid\GridView;
use xj\bootbox\BootboxAsset;

/* @var $this yii\web\View */
$this->title = 'Lista de Projetos';
?>
<div class="site-index">
  <p>
      <?= Html::a('<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Voltar','#',['class' => 'btn btn-warning','onclick'=>"history.go(-1);"]); ?>
  </p>
    <div class="jumbotron">
        <h2> MÓDULO ALTERAÇÃO ORÇAMENTÁRIA</h2>
        <br><br>
        <ul>

        <?php foreach ($model as $projeto): ?>
          <li>
            <?= Html::a("{$projeto->titulo_projeto}", array('/orc/alter','id' => $projeto->id), ['class'=>'glyphicon glyphicon-folder-open']) ?>
          </li>

        <?php endforeach; ?>
      </ul>


    </div>
