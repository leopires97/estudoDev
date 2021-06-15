<?php session_start(); ?>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PDV Web</title>
        <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">PDV Web</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></bar>
                        <span class="icon-bar"></bar>
                    </button>
                    <a class="navbar-brand" href="#">PDV Web</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    
                    <?php
                        if(isset($_SESSION['id_usuario'])){
                            echo "<ul class='nav navbar-nav'><li><a href='#'> Seus links aqui.</a></li></ul>";
                            echo "<label id='id_usuario' hidden='hidden'>".$_SESSION['id_usuario']."</label>";
                            echo "<div class='navbar-form navbar-right'>
                                    <div class='form-group'>
                                        <label for='usuarioLogado' style='color:#FFFFF'> Olá ".$_SESSION['nome'] ."!</label>
                                        <a class='btn btn-success' href='/pdv/logout'>Sair</a>
                                    </div>
                                </div>";
                        }else{
                            echo "<form class='navbar-form navbar-right' method='post' action='/pdv/autenticarUsuario'>
                                <div class=''form-group''>
                                    <input name='login' type='text' placeholder='login' class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <input name='senha' type='password' placeholder='senha' class='form-control'>
                                </div>
                                    <button type='submit' class='btn btn-success'>Logar</button>
                                </form>";
                        }
                    ?>
                </div>
            </div>
        </nav>
    </body>
</html>