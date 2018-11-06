<?php
use yii\helpers\Html;
use yii\grid\GridView;
use xj\bootbox\BootboxAsset;
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

    }else{
      echo "NAO TEVE DADOS";
    }


  ?>

  <?php foreach ($model as $Item): ?>
    <li>
      <?= Html::a("{$Item->natureza}", array('/orc/alter','id' => $Item->id, 'projeto' => $Item->id_projeto), ['class'=>'glyphicon glyphicon-folder-open']) ?>

    </li>

  <?php endforeach; ?>

 <h><?php //echo $Item->natureza; ?></h>

        <form class="form-item"  method="post">

        <table class="table">
                <legend align="left">Diárias Nacionais</legend>

                <thead class="thead-dark">
                        <tr>
                              <th scope="col">N Item</th>
                              <th scope="col">Localidade</th>
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
              			<td><h><?php echo $Item->numero_item; ?></h></td>
              			<td><input type="text" class="input-class" name="local" <?php //echo "placeholder='".$Despesa_passagem->destino."'"; ?>></td>
              			<td><input type="text" class="input-class" name="qtd" <?php echo "placeholder='".$Item->quantidade."'"; ?>></td>
              			<td><input type="text" name="custo-unit" placeholder="R$"></td>
              			<td><input type="text" name="custo-total" placeholder="R$"></td>
              			<td><input type="text" name="v-gasto" placeholder="R$"></td>
              			<td><input type="text" name="v-disp" placeholder="R$"></td>
              			<td><input type="text" name="prof" placeholder=""></td>
              			<td><input type="text" name="justif" placeholder=""></td>
              			<td><input type="button" name="excluir" value="excluir-item"></td>
              		</tr>
              	</tbody>

                <tbody>
                  <tr>
                    <td><input type="text" name="num-item" placeholder="01"></td>
                    <td><input type="text" name="local" placeholder="São Paulo"></td>
                    <td><input type="text" name="qtd" placeholder=""></td>
                    <td><input type="text" name="custo-unit" placeholder="R$"></td>
                    <td><input type="text" name="custo-total" placeholder="R$"></td>
                    <td><input type="text" name="v-gasto" placeholder="R$"></td>
                    <td><input type="text" name="v-disp" placeholder="R$"></td>
                    <td><input type="text" name="prof" placeholder=""></td>
                    <td><input type="text" name="justif" placeholder=""></td>
                    <td><input type="button" name="excluir" value="excluir-item"></td>
                  </tr>
                </tbody>
              </table>


              <table class="table">
                      <legend align="left">Diárias Internacionais</legend>

                      <thead class="thead-dark">
                              <tr>
                                    <th scope="col">N Item</th>
                                    <th scope="col">Localidade</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Custo Unitário</th>
                                    <th scope="col">Custo Total</th>
                                    <th scope="col">Custo Unitário em R$</th>
                                    <th scope="col">Custo Total em R$</th>
                                    <th scope="col">Valor Gasto</th>
                                    <th scope="col">Valor Disponível</th>
                                    <th scope="col">Professor Responsável</th>
                                    <th scope="col">Justificativas</th>
                                    <th scope="col">Excluir item</th>
                              </tr>
                      </thead>

                      <tbody>
                    		<tr>
                    			<td><input type="text" name="num-item" placeholder="01"></td>
                    			<td><input type="text" name="local" placeholder="São Paulo"></td>
                    			<td><input type="text" name="qtd" placeholder=""></td>
                    			<td><input type="text" name="custo-unit" placeholder="R$"></td>
                    			<td><input type="text" name="custo-total" placeholder="R$"></td>
                          <td><input type="text" name="custo-unit-r$" placeholder="R$"></td>
                          <td><input type="text" name="custo-total-r$" placeholder="R$"></td>
                    			<td><input type="text" name="v-gasto" placeholder="R$"></td>
                    			<td><input type="text" name="v-disp" placeholder="R$"></td>
                    			<td><input type="text" name="prof" placeholder=""></td>
                    			<td><input type="text" name="justif" placeholder=""></td>
                    			<td><input type="button" name="excluir" value="excluir-item"></td>
                    		</tr>
                    	</tbody>
             </table>

             <table class="table">
                     <legend align="left">Passagens Nacionais</legend>

                     <thead class="thead-dark">
                             <tr>
                                   <th scope="col">N Item</th>
                                   <th scope="col">Localidade</th>
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
                        <td><input type="text" name="num-item" placeholder="01"></td>
                        <td><input type="text" name="local" placeholder="São Paulo"></td>
                        <td><input type="text" name="qtd" placeholder=""></td>
                        <td><input type="text" name="custo-unit" placeholder="R$"></td>
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
              <?= Html::submitButton('Salvar alterações', ['Item/alter'], ['class' => 'btn btn-success', 'name' => 'alter-button']) ?>
            </div>
        </form>
        <br><br>
    </div>
