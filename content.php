
<table  border='1px' class="table">
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
