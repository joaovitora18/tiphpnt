<?php 
include 'acesso_com.php'; include '../conn/connect.php';

if($_POST){
    $id = $_POST['id'];
    $mesa = $_POST['mesa'];
    
    $updateSql = "update reserva
                    set mesa = '$mesa',
                    status = 'concluida'
                            where id = $id;";

    $resultado = $conn->query($updateSql);
    if($resultado){
        header('location: reservas_lista.php');
    }
}

if($_GET){
    $id_form = $_GET['id'];
}else{
    $id_form = 0;
}

$lista = $conn->query("select * from reserva where id = $id_form");
$row = $lista->fetch_assoc();
$numRows = $lista->num_rows;

    // selecionar os dados de chave estrangeira (lista de tipos de produtos)
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>
<body>
    <?php include "menu_adm.php"?>
    <main class="container">    
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="reservas_lista.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Inserindo Produtos
                </h2>
                <div class="thumbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="concluido.php" method="post" name="form_concluido" enctype="multipart/form-data" id="form_concluido">
                        
                        <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">                            
                        
                            <label for="mesa">Mesa:</label>
                            <div class="input-group">
                            <input type="text" name="mesa" id="mesa" class="form-control" placeholder="Digite a mesa vinculada" maxlength="100" value="<?php echo $row['mesa'] ?>">
                            </div>
                            
                            <hr>
                            
                            <input type="submit" id="concluir" name="concluir" value="concluir" class="btn btn-danger">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
