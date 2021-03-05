<style type="text/css">
	table{
		border-collapse: collapse;
		margin: 3px;
	}
	td{
		border: 2px solid black;
		padding: 3px;
	}
</style>


<a href="?action=add">Добавить товар</a>

<table>   
<?php foreach($data as $item) { ?>
    <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['name'] ?></td>
		<td><?= $item['category_name'] ?></td>
        <td><a href="/?action=edit&id=<?= $item['id']?>">[редактировать]</a></td>
        <td><a href="/?action=delete&id=<?= $item['id']?>">[x]</a></td>
    </tr>
<?php } ?>
</table> 