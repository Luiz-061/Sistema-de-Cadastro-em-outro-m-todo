<?php
require __DIR__.'/../Model/PessoaModel.php';    
$id = $_GET["id"];
if(isset($id)){
    
$val = PessoaModel::FindById($id);
}else{
    echo "<script>alert('Pessoa não encontrada!');window.location='../index.php'</script>";
}

?>

  <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
     <div class="container">
         <?php session_start();?>
        <main>
       <div class="card text-start" style="width: 24rem;">
     
        <div class="card-body">
            <h4 class="card-title text-center">Atualizar</h4>
            <span class="text-primary"></span>
            <form action="../acao.php?acao=atualizar&id=<?= $id ?>" method="post">
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $val['nome_pessoa'] ?>" placeholder="Digite o nome" autocomplete="off">
                <input type="text" class="form-control mt-2" id="profissao" name="profissao" value="<?= $val['profissao'] ?>" placeholder="Digite a profissao" autocomplete="off">
                <button class="btn btn-outline-primary mt-2" style="transition: 0.7s;">Atualizar</button>
            </form>
        </div>
       </div>
      
</div>
        </main>
     </div>
        
      
    </body>