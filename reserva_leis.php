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
                <h2 class="breadcrumb text-success">
                    <a href="index.php">
                        <button class="btn btn-danger">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </button>
                    </a>
                    Reserva
                </h2>
                
                <div class="thumbnail">
                <p style="font-size: x-large;" >
                    A reserva deve ser feita com no minimo 48 horas de antecedência e no maximo 90 dias. Um mesmo cpf só pode reservar uma unica vez por dia.
                </p>
                    <div class="alert alert-info" role="alert">
                        <form action="reserva.php">
                        <input type="checkbox" required> concordo as regras descritas                    
                        <hr>
                        <div class="text-right">
                        <a type="submit" href="reserva.php"><button class="btn btn-success">continue</button></a>  
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>