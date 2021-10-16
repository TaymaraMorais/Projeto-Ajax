<?php
session_start();
require "../controller/PetsController.php";
$petsController = new PetsController();
$nome = $_SESSION['nome'];
$pets = $petsController->exibirPets($nome);
?>
<div class="table-responsive">
            <table class="table" id="tabela">
              <thead class=" text-primary">

                <th>
                  Nome
                </th>
                <th>
                  Idade
                </th>

                <th>
                  Categoria
                </th>

                

                <th>
                  Ação
                </th>
              </thead>
              <tbody>
              
                <?php
                if ($pets != "") {
                  foreach ($pets as $animais) {
                    ?>
                    <tr>

                      <td>
                        <?php echo $animais['nome'] ?>
                      </td>
                      <td>
                         <?php echo $animais['idade'] ?>
                      </td>

                      <td>
                         <?php echo $animais['categoria'] ?>
                      </td>


                      

                      <td>
                          <form action="editarAnimal.php" method="POST">
                          <input type="hidden" name="novo" id="novo" value="<?php echo $animais['dono'];?>">
                          <input type="hidden" name="idPet" id="idPet" value="<?php echo $animais['id'];?>">
                          <input type="hidden" name="dono" id="dono" value=$nome>
                          <input type="hidden" name="exibir" id="exibir" value="confirmar">
                        <button type="submit" class="btn btn-primary" id="editar"> Editar</button> 
                        
                        </form>
                      </td>

                    </tr>

                  <?php }
              } ?>

              </tbody>
            </table>
          </div>
