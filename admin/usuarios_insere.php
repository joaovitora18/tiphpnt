<?php 
    include 'acesso_com.php';
    include '../conn/connect.php';

    if($_POST){
        $id_usuario = $_POST['id_usuario'];
        $login = $_POST['login_usuario'];
        $senha = $_POST['senha_usuario'];
        $nivel = $_POST['nivel_usuario'];
        $insereUsuarios = "INSERT INTO tbusuarios
                        (id_usuario, login_usuario, senha_usuario, nivel_usuario)
                        VALUES
                        ('$id_usuario','$login',md5('$senha'),'$nivel');
                        ";
        $resultado = $conn->query($insereUsuarios);
       
    } 
    // após a gravação bem sucedida do produto, volta (atualiza) lista
        if(mysqli_insert_id($conn)){
            header('location: usuarios_lista.php');
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
    <?php include "menu_adm.php"?>
    <main class="container">    
        <div class="row">
            <div class="col-xs-12 col-sm-offset-2 col-sm-6 col-md-8">
                <h2 class="breadcrumb text-danger">
                    <a href="usuarios_lista.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Inserindo Usuarios
                </h2>
                <div class="thumbnail">
                    <div class="alert alert-danger" role="alert">
                        <form action="usuarios_insere.php" method="post" name="form_usuario_insere" enctype="multipart/form-data" id="form_usuario_insere">
                        <label for="login_usuario">Login:</label>
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
                            <label for="nivel_usuario">Nivel:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                                </span>
                                <select name="nivel_usuario" id="nivel_usuario" class="form-control" required>
                                    
                                        <option value="supervisor">
                                            supervisor
                                        </option>
                                        <option value="comum">
                                            comum
                                        </option>
                                        <option value="atendente">
                                            atendente
                                        </option>
                                        <option value="vendedor">
                                            vendedor
                                        </option>
                                    
                                </select>
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
