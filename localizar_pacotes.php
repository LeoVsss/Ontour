<?php
include ("conexao.php");
$mod = $_POST ['pesquisa'];

$sql = "select * from viagens where cidade like '%$mod%'";
$query = mysqli_query($conn, $sql) or die ("Erro");





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

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   
  
    <link rel="stylesheet" href="style3.css">
    
  

<link rel="stylesheet" href="npm i bootstrap-icons">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  

  <title>OnTour</title>


</head>


<div class="body4">


<header>
  <div class="nav">
  <input type ="checkbox" name ="" id ="chk1">
  <div class="logo"><h1>OnTour</h1></div>
      <div class="search-box">

      <form action="localizar_pacotes.php" method="post" class="form-group" enctype="multipart/form-data">
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
          <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
      </ul>
    </div>
</header>



<div class= "texto-resultado" > Resultado encontrado:</div> 



  <form  method="POST" enctype="multipart/form-data">
                <?php while ($linha=mysqli_fetch_assoc($query)) { ?>
                  

<div class="container d-flex">
                  
<div class="col-3">
        <div class="card7 ">
        <a href="./cidades nacionais/Curitiba.html">
          <div class="card-content">
      
            <div class="card-body10 ">

              <h5 class="card-title" > <input type="label" class="texto"  value="<?php echo $linha['cidade']?>" name="cidade"> </h5>                

   
              
              <?php
					$image=base64_encode($linha['imagem']);

					$src = 'data: ' . ';base64,' . $image;

					echo '<img src="' . $src . '"; style=" width: 255px; height: 210px; margin-bottom:10px; ';


			    	?>

              <div class="card-body">
                
                <h6 class="card-text" > <input type="label" class="texto2"  value="<?php echo $linha['disponibilidade']?>" name="disponibilidade"></h6>
              
                <h6 class="card-text">
                    <li>Hospedagem</li>
                    <li>Tour</li>
                    <li> Saindo de São Paulo </li>
                    </h6>

              

                <div class="content d-flex">
                  <div class="card-text4"> R$ </div> <div class="card-text3"> <input type="label" class="texto3"  value="<?php echo $linha['preco']?>" name="preco"> </div>
            </div>
              
              <div class="texto4"> <h6 class=" text-muted  ">Em parcelas de até 12x <h6></div>
            </div>
            </div>
          
          </div>
        </div>
       </div> 
      </a>
       </div>   
       
              

            </form>



            

            <script>
				function mostraimagem(){
				var vimagem = document.querySelector('input[name=imagem]').files[0];
				var vmostrar = document.querySelector('img');

				var vaux = new FileReader();

				vaux.onloadend = function()
			{
				vmostrar.src = vaux.result;
			}
							
			if(vimagem){
					vaux.readAsDataURL(vimagem);	
			} else {
						vmostrar.src = "";
					}
			}
			</script>

                    
        
      
        <?php } ?>



    </div>
    </body>
</html>