<?php ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="fundofixo">
    <div class="row panel-footer fundo-rodape">
        <!-- area de localização -->
            <div class="col-sm-6 col-md-4">
                <div class="panel-footer" style="background:none">
                    <img src="images/logo-pequeno.png" alt="logo-brasastor">
                    <br>
                    <i><strong> O melhor churrasco da zona leste</strong></i>
                    <address>
                        <i>Avenida Itaquera,8266 - Itaquera - São Paulo - SP - CEP 08295000</i>
                        <br>
                        <span class="glyphicon glyphicon-phone-alt"></span>
                        &nbsp;(11) 2185-9200
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>
                        &nbsp;
                        <a href="mailto:contato@brasastor.com.br?subject=Contato de Site&cc=jvacs2019@gmail.com">
                            contato@brasastor.com.br
                        </a>
                    </address>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17400.79757160424!2d-46.45261828913687!3d-23.53008980650854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce643b7eeaac3b%3A0xb2bce87d6e2df71a!2sD&#39;av%C3%B3%20Hiper!5e0!3m2!1spt-BR!2sbr!4v1674235882090!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        <!-- fim da area de localização -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer">
                <h4>Links</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="index.php#home" class="text-danger">
                            <span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#destaques" class="text-danger">
                            <span class="glyphicon glyphicon-ok-sign" aria-hidden="true">&nbsp;Destaques</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#produtos" class="text-danger">
                            <span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp;Produtos</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#contato" class="text-danger">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;Contato</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin/index.php"class="text-danger">
                            <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Administração</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- area de contatos -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer" style="background: none;">
                <h4>Contato</h4>
                <form action="rodape_contato_envia.php" name="form_contato" id="form_contato">
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="text" name="nome_contato" placeholder="digite seu nome" aria-describedby="basic_addon1" class="form-control" required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon2">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="text" name="email_contato" placeholder="digite seu email" aria-describedby="basic_addon2" class="form-control" required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon3">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </span>
                            <textarea name="comentario_contato" cols="30" rows="5" placeholder="digite seu comentario" aria-describedby="basic_addon2" class="form-control" required></textarea>
                        </span>
                    </p>
                    <p>
                        <button class="btn btn-danger btn-block" aria-label="enviar" role="button">
                            Enviar
                            <span class="glyphicon glyphicon-send"></span>
                        </button>
                    </p>
                </form>

            </div>
        </div>
        <div class="col-sm-12">
            <div class="panel-footer" style="background: none;">
                <h6 class="text-danger text-center">
                    Desenvolvido por Novos Ares&trade; 2023
                    <br>
                    <a href="http://localhost/NovosAres/" target="_blank">NovosAres</a>
                </h6>
            </div>
        </div>
    </div>
</body>
</html>