<?php
include("conexao.php");
 
$vusuario = $_POST['Usuarioo'];
$vsenha= $_POST['Senhaa'];
$vlocalizou='0';

$sql = "Select * from loginn";

 
$query = mysqli_query($conn, $sql) or die ("Erro");

         

           while($linha = mysqli_fetch_assoc($query)){
               
               if (($vusuario == $linha['usuario']) && ($vsenha == $linha['senha'])) {
                         $vlocalizou='1';
                        
                     }
           }
           
           if ($vlocalizou=='0') {
               echo " <script> window.alert('Acesso negado') </script>";
               echo " <script> location.href='entrar.html' </script>";
           }
           
           if ($vlocalizou=='1') {
               echo " <script> window.alert('Acesso permitido') </script>";
               echo " <script> location.href='entrar.html' </script>";
           }
           ?>
   </form>
</div> 
