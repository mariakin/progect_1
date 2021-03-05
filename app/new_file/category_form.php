<style type="text/css">
	form{
		margin: 3px;
	}
</style>

<form action="category.php" method="POST">
	<input type="hidden" name="id" value="<?= $data['id'] ?? "" ?>">
    <input type="text" name="name" value="<?= $data['name'] ?? "" ?>">
    <button type="submit"><?= $data['id'] ? "Редактировать" : "Создать"; ?></button>
</form>
