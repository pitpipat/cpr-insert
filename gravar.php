<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<?php
  $conexao = mysql_connect('localhost','root','');
  mysql_select_db('cpr_db',$conexao);
  mysql_query("SET NAMES UTF8");
   
  $name =$_GET['name'];
  $sername =$_GET['sername'];
  $age =$_GET['age'];
  $sex =$_GET['sex'];
  $tel =$_GET['tel'];
  $email =$_GET['email'];
	
  $sql = "insert into data (name, sername, age, sex, tel, email) values ('$name','$sername','$age','$sex','$tel','$email')";
   
  $resultado = mysql_query($sql) or die ("Erro: " . mysql_error());
  
  if($resultado)
		  echo "ok";
   else
          echo "0";
?>
