<?php
require_once 'php/funcao.php'; //Arquivo de proteção e links de paginas 
require_once 'php/logando/class/conexao.class.php';

$con = new conexao();
$estacia = $con->getCon();
$id = $_GET['id'];
$selecionar = mysqli_query($estacia, "SELECT * FROM conteudo WHERE idconteudo='$id'");
$conta = mysqli_num_rows($selecionar);
if ($conta > 0) {
    while ($ln = mysqli_fetch_array($selecionar)) {
        $video = $ln['video'];
        $nome = $ln['nome'];
        $ep = $ln['eps'];
    }
}
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
                    <img src="../imagens/conteudos/baner.png">
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
                    <li><a href="<?php echo URL . 'arquivos/series.php' ?>" title="Series">Series</a>
                    <li><a href="<?php echo URL . 'arquivos/adicionados.php' ?>" title="Episodios Adicionados Recentimente">Adicionados</a>
                    <li><a href="<?php echo URL . 'arquivos/maisvistos.php' ?>" title="Mais Vizualizados">Mais Vistos</a>
                </ul>

            </div>
            <div id="mainNavigation">
                <ul id="topNavigation">
                    <li><a href="<?php echo URL . 'index.php' ?>" title="Pagina Inicial">Home</a>
                    <li><a href="<?php echo URL . 'arquivos/animes.php' ?>" title="Animes">Animes</a>
                    <li><a href="<?php echo URL . 'arquivos/series.php' ?>" title="Series">Series</a>
                    <li><a href="<?php echo URL . 'arquivos/adicionados.php' ?>" title="Episodios Adicionados Recentimente">Adicionados</a>
                    <li><a href="<?php echo URL . 'arquivos/maisvistos.php' ?>" title="Mais Vizualizados">Mais Vistos</a>

                </ul>
            </div>


            <div id="top">
                <!-- MAIS VISTOS -->
                <div id="page">
                    <div id="mainContent">
                        <!-- main Content Boxes -->
                        <div id="viewBox">

                        </div>
                        <!-- LANÇAMENTOS -->
                        <div class="mainBox">
                            <div class="mainBoxTitle">
                                <h2 class="mainBoxHeader">Assista <?php echo $nome. " " .$ep?></h2>
                            </div>
                            <div>
                                <video src="../videos/<?php echo $video; ?>" width="864" height="435" controls autobuffer ></video>
                                <!-- Fim da lista de Animes -->
                            </div>
                        </div>

                        <!-- FIM LANÇAMENTOS -->
                        <div class="mainBox">
                            <br>

                            <div class="mainBoxTitle">
                                <h2 class="mainBoxHeader"></h2>
                                Comentarios
                            </div>
                            <div>	
                                <ul>
                                    
                <form action="<?php echo URL.'/arquivos/php/insertcomentario.php?acao=assistir'?>" method="POST">
                    &ThinSpace;<img src="../imagens/login/user.jpg" width="40" height="35" alt="user_comente"/>
                <input type="hidden" name="id" value="<?php //echo "$iden"?>" />
                <input type="hidden" name="episodio" value="<?php //echo $ln['idconteudo']?>" />
                <input type="hidden" name="nome" value="Usuario não Cadastrado" />
                <input type="hidden" name="img" value="user_comente.jpeg" />
                <input type="hidden" name="anime" value="<?php //echo "$anime"?>"/> 
                <input type="text" name="comentario" value="" style="width:600px; height:30px; background: black; color: white;"/>
                
                <input type="submit" value="COMENTAR" />
                <hr>
                </form>
                                    <?php
                 $impremir = mysqli_query($estacia, "SELECT * FROM comentario where eps = '$ep' and video = '$video' ORDER BY idcomentario desc");
                 $rows = mysqli_num_rows($impremir);
                 if($rows >0 ){
                     while ($ln = mysqli_fetch_array($impremir)){
                         echo '&nbsp;&nbsp<img src="../../imagens/login/usuarios/'.$ln['img'].'" 
                    width="32" height="40" alt="'.$ln['nome'].'" align="left">'.
                         $ln['nome'] .'<br><font color ="red" style="margin-left:650px;">'.$ln['data'] .'</font>'. '
                             <br>&ThinSpace;'.'&nbsp;&nbsp'.$ln['comentario']."<hr>";
                     }
                 }
                ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Composite Start adskeeper -->
                        <div id="M294619ScriptRootC191164">
                            <!--
                            <script> (function () {
                                var D = new Date(), d = document, b = 'body', ce = 'createElement', ac = 'appendChild', 
                                 st = 'style', ds = 'display', n = 'none', gi = 'getElementById';
                                var i = d[ce]('iframe');
                                i[st][ds] = n;
                                d[gi]("M294619ScriptRootC191164")[ac](i);
                                try {
                                    var iw = i.contentWindow.document;
                                    iw.open();
                                    iw.writeln("<ht" + "ml><bo" + "dy></bo" + "dy></ht" + "ml>");
                                    iw.close();
                                    var c = iw[b];
                                } catch (e) {
                                    var iw = d;
                                    var c = d[gi]("M294619ScriptRootC191164");
                                }
                                var dv = iw[ce]('div');
                                dv.id = "MG_ID";
                                dv[st][ds] = n;
                                dv.innerHTML = 191164;
                                c[ac](dv);
                                var s = iw[ce]('script');
                                s.async = 'async';
                                s.defer = 'defer';
                                s.charset = 'utf-8';
                                s.src = "//jsc.adskeeper.co.uk/a/n/anitube.biz.191164.js?t=" + D.getYear() + D.getMonth() + D.getDate() + D.getHours();
                                c[ac](s);
                            })();
                            </script> -->
                        </div> 

                        <br>
                        <!-- End Main Box -->
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