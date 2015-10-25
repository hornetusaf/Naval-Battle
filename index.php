<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
if(isset($_POST["jugar"]))
{
	if(is_numeric($_POST["m"]) && is_numeric($_POST["n"]) && $_POST["m"]>4 && $_POST["m"]<21 && $_POST["n"]>4 && $_POST["n"]<21 && $_POST["nombre"]!=NULL)
	{
		$_SESSION["m"]=$_POST["m"];
		$_SESSION["n"]=$_POST["n"];
		$_SESSION["nombre"]=$_POST["nombre"];
		$_SESSION["inicio"]=true;
		header("location:juego.php");		
	}
	else
	{
		echo "Por favor ingrese numeros entre 5 y 20 y asegurese de escribir su nombre \n";	
	}
}
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <p>Tamaño:
    <input name="n" type="text" id="textfield" size="10" />
    X
    <input name="m" type="text" id="textfield2" size="10" />
  </p>
  <p>Nombre:
    <input type="text" name="nombre" id="nombre" />
    <input type="submit" name="jugar" id="jugar" value="Jugar" />
  </p>
</form>
</body>
</html>