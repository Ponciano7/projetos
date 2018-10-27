<?php
use yii\helpers\Html;
use yii\grid\GridView;
use xj\bootbox\BootboxAsset;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
$this->title = "Projeto: " . $modelProjeto->titulo_projeto;

?>
<div class="table-responsive">
<div class="site-index">
  <p>
      <?= Html::a('<span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Voltar','#',['class' => 'btn btn-warning','onclick'=>"history.go(-1);"]); ?>
  </p>

  <?php
    if($_POST){
      echo "Você inseriu dados";

    }else{
      echo "NAO TEVE DADOS";
    }


  ?>

  <?php foreach ($modelItem as $ItemProjeto): ?>
    <li>
      <?= Html::a("{$ItemProjeto->natureza}", array('/orc/alter','id' => $ItemProjeto->id, 'projeto' => $ItemProjeto->id_projeto), ['class'=>'glyphicon glyphicon-folder-open']) ?>

    </li>

  <?php endforeach; ?>

  <div class="site-login">


      <div class="row">
          <div class="col-lg-5">
              <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

              <div>
                  []
              </div>



              <?php ActiveForm::end(); ?>
          </div>
      </div>
  </div>


        <form class="form-item"  method="post">


             <table class="table">
                     <legend align="left">Material de Consumo</legend>

                     <thead class="thead-dark">
                             <tr>
                                   <th scope="col">N Item</th>
                                   <th scope="col">Especificação</th>
                                   <th scope="col">Quantidade</th>
                                   <th scope="col">Custo Unitário</th>
                                   <th scope="col">Custo Total</th>
                                   <th scope="col">Valor Gasto</th>
                                   <th scope="col">Valor Disponível</th>
                                   <th scope="col">Professor Responsável</th>
                                   <th scope="col">Justificativas</th>
                                   <th scope="col">Excluir item</th>
                             </tr>
                     </thead>

                     <tbody>
                      <tr>
                        <td><h><?php echo $ItemProjeto->numero_item; ?></h></td>
                        <td><input type="text" name="local" <?php echo "placeholder='".$ItemProjeto->descricao."'"; ?>></td>
                        <td><input type="text" class="input-class" name="qtd" <?php echo "placeholder='".$ItemProjeto->quantidade."'"; ?>></td>
                        <td><input type="text" name="custo-unit" <?php echo "placeholder='".$ItemProjeto->custo_unitario."'"; ?>></td>
                        <td><input type="text" name="custo-total" placeholder="R$"></td>
                        <td><input type="text" name="v-gasto" placeholder="R$"></td>
                        <td><input type="text" name="v-disp" placeholder="R$"></td>
                        <td><input type="text" name="prof" placeholder=""></td>
                        <td><input type="text" name="justif" placeholder=""></td>
                        <td><input type="button" name="excluir" value="excluir-item"></td>
                      </tr>
                    </tbody>
            </table>

            <div class="form-group">
              <?= Html::submitButton('Adicionar', ['Item/alter'], ['class' => 'btn btn-success', 'name' => 'alter-button']) ?>
              <?= Html::submitButton('Excluir', ['Item/alter'], ['class' => 'btn btn-success', 'name' => 'alter-button']) ?>
            </div>

            <div class="form-group">
              <?= Html::submitButton('Salvar Alterações', array('/Item/update2','id' => $ItemProjeto->id, 'projeto' => $ItemProjeto->id_projeto), ['class' => 'btn btn-success', 'name' => 'alter-button']) ?>
            </div>
        </form>
        <br><br>
    </div>
