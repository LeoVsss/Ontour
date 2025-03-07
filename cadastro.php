<?php
include("conexao.php");

$vnome = $_POST['Nome'];
$vusuariow = $_POST['Usuariow'];
$vgenero = $_POST['Genero'];
$vemail = $_POST['Email'];
$vcell = $_POST['Celular'];
$vceps = $_POST['Cep'];
$vendereco = $_POST['Endereco'];
$vbairro = $_POST['Bairro'];
$vcidar = $_POST['Cidade'];
$vestado = $_POST['Estado'];
$vnumeros = $_POST['Numero'];
$vsenhaw = $_POST['SenhaW'];
$vconfimar = $_POST['Confirmar'];




$sql1 = "INSERT INTO contas (nome,usuario,genero,email,celular,cep,endereco,bairro,cidade,estado,numero,senha,confirmar) values('$vnome','$vusuariow','$vgenero','$vemail','$vcell','$vceps','$vendereco','$vbairro','$vcidar','$vestado','$vnumeros','$vsenhaw','$vconfimar')";
$sql2 = "INSERT INTO loginn (usuario,senha) values ('$vusuariow', '$vsenhaw')";


 $query1 = mysqli_query($conn, $sql1) or die ("Erro");


 if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Conta registrada com sucesso') </script>";
	echo " <script> location.href='entrar.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao registrar') </script>";
	echo " <script> location.href='registrar.php' </script>";
}


 $query2 = mysqli_query($conn, $sql2) or die ("Erro");
 
 if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Logado com sucesso') </script>";
	echo " <script> location.href='entrar.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao logar') </script>";
	echo " <script> location.href='registrar.php' </script>";
}
 

?>