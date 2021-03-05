<style type="text/css">
	form{
		margin: 3px;
	}
</style>

<form action="index.php" method="POST">
	<input type="hidden" name="id" value="<?= $data['id'] ?? "" ?>">
    <input type="text" name="name" value="<?= $data['name'] ?? "" ?>">
	<select name="category_id">
		<?php foreach($categories as $cat) { ?>
		<option value="<?= $cat['id']?>" <?= ($cat['id'] == $data['category_id']) ? "selected" : "" ?>><?= $cat['name']?></option>
		<?php } ?>
	</select>
    <button type="submit"><?= $data['id'] ? "Редактировать" : "Создать"; ?></button>
</form>
