<?php 
    include 'conn/connect.php';
    $idproduto = $_GET['id_produto'];
    $lista = $conn->query("select * from vw_tbprodutos where id_produto = '$idproduto';");
    $row_destaque = $lista->fetch_assoc();
    $num_linhas = $lista->num_rows;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Produto</title>
</head>
<body class="fundofixo">
<?php include 'menu_publico.php'; ?>
<div class="container">
    <!-- mostrar se a consulta retornar produtos -->
    <?php if($num_linhas >0){?>
        <h2 class="breadcrumb alert-danger">
                <a href="javascript:window.history.go(-1)" class="btn btn-danger">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
            <strong>Produto</strong>
        </h2>

        <div class="row">

            <div class="col-sm-6 col-md-12">
                <div class="thumbnail">
                    <a href="produto_detalhes.php?id_produto=<?php echo $row_destaque['id_produto'];?>">
                    <img src="images/<?php echo $row_destaque['imagem_produto'];?>" class="img-responsive img-rounded"></a>
                    </a>  
                    <div class="caption text-right">
                        <h3 class="text-danger">
                            <strong><?php echo $row_destaque['descri_produto'];?></strong>
                        </h3>
                        <p class="text-warning">
                            <strong><?php echo $row_destaque['rotulo_tipo'];?></strong>
                        </p>
                        <p class="text-left">
                            <?php echo mb_strimwidth($row_destaque['resumo_produto'],0,42,'...');?>
                        </p>
                        <p>
                            <button class="btn btn-defaut disable" role="button" style="cursor:default ;">
                                <?php echo "R$".number_format($row_destaque['valor_produto'],2,',','.',);?>
                            </button>
                            <a href="produto_detalhes.php?id_produto=<?php echo $row_destaque['id_produto'];?>">
                                <span class="hidden-xs">
                                    Saiba mais...
                                </span>
                                <span class="hidden-xs glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </a>
                        </p>
                    </div>                     
                </div>
            </div>

        </div>
    <?php }?>
</div>
            


    
</body>
    <!-- link para bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).on('ready',function(){
        $(".regular").slick({
          dots:true,
          Infinity: true,
          slidesToShow: 3,
          slidesToScroll: 3 
        });
      });
    </script>
    <script type="text/javascript" src="https//cdn.jsdelivr.net/npm/sick/slick.min.js"></script>
</html>