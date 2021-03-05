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


<a href="/category.php?action=add">Добавить товар</a>

<table>   
<?php foreach($data as $item) { ?>
    <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['name'] ?></td>
        <td><a href="/category.php?action=edit&id=<?= $item['id']?>">[редактировать]</a></td>
        <td><a href="/category.php?action=delete&id=<?= $item['id']?>">[x]</a></td>
    </tr>
<?php } ?>
</table> 