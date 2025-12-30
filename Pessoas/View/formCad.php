<!doctype html>
<html lang="pt-br">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
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
       <div class="card text-start" style="width: 24rem; margin-left: 350px">
     
        <div class="card-body">
            <h4 class="card-title text-center">Title</h4>
            <span class="text-primary"><?= $_SESSION["msg"] ?? '' ?></span>
            <form action="acao.php?acao=cadastrar" method="post">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" autocomplete="off">
                <input type="text" class="form-control mt-2" id="profissao" name="profissao" placeholder="Digite a profissao" autocomplete="off">
                <button class="btn btn-outline-primary mt-2" style="transition: 0.7s;">Criar</button>
            </form>
        </div>
       </div>
      <?php if(isset($_SESSION["msg"])): ?>
       <?php unset($_SESSION["msg"]); else: endif;?>
</div>
        </main>
     </div>
        
      
    </body>
</html>



