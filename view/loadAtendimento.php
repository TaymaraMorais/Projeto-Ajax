<?php
session_start();
require "../controller/PetsController.php";

$atendimentosController = new PetsController();
$atendimentos = $atendimentosController->exibirConsultas();
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$cpf = $_SESSION['cpf'];
$usuario = $_SESSION['login'];
?>
<div class="table-responsive">
            <table class="table" id="tabela">
              <thead class=" text-primary">

                <th>
                  Dono
                </th>
                <th>
                  Pet
                </th>

                <th>
                  Idade
                </th>

                 <th>
                  Espécie
                </th>

                <th>
                  Sintomas
                </th>



                <th>
                  Ação
                </th>
              </thead>
              <tbody>
                <?php
                if ($atendimentos != "") {
                  foreach ($atendimentos as $atendimento) {
                    ?>
                    <tr>

                      <td>
                        <?php echo $atendimento['dono'] ?>
                      </td>
                      <td>
                         <?php echo $atendimento['nome'] ?>
                      </td>

                      <td>
                         <?php echo $atendimento['idade'] ?>
                      </td>

                      <td>
                         <?php echo $atendimento['categoria'] ?>
                      </td>

                      <td>
                         <?php echo $atendimento['sintomas'] ?>
                      </td>

                      <td>
                          <form action="../controller/PetsController.php" method="POST">
                          <input type="hidden" name="novo" id="novo" value="<?php echo $_SESSION['nome'];?>">
                          <input type="hidden" name="idPet" id="idPet" value="<?php echo $atendimento['id'];?>">
                          <input type="hidden" name="action" id="action" value="confirmar">
                        <button type="submit" class="btn btn-primary" id="confirmar"> Atender</button> </form>
                      </td>

                    </tr>

                  <?php }
              } ?>

              </tbody>
            </table>
          </div>