<?php 
    // include 'admi/acesso_com.php';
    include 'conn/connect.php';

    if($_POST){
        $id_usuario = $_POST['id_usuario'];
        $login = $_POST['login_usuario'];
        $senha = $_POST['senha_usuario'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $insereUsuarios = "INSERT INTO tbusuarios
                        (id_usuario, login_usuario, senha_usuario, nivel_usuario, cpf, email)
                        VALUES
                        ('$id_usuario','$login',md5('$senha'),'comum', $cpf, $email);
                        ";
        $resultado = $conn->query($insereUsuarios);
       
    } 
    // após a gravação bem sucedida do produto, volta (atualiza) lista
        if(mysqli_insert_id($conn)){
            header('location: admin/login.php');
        }

        $consulta_fk = "select * from tbusuarios order by nivel_usuario asc";
        $lista_fk = $conn->query($consulta_fk);
        $row_fk = $lista_fk->fetch_assoc();
        $nlinhas = $lista_fk->num_rows;
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
    <?php include "menu_publico.php"?>
    <main class="container">    
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="admin/login.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Registro
                </h2>
                <div class="thumbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="login_comum.php" method="post" name="form_login_comum" enctype="multipart/form-data" id="form_login_comum">
                        <label for="login_usuario">Nome:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="login_usuario" id="login_usuario" class="form-control" placeholder="Digite o nome de Usuario" maxlength="100" required>
                            </div>
                            <label for="senha_usuario">Senha:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="senha_usuario" id="senha_usuario" class="form-control" placeholder="Digite a senha" maxlength="100" required>
                            </div>
                            <label for="cpf">CPF:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="CPF" id="CPF" class="form-control" placeholder="Digite o seu CPF" maxlength="100" required>
                            </div>
                            <label for="email">Email:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Digite o seu Email" maxlength="100" required>
                            </div>
                            <hr>
                            <input type="submit" id="enviar" name="enviar" value="Cadastrar" class="btn btn-danger btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
