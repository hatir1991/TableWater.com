<?php
session_start();
if(empty($_SESSION['login']))
{
	header('Location:signIn.php');
	exit();
}
echo ($_SESSION['login']);
echo('fffffff');
include('Function.php');
if(!empty($_POST['submit'])){
	$status=addData($_POST['adrress'],$_POST['longTubes'],$_POST['longAll'],$_POST['features'],$_POST['nuances'],$_POST['cut'],$_POST['type']);
if($status==1)
{
	echo ("<h1> данные успешно добавленны </h1>");
}	
else
{
	echo ("<h1> Ошибка добавления данных, <br/> Проверт корректность ведённых данных  </h1>");
}

	}