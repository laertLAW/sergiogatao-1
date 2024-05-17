<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
    include "conexao.php";
    $pesquisa=$_POST['busca'] ?? '';
    $sql = "SELECT * FROM usuario WHERE nome LIKE'%$pesquisa%' ";
    $dados = mysqli_query($conexao,$sql);
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> Pesquisar</h1>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        </form>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>