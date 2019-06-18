<!DOCTYPE HTML>

<html>

<head>

<style>

button:hover

{

	cursor:pointer;

}
body{
	
}

	


</style>

<meta name='charset' charset='utf8'/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<title>Бурение</title>

</head>

<body>

<div>

<h2 align="center"><img src='images/top-logo.png'>Таблица бурения<img style="transform:scale(-1,1);" src='images/top-logo.png'>
<a class="btn btn-success" style="margin-top: 0;margin-left: 90%" href='logout.php'>Выйти  <?php echo $_SESSION['login'];?></a> </h2>

<a href="burMap.php" style="font-size:20px;color:#fd02be"  >Карта скважин</a>

</div>

<a href="calc.php" style="font-size:25px;color:#fc2803 ">Калькулятор</a>

<div>

<a href="index.php" style="font-size:30px" >На главную</a>

</div>

<div style="float:left;">

<a href='Add.php' align="left"  style="float:left;"  class="btn btn-primary">Добавить Данные</a>

</div>

<div  align="right" style="text-align:right;float:left;width:80%" >



<form method="post" action="find.php">

<input  type="text" name="search" style="width:70%" placeholder="Искать по адресу">

<input type="submit" name="find" value="Искать" >

<a href='updatedelete.php'  align='right' class="btn btn-primary">Редактировать</a>

</form>





</div>