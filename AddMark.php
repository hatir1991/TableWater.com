<?php 
session_start();

require_once('Function.php');
if(empty($_SESSION['login']))
{
	header('Location:signIn.php');
	exit;
}

echo $_SESSION['login'];
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
<title>добавить маркер</title>
</head>
<body>

<?php if(!empty($_POST['save'])){

$status=AddDataMarkers($_POST['lat'],$_POST['lng'],$_POST['name']);
if($status==1)
{
	echo ('Данные успешно добавлены');
}	
else
{
	echo ('Ошибка добавления');
}
}
	?>
	
	<form method='post' action='AddMark.php' >
<table class="table">
<div>
<a href="index.php" style="font-size:30px" >На главную</a>
</div>
<div align="center" style="text-align:center;" >
 Добавление Маркера
</div>
<hr/>
<tr>
<td><label for='lat'>Широта</label></td>
<td><input type='text' name='lat' id='lat'  placeholder="Широта"  ></td>
</tr>

<tr>
<td><label for='lng'>Долгота<label></td>
<td><input type='text' name='lng' id='lng'  placeholder="Долгота"></td>
</tr>

<tr>
<td><label for='name'>Информация</label></td>
<td><input type='text' name='name' id='name'  placeholder="Информация"  ></td>
</tr>


</table>
<br/>
<div align="center" >
<input align="right" type='submit' name='save' value='Saved'>
</div>
</form>
</body>
</html>