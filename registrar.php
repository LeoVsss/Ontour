<?php
include("conexao.php");

$sql="Select * from contas";

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

   
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />




    <script src="main.js" type="module" defer></script>
     <link rel="stylesheet" href="style2.css">
  

  <title>OnTour</title>


</head>


<body class="body5">
  
  <header>
    
    <input type ="checkbox" name ="" id ="chk1">
    <div class="logo"><h1>OnTour</h1></div>
        <div class="search-box">
            <form>
                <input type ="text" name ="pesquisa" id ="buscar" placeholder="Buscar">
                <button type ="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>
  
          <div class="icons-header">
            <li><a href="index.html">Início</a></li>
            <li><a href="pacotes.html">Pacotes</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li> <a href="entrar.html">Entrar</a> </li>
            </div>
  
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
  </header>

<br><br>

<div class="container-lg">
    <div class="title">Registrar</div>
    <div class="content">
      
<form action="cadastro.php" method="post" class="form-group" enctype="multipart/form-data">


        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome Completo</span>
            <input type="text" name="Nome" placeholder="Coloque seu nome" required>
          </div>

          <div class="input-box">
            <span class="details">Usuário</span>
            <input type="text" name="Usuariow" placeholder="Crie seu usuário" required>
          </div>

          
          <div class="input-box">
            <span class="details">Gênero</span>
            <input type="text" name="Genero" placeholder="Coloque seu gênero" required>
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="Email" placeholder="Coloque seu email" required>
          </div>

          <div class="input-box">
            <span class="details">Número de celular</span>
            <input type="text" name="Celular" placeholder="Coloque seu número" required>
          </div>

          <div class="input-box">
            <span class="details">CEP</span>
            <input type="text" name="Cep" id="cep" placeholder="Coloque seu CEP" required>
          </div>

          
          <div class="input-box">
            <span class="details">Endereço</span>
            <input type="text" name="Endereco"id="endereco" placeholder="Coloque seu endereço" required>
          </div>

          <div class="input-box">
            <span class="details">Bairro</span>
            <input type="text" name="Bairro" id="bairro" placeholder="Coloque seu bairro" required>
          </div>

          <div class="input-box">
            <span class="details">Cidade</span>
            <input type="text" name="Cidade" id="cidade" placeholder="Coloque sua cidade" required>
          </div>

          <div class="input-box">
            <span class="details">Estado</span>
            <input type="text" name="Estado" id="estado" placeholder="Coloque seu estado" required>
          </div>
          
          
          <div class="input-box">
            <span class="details">Número residencial</span>
            <input type="text" name="Numero" placeholder="Coloque o número da sua residência" required>
          </div>

          <div class="input-box">
            <span class="details">Senha</span>
            <input type="password" name="SenhaW" placeholder="Coloque sua senha" required>
          </div>

          <div class="input-box">
            <span class="details">Confirmar senha</span>
            <input type="password" name="Confirmar" placeholder="Confirme sua senha" required>
          </div>
        </div> 

        <div class="button">
          <input type="submit" value="Registrar">
        </div>
      </form>


</div>
  </div>


</body>
</html>