<!DOCTYPE html>
<?php
require_once 'php/funcao.php';
require_once 'php/logando/class/conexao.class.php';
?>
<html>
    <head>
        <title>Portal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="../js/jquery-1.8.3.js"></script> <!--JQUERY-->
        <script type="text/javascript" src="../js/validate.js"></script><!--VALIDATE-->
        
        <?php
        loadCSS('style');
        loadCSS('960');
        ?>
        
    <script type="text/javascript">
        $(document).ready(function() {
                $('#cadastro').validate({
                    rules: {
                        nome: {
                            required: true,
                            minlength: 3
                        },
                        Sobrenome : {
                            required: true,
                            minlength: 3
                        },
                        login : {
                            required: true,
                            minlength: 3
                        },
                        img : {
                            required: true,
                            minlength: 1
                        },
                        
                        email: {
                            required: true,
                            email: true
                        },
                        senha: {
                            required: true,
                            minlength: 8
                        }
                        
                    },
                    messages: {
                        nome: {
                            required: "*campo obrigatório.",
                            minlength: "*o campo deve conter no mínimo 3 caracteres."
                        },
                        
                        sobrenome : {
                            required: "*campo obrigatório.",
                            minlength: "*o campo deve conter no mínimo 3 caracteres."
                        },
                        login : {
                            required: "*campo obrigatório.",
                            minlength: "*o campo deve conter no mínimo 3 caracteres."
                        },
                        img : {
                            required: "*Seleção de img Obrigatoria"
                        },
                        email: {
                            required: "*campo obrigatório.",
                            email: "*insira um email válido."
                        },
                        senha: {
                            required: "*campo obrigatório",
                            minlength: "* Senha deve conter no minimo 8 digitos."
                        }
                    }

                });	
               
            });
    </script>
    </head>

    <body>
        <div id ="corpo">
            <div id="baner">
                <form action="" method="POST">
                    <input type="text" name="buscar" value="" style=" width: 350px; height: 20px; margin-left: 610px;
                       border-color: white; background-color: black; color: white;"/> 
                    <input type="submit" value="BUSCAR" style="margin-left: 06px;"/></form>
                <img src="<?php echo URL.'imagens/conteudos/baner.png'?>"/>
            </div>
            <div id="menucontainer">
                <ul id="menu">
                    <li><a href="<?php echo URL.'index.php'?>" title="Pagina Inicial">Home</a>
                    <li><a href="<?php echo URL.'arquivos/animes.php'?>" title="Animes">Animes</a>
                    <li><a href="<?php echo URL.'arquivos/series.php'?>" title="Series">Series</a>
                    <li><a href="<?php echo URL.'arquivosadicionados.php'?>" title="Episodios Adicionados Recentimente">Adicionados</a>
                    <li><a href="<?php echo URL.'arquivos/maisvistos.php'?>" title="Mais Vizualizados">Mais Vistos</a>
                </ul>
            </div>
            <!--
            -->
            <div id="animes" class="grid_16">
                <center><h2>CADASTRO DE USUARIOS
                        </h2><br><br>
                <form id="cadastro" action="php/cadastrando.php" method="POST" enctype="multipart/form-data">
                <h2>
                Nome* : <input type="text" name="nome" value="" style="margin-left: 70px; width: 360px; height: 20px;"/><br>
                Sobrenome* : <input type="text" name="sobrenome" value="" style="margin-left: 15px; width: 360px;height: 20px; margin-top: 10px;"/><br>
                Imagem* : <input type="file" name="img" value="" /><br>
                E-mail* : <input type="text" name="email" value="" style="margin-left: 64px; width: 360px; height: 20px; margin-top: 10px;"/><br>
                Login* : <input type="text" name="login" value="" style="margin-left: 72px; width: 360px; height: 20px; margin-top: 10px;"/><br>
                Data de Nascimento* : <input type="date" name="data" value="" style="margin-left: 72px; width: 360px; height: 20px; margin-top: 10px;"/><br>
                Senha* : <input type="text" name="senha" value="" style="margin-left: 72px; width: 360px;  height: 20px; margin-top: 10px;"/><br>
                <input type="submit" value="Cadastrar-se" name="enviar" /> <input type="reset" value="Limpar Dados" />
                </h2>
                </form> 
               </center>
            </div>
        </div>
    </body>
</html>
