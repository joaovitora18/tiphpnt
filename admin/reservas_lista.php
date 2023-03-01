<?php 
include 'acesso_com.php';
include '../conn/connect.php';
$lista = $conn->query("select * from reserva order by id ");
$row = $lista->fetch_assoc();
$rows = $lista->num_rows;


if(isset($_GET['id'])){
   $lista = $conn->query("update reserva set status = 'recusada' where id = ".$_GET['id'].";");
   header('location: reservas_lista.php');
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva - Lista</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body class="fundofixo"> 
    <?php include "menu_adm.php"; ?>
    <main class="container">
        <h2 class="breadcrumb alert-danger" >Lista de Reservas </h2>
        <table class="table table-hover table-condensed tb-opacidade bg-danger"> 
            <thead>
                <th class="hidden">ID</th>
                <th>NOME</th>
                <th>DATA</th>
                <th>STATUS</th>
                <th>MESA</th>
                <th>MODIFICAR</th>
            </thead>
            
            <tbody> <!-- início corpo da tabela -->
                	<!-- início estrutura repetição -->
                    <?php do{?>
                    <tr>
                        <td class="hidden">
                            <?php echo $row['id'];?>
                        </td>

                        <td>
                            <?php echo $row['nome'];?>
                            <span class="visible-xs"></span>
                            <span class="hidden-xs"></span>
                        </td>
                        <td>
                            <?php echo $row['data'];?>
                        </td>
                        
                           <td class="<?php echo $row['status'] == 'recusada'? 'text-danger' : '';?>">
                           <?php if($row['status'] != ''){ 
                                echo $row['status'];
                            }else{
                                echo 'em andamento';
                            };
                            
                            ?>
                            </td>
                           <td>
                            <?php if($row['mesa'] != ''){ 
                                echo $row['mesa'];
                            }else{
                                echo '-';
                            };
                            
                            ?>
                           </td>
                        <td >
                            <a href="reservas_lista.php?id=<?php echo $row['id'];?>" role="button" class="btn btn-warning btn-block btn-xs"> 
                                <span class="glyphicon glyphicon-refresh"></span>
                                <span class="hidden-xs">NEGAR</span> 
                                                            
                            </a>
                            <a href="concluido.php?id=<?php echo $row['id'];?>" role="button" class="btn btn-warning btn-block btn-xs"> 
                                <span class="glyphicon glyphicon-refresh"></span>
                                <span class="hidden-xs">CONCLUIR</span>                              
                                                    
                            </a>
                            <a href="informacao.php?id=<?php echo $row['id'];?>" role="button" class="btn btn-warning btn-block btn-xs"> 
                                <span class="glyphicon glyphicon-refresh"></span>
                                <span class="hidden-xs">INFORMAÇÕES</span>                              
                                                    
                            </a>


                        </td>
                    </tr>
                    <?php }while($row = $lista->fetch_assoc());?>
            </tbody><!-- final corpo da tabela -->
        </table>
    </main>
    <!-- inicio do modal para excluir... -->
    <div class="modal fade" id="modalEdit" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    Deseja mesmo excluir o tipo?
                    <h4><span class="nome text-danger"></span></h4>
                </div>
                <div class="modal-footer">
                    <a href="#" type="button" class="btn btn-danger delete-yes">
                        Confirmar
                    </a>
                    <button class="btn btn-success" data-dismiss="modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.delete').on('click',function(){
        var nome = $(this).data('nome'); //busca o nome com a descrição (data-nome)
        var id = $(this).data('id'); // busca o id (data-id)
        //console.log(id + ' - ' + nome); //exibe no console
        $('span.nome').text(nome); // insere o nome do item na confirmação
        $('a.delete-yes').attr('href','tipos_excluir.php?id_tipo='+id); //chama o arquivo php para excluir o produto
        $('#modalEdit').modal('show'); // chamar o modal
    });
</script>

</html>