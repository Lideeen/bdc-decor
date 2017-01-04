<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="../style-admin.css" />
		<title>Добавить</title>
		<script src="../jquery-1.11.3.js"></script>
		<script src="../images.js"></script>
		<script>
			$(document).ready(function(){
				$("#menu").height(screen.height);

				$("#images-button").click(function(){
					$('#images').trigger('click');
				});

				$("#main-image-button").click(function(){
					$('#main-image').trigger('click');
				});
			});
		</script>
	</head>
	<body>
		<div id="menu">
			<?php include '../sidebar.php'; ?>
		</div>
		<div id="header">
			<h1>Добавить</h1>
		</div>
		<div id="main" style="margin-top:40px">
			<div class="forms">
				<h2>Товар</h2>
				<form action="add-item.php" name="item" method="post" enctype="multipart/form-data">
					<label for="full_name">Полное наименование товара</label><br />
					<input type="text" name="full_name" /><br /><br />
					<label for="name">Артикул</label><br />
					<input type="text" name="name" /><br /><br />
					<label for="collection">Коллекция</label><br />
					<select name="collection">
						<?php include 'collection.php'; ?>
					<select/><br><br>
					<label for="height">Высота</label><br>
					<input type="text" name="height" /><br /><br />
					<label for="width">Ширина</label><br>
					<input type="text" name="width" /><br /><br />
					<label for="length">Длина</label><br>
					<input type="text" name="length" /><br /><br />
					<label for="price">Цена</label><br>
					<input type="text" name="price" /><br /><br />
					<label for="inst_price">Цена монтажа</label><br>
					<input type="text" name="inst_price" /><br /><br />
					<label for="position">Позиция на странице</label><br>
					<input type="text" name="position" /><br /><br />
					<label for="position">Материал</label><br>
					<input type="text" name="material" /><br /><br />
					<label for="position">Дополнительное поле 2</label><br>
					<input type="text" name="dop_info_2" /><br /><br />
					<label for="position">Дополнительное поле 3</label><br>
					<input type="text" name="dop_info_3" /><br /><br />
					<input id="main-image-button" class="btn btn-primary" type="button" value="Главная фотография" /><br /><br />
					<input type="file" name="main-image" id="main-image" />
						<div id="main-image-container"></div><br />
					<input id="images-button" class="btn btn-primary" type="button" value="Второстепенные фотографии" /><br /><br />
					<input type="file" name="images[]" id="images" multiple />
						<div id="images-container"></div><br /><br />
					<input class="btn btn-primary" type="submit" value="Добавить товар" />
				</form>
			</div>
		</div>
	</body>
</html>