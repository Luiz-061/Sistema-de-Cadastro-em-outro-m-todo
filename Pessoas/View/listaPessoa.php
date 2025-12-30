<?php 


$pessoas = PessoaModel::select();

?>
 <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

     .<div
        class="container-sm"
     >
          <div
        class="table-responsive"
       >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
               
                <tr>
                    <th>Nome</th>
                    <th>Profissão</th>
                    <th>Data e Hora</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <?php foreach($pessoas as $pss):?>
            <tbody class="table-group-divider">
                <tr
                    class="table"
                >
                    <td scope="row"><?= $pss['nome_pessoa'] ?></td>
                    <td><?= $pss['profissao'] ?></td>
                    <td><?= $pss['data']; ?></td>
                    <td><a href="View/formAtualizar.php?id=<?= $pss['id_pessoa'] ?>" style="transition: 0.8s;" class="btn btn-warning">Editar</a><a onclick="return confirmar()" href="./acao.php?acao=excluir&id=<?= $pss['id_pessoa'] ?>" style="transition: 0.8s;" class="btn btn-danger">Excluir</a></td>
                </tr>
                <?php endforeach?>
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
       </div>
     </div>
     <script>
        function confirmar(){
          return  confirm('Tem certeza que deseja excluir?');
        }
     </script>
     
       