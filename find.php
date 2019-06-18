<?php
session_start();
if(empty($_SESSION['login']))
{
	header('Location:signIn.php');
	exit();
}
require_once('head.php');
require_once('Function.php');
//print_r($_POST);
$results=getFind($_POST['search'],$_SESSION['login']);


?>
<table border='1px' class="table">
	<tr class="table-active">
		
		<td>Адрес</td>
		
		<td> Метраж</td>
		<td>Дата</td>
		<td>Характеристки</td>
		<td>Нюансы</td>
		<td>Разрез</td>
		<td>Заказчик</td>
	
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
		
	
		</tr>
		<?php endforeach; ?>
	
	
</table>

</body>
</html>


