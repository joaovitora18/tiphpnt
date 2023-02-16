<?php 
    include 'conn/connect.php';

    if($_POST){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $data = $_POST['data'];
        $insereReserva = "INSERT INTO reserva
                        (id, nome, cpf, email, data)
                        VALUES
                        ('$id','$nome', '$cpf', '$email', '$data');                        
                        ";
        $resultado = $conn->query($insereReserva);
    }
        if(mysqli_insert_id($conn)){
            header('location: index.php');
        }
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
<body class="fundofixo">
    <?php include "menu_publico.php"?>
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="reserva_leis.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Concluindo Reserva 
                </h2>
                <div class="thumbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="reserva.php" method="post" name="form_reserva" enctype="multipart/form-data" id="form_reserva">
                            <label for="nome">Nome:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o seu nome completo" maxlength="100" required>
                                </div>
                                <label for="cpf">CPF:</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                    </span>
                                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Informe seu CPF" maxlength="100" required>
                                </div>
                                <label for="email">Email:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Digite o seu email" maxlength="100" required>
                            </div>
                            <label for="data">Data da reserva:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                </span>
                                <input type="date" name="data" id="data" class="form-control" placeholder="Digite a senha" maxlength="100" required>
                            </div>
                            
                            <hr>
                            <input type="submit" id="enviar" name="enviar" value="Cadastrar" class="btn btn-danger btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>