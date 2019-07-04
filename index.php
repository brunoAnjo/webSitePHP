<?php
require_once 'arquivos/php/funcao.php'; //Arquivo de proteção e links de paginas 
require_once 'arquivos/php/logando/class/conexao.class.php';

$con = new conexao();
$estacia = $con->getCon();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="Content-Language" content="pt-br">

        <title>Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="UTF-8">

        <?php
        loadCSS('style');
        ?>

        <style type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <meta name="generator" content="WordPress 4.9.3" />
        <style type="text/css">
            .GTTabs_divs{
                padding: 4px;	
            }


            .GTTabs_titles{
                display:none;	
            }

            ul.GTTabs
            {
                width: auto;
                height: auto;
                margin: 0px 0px 1em !important;
                padding: 0.2em 1em 0.2em 20px !important;
                border-bottom: 1px solid #CC0000 !important;
                font-size: 14px;
                list-style-type: none !important;
                line-height:normal;
                text-align: left;
                display: block !important;
                background: none;
            }

            ul.GTTabs li
            {	
                display: inline !important;	font-size: 14px;
                line-height:normal;
                background: none;
                padding: 0px;
                margin:1em 0px 0px 0px;
            }

            ul.GTTabs li:before{
                content: none;	
            }  

            ul.GTTabs li a
            {
                text-decoration: none;
                background: #CC0000;
                border: 1px solid #CC0000  !important;
                padding: 0.2em 0.4em !important;
                color: #FFFFFF !important;
                outline:none;	
                cursor: pointer;

            }

            ul.GTTabs li.GTTabs_curr a{
                border-bottom: 1px solid #CC0000 !important;
                background: #CC0000;
                color: #FFFFFF !important;
                text-decoration: none;

            }

            ul.GTTabs li a:hover
            {
                color: #FFFFFF !important;
                background: #FF0000;
                text-decoration: none;

            }

            .GTTabsNavigation{
                display: block !important;
                overflow:hidden;
            }

            .GTTabs_nav_next{
                float:right;
            }

            .GTTabs_nav_prev{
                float:left;
            }

            @media print {
                .GTTabs {display:none;border:0 none;}
                .GTTabs li a {display:none;border:0 none;}
                .GTTabs li.GTTabs_curr a {display:none;border:0 none;}
                .GTTabs_titles{display:block !important;border-bottom:1px solid;}
                .GTTabs_divs {display:block !important;}
            }
        </style>

    </head>

    <body>
        <div class="cAlign">

            <div id="header">
                <div id="logo">
                    <img src="imagens/conteudos/baner.png">
                </div>

                <div id="search">
                    <div id="searchBox">
                        <form action="" method="get" name="searchForm" id="searchForm">
                            <div class="searchBox2">
                                <input name="buscar" value="" tabindex="1" type="text">
                            </div>
                            <div class="searchButton">
                                <button type="submit" >Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="abrirmenu">MENU</div>
            <div id="menuMobile">
                <ul>
                    <li><a href="<?php echo URL . 'index.php' ?>" title="Pagina Inicial">Home</a>
                    <li><a href="<?php echo URL . 'arquivos/animes.php' ?>" title="Animes">Animes</a>
                    <li><a href="<?php echo URL . 'arquivos/adicionados.php' ?>" title="Episodios Adicionados Recentimente">Adicionados</a>
                    <li><a href="<?php echo URL . 'arquivos/maisvistos.php' ?>" title="Mais Vizualizados">Mais Vistos</a>
                </ul>

            </div>
            <div id="mainNavigation">
                <ul id="topNavigation">
                    <li><a href="<?php echo URL . 'index.php' ?>" title="Pagina Inicial">Home</a>
                    <li><a href="<?php echo URL . 'arquivos/animes.php' ?>" title="Animes">Animes</a>
                    <li><a href="<?php echo URL . 'arquivos/adicionados.php' ?>" title="Episodios Adicionados Recentimente">Adicionados</a>
                    <li><a href="<?php echo URL . 'arquivos/maisvistos.php' ?>" title="Mais Vizualizados">Mais Vistos</a>

                </ul>
            </div>
            
                <!-- MAIS VISTOS -->
                <div id="page">
                    <div id="mainContent">
                        <!-- main Content Boxes -->
                        <div id="viewBox">

                        </div>
                        <!-- LANÇAMENTOS -->
                        <div class="mainBox">
                            <div class="mainBoxTitle">
                                <h2 class="mainBoxHeader">LANÇAMENTOS DE ANIMES DA SEMANA</h2>
                                <span class="moreLink"><a href="">TODOS</a></span>
                            </div>
                            <div>
                                <ul>
                                <?php
                                    $selecionar = mysqli_query($estacia, "SELECT * FROM conteudo WHERE tipo='anime'"
                                            . "ORDER BY idconteudo desc LIMIT 0, 10");
                                    $conta = mysqli_num_rows($selecionar);
                                    if ($conta > 0) {
                                        while ($ln = mysqli_fetch_array($selecionar)) {
                                                echo '<li class="mainList">  
                                                        <div class="videoThumb" style="height:100px;">
                                                            <a href="arquivos/assitir.php?id='.$ln['idconteudo'].'">
                                                            <img src="imagens/conteudos/'.$ln['imagem']. '" 
                                                                style="border-radius:10px; height:100px;">
                                                            </a>
                                                            <div class="videoTitle">
                                                            <a href="">' . $ln['nome']. " " . $ln['eps'].'</a>
                                                            </div>
                                                        </div>
                                                </li>';

                                            }
                                    }
                                 ?>
                                </ul>
                                    <!-- Fim da lista de Animes -->
                              </div>
                        </div>
                        
                        <div class="mainBox">
                            <div class="mainBoxTitle">
                                <h2 class="mainBoxHeader">Mais Vistos</h2>
                                <span class="moreLink"><a href="">TODOS</a></span>
                            </div>
                            <div>
                                <ul>
                                <?php
                                    $selecionar1 = mysqli_query($estacia, "SELECT * FROM conteudo WHERE tipo='anime' "
                                            . "ORDER BY idconteudo desc LIMIT 0, 10");
                                    $conta1 = mysqli_num_rows($selecionar1);
                                    if ($conta1 > 0) {
                                        while ($ln = mysqli_fetch_array($selecionar1)) {
                                            if($ln['views'] > 0){
                                            echo '<li class="mainList">  
                                                    <div class="videoThumb" style="height:100px;">
                                                        <a href="arquivos/assitir.php?id='.$ln['idconteudo'].'">
                                                        <img src="imagens/conteudos/'.$ln['imagem']. '" 
                                                            style="border-radius:10px; height:100px;">
                                                        </a>
                                                        <div class="videoTitle">
                                                        <a href="">' . $ln['nome']. " " . $ln['eps'].'</a>
                                                        </div>
                                                    </div>
                                                  </li>';
                                            }
                                        
                                        }
                                    }
                                 ?>
                                </ul>
                                    <!-- Fim da lista de Animes -->
                              </div>
                        </div>

                    <div id="footer">
                        <ul>
                            <li><a href="#">Quem Somos</a><span class="textF">|</span></li>
                            <li><a href="#">Política de Privacidade</a><span class="textF">|</span></li>
                            <li><a href="#"></a></li>
                        </ul><br><br>
                        <p class="textFooter">Copyright &copy; 20018<a href="#">BrTube!</a></p>
                        </br>
                    </div>
                </div>
            </div>
            <script src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/js.js"></script>
        </div>    
    </body>
</html>    