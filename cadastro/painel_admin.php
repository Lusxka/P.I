<?php

session_start();

if(!isset($_SESSION['admin_logado'])){
    header('Location:login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="./css/stars.css">
    <link rel="stylesheet" href="./css/painel_admin.css">
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <link rel="stylesheet" href="./css/carossel_painel.css" />
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="../img/logoteste.png" alt="Logo">
        </div>
    </div>

    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>

    <h2>Bem vindo, Administrador!</h2>

 

      <div class='cards-wrapper'>
        <div class='cards'>
            <button class='card card1' tabindex="-1">
                <h2>
                    <a href="cadastrar_admin.php">Cadastrar Administrador</a>
                </h2>
            </button>
            <button class='card card2' tabindex="-1">
                <h2>
                    <a href="listar_admin.php">Lista de Administradores</a>
                </h2>
            </button>
            <button class='card card3' tabindex="-1">
                <h2>
                    <a href="cadastrar_produto.php">Cadastrar Produto</a>
                </h2>
            </button> 
            <button class='card card4' tabindex="-1">
                <h2>
                    <a href="listar_produtos.php">Lista de Produtos </a>
                </h2>
            </button>
            <button class='card card5' tabindex="-1">
                <h2>
                    <a href="categoria.php">Cadastrar Categoria</a>
                </h2>
            </button>
        </div>

      <button class="arrow-btn arrow-btn-prev" tabindex="0">
        <svg viewBox="0 0 256 512">
          <path d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z" />
        </svg>
      </button>
      <button class="arrow-btn arrow-btn-next" tabindex="0">
        <svg viewBox="0 0 256 512">
          <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" />
        </svg>
      </button>
    </div>

    <script src="../js/carrossel_painel.js"></script>

  </body>
</html>





