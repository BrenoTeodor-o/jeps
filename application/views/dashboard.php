<div class="container">

      <div class="row">
        <h1>Lista de produtos</h1>

        <table class="table table-bordered">
            
            <thead>
                <tr>
                  <th class="text-center">Produto</th>
                  <th class="text-right">Preço</th>
                  <th class="text-center">Açoes</th>
                </tr>
            </thead>

            <?php
                $contador = 0;
                foreach ($produtos as $produto)
                {        
                    echo '<tr>';
                      echo '<td>'.$produto->nome.'</td>'; 
                      echo '<td class="text-right">'.$produto->preco.'</td>'; 
                      echo '<td class="text-center">';
                        echo '<a href="/produtos/editar/'.$produto->id.'" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
                        echo ' <a href="/produtos/apagar/'.$produto->id.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
                        echo ' <a href="/produtos/detalhes/'.$produto->id.'" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>';
                      echo '</td>'; 
                    echo '</tr>';
                $contador++;
                }
            ?>

        </table>

        <div class="row">
          <div class="col-md-12">
            Todal de Registro: <?php echo $contador ?>
          </div>
        </div>

      </div>

    </div><!-- /.container -->
