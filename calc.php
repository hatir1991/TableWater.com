<?php session_start();

require_once('Function.php');
if(empty($_SESSION['login']))
{
	header('Location:signIn.php');
	exit;
}
?>
<!DOCTYPE HTML>
<html>
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
input{
	width:80%;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
	<body>
	<h1><a href="index.php">На главную</a></h1>
		<?php
		
		if(!empty($_POST['submit'])){
			
			
			 $result=calcM($_POST['datecalc1'],$_POST['datecalc2'],$_SESSION['login']);
	  // print_r(  $result);
	   echo '<br/>';
		
			
			}
		?>
	<form action="calc.php" method="POST">
	<table class="table" >
	<tr>
	
	<td><label for="datecalc1">от</label></td>
	</tr>
	<tr>
	<td><input type="date" name="datecalc1" id="datecalc1"></td>
	</tr>
	<tr>
	<td><label for="datecalc2">До</label></td>
	</tr>
	<tr>
	<td><input type="date" name="datecalc2" id="datecalc2"></td>
	</tr>
	<tr>
	<td><input type="submit" name="submit" value="Посчитать"></td>
		
	</tr>
		
		</table>
	</form>	
	<?php
	echo '<h1>';
	echo $result[0]['suma'];
	echo ('Метров');
	echo '</h1>';
	?>
	</body>
</html>


