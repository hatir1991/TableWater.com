<?php
session_start();
if(empty($_SESSION['login']))
{
	header('Location:signIn.php');
	exit();
}
require_once('Function.php');
if(!empty($_POST['savetoid']))
{
	updateToId($_SESSION['id'],$_POST['adrress'],$_POST['longAll'],$_POST['features'],$_POST['nuances'],$_POST['cut'],$_POST['date'],$_POST['person']);
}
//echo $_SESSION['login'];
$results=getAllr($_SESSION['login']);
//print_r($res['id']);
if(!empty($_GET['del'])){
	$del=$_GET['del'];
	deleteData($del);
	$_GET['del']=null;
	header('Location:updatedelete.php?del=');
	
}

?>
<script>
function submitDel()
{
	var a=confirm(" Удалить запись безвозвратно?");
	
	return a;
}

</script>
<?php require_once('head.php'); ?> 
<table border='1px' class="table">
	<tr class="table-active">
		
		<td>Адрес</td>
		
		<td>Метраж</td>
		<td>Дата</td>
		<td>Характеристки</td>
		<td>Нюансы</td>
		<td>Разрез</td>
		
		<td>Заказчик</td>
		<td>Удалить</td>
		<td>Редактировать</td>
	</tr>
	<?php foreach($results as $res):?>
	
	<tr>
		
		<td><?php echo $res['adrress']; ?></td>
		
		<td><?php echo $res['longAll']; ?></td>
		<td><?php echo $res['date']; ?></td>
		<td><?php echo $res['features']; ?></td>
		<td><?php echo $res['nuances']; ?></td>
		<td><?php echo $res['cut']; ?></td>
		
		<td><?php echo $res['person']; ?></td>
		<td style="width:50px;text-align:center;">
		<?php echo <<<HERE
<button class="btn btn-link" onClick='if(submitDel())location.href="updatedelete.php?del={$res['id']}";'  name="del" ><img style="width:30px;hight:30px;" src='images/delete.png'></button>
HERE;
				
		?>
		</td>
		<td style="width:50px;text-align:center;">
		<?php echo <<<HERE
<button class="btn btn-link" onClick='location.href="edit.php?red={$res['id']}";'  name="del" ><img style="width:30px;hight:30px;" src='images/edit1.png'></button>
HERE;
				
		?>
		</td>
		</tr>
		<?php endforeach; ?>
		
	
	
</table>
</body>
</html>