<?php
session_start();

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
<style>
input{
	width:80%;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<title>Редактировать</title>
</head>
<body>
<?php 
if(!empty($_GET['red'])){
	
	$_SESSION['id']=$_GET['red'];
	$red = $_GET['red'];
	$res=updateData($red);
}
	?>
	<form method='post' action='updatedelete.php' >
<table class="table">
<div>
<a href="index.php" style="font-size:30px" >На главную</a>
</div>
<div align="center" style="text-align:center;" >
 <h2>Редактирование</h2>
</div>
<hr/>
<tr>
<td><label for='adrress'>Адрес</label></td>
<td><input type='text' name='adrress' id='adrress' value="<?php echo $res[0]['adrress']; ?>"  ></td>
</tr>

<td><label for='longAll'> Метраж</label></td>
<td><input type='text' name='longAll' id='longAll' placeholder='Только цыфры' value="<?php echo $res[0]['longAll']; ?>"  pattern='[0-9]+'></td>

</tr>
<tr>
<td><label for='features'>Характеристики</label></td>
<td><input style="height:;"  type='text' name='features' id='features'value=" <?php echo $res[0]['features']; ?>"></td>
</tr>
<tr>
<td><label for='nuances'>Нюансы</label></td>
<td><input type='text' name='nuances' id='nuances' value="<?php echo $res[0]['nuances']; ?>" ></td>
</tr>
<tr>
<td><label for='cut'>Разрез</label></td>
<td><input type='text' name='cut' id='cut' value="<?php echo $res[0]['cut']; ?>" ></td>
</tr><tr>
<td><label for='person'>Заказчик</label></td>
<td><input type='text' name='person' id='person' value="<?php echo $res[0]['person']; ?>" ></td>
</tr>
<tr>
<td><label for='date'>Дата </label></td>
<td><input type='date' name='date'  value="<?php echo $res[0]['date']; ?>"></td>
</tr>


</table>
<br/>
<div align="center" >
<input align="right" type='submit' name='savetoid' value='Сохранить'>
</div>
</form>




</body>

</html>