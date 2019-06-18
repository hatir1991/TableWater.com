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
<title>Добавить</title>
</head>
<body>
<?php

if(!empty($_POST['save'])){
	
	$status=addData($_POST['adrress'],$_POST['longAll'],$_POST['features'],$_POST['nuances'],$_POST['cut'],$_POST['date'],$_POST['person'],$_SESSION['login']);
if($status==1)
{
	echo ('Данные успешно  добавленны');
}	
else
{
	echo ('Ошибка добавления ');
}

	//updateToId($_SESSION['id'],$_POST['adrress'],$_POST['longAll'],$_POST['features'],$_POST['nuances'],$_POST['cut'],$_POST['date'],$_POST['person']);
}
?>

<form method='post' action='Add.php' >
<table class="table">
<div>
<a href="index.php" style="font-size:30px" >На главную</a>
</div>
<div align="center" style="text-align:center;" >
 Добавление данных
</div>
<hr/>
<tr>
<td><label for='adrress'>Адрес</label></td>
<td><input type='text' name='adrress' id='adrress'  placeholder="Адрес"  ></td>
</tr>

<td><label for='longAll'> Метраж</label></td>
<td><input type='text' name='longAll' id='longAll' placeholder='Только цыфры'   pattern='[0-9]+'></td>

</tr>
<tr>
<td><label for='features'>Характеристики</label></td>
<td><input style="height:;"  type='text' name='features' id='features'placeholder="Характеристики" </td>
</tr>
<tr>
<td><label for='nuances'>Нюансы</label></td>
<td><input type='text' name='nuances' id='nuances'  placeholder="Нюансы" ></td>
</tr>
<tr>
<td><label for='cut'>Разрез</label></td>
<td><input type='text' name='cut' id='cut' placeholder="Разрез" ></td>
</tr><tr>
<td><label for='person'>Заказчик</label></td>
<td><input type='text' name='person' id='person' placeholder="Заказчик" ></td>
</tr>
<tr>
<td><label for='date'>Дата </label></td>
<td><input type='date' name='date'  placeholder="Дата"></td>
</tr>


</table>
<br/>
<div align="center" >
<input align="right" type='submit' name='save' value='Сохранить'>
</div>
</form>




</body>

</html>