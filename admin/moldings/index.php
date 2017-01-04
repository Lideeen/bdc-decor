<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="../style-admin.css" />
		<title>Молдинги</title>
		<script src="../jquery-1.11.3.js"></script>
		<script>
			$(document).ready(function(){
				$("#menu").height(screen.height);

				$(".delete").click(function(){
					if(confirm('Вы уверены, что хотите удалить товар?') == true){
						location.href = $(this).next().attr('href');
					}
				});

				var id_col = $("select").val();
				$.post("records.php", {id_col:id_col},
				function(data){
					$("#records").html(data);
				});

				$("select").change(function(){
					var id_col = $("select").val();
					$.post("records.php", {id_col:id_col},
					function(data){
						$("#records").html(data);
					});
				});
			});
		</script>
	</head>
	<body>
		<div id="menu">
			<?php include '../sidebar.php'; ?>
		</div>
		<div id="header">
			<h1>Молдинги</h1>
		</div>
		<div id="main">
			<div class="general">
				<a class="btn btn-primary" href="add.php">Добавить</a>
				<a class="btn btn-primary" href="collections.php">Коллекции</a>
				<a class="btn btn-primary" href="sliders.php">Слайдеры</a>
				<a class="btn btn-primary" href="content.php">Контент</a>
				<button class="btn btn-primary">Синхронизация с файлом</button>
			</div>
			<div class="choose-collection">
				<span>Товар из коллекции</span>
				<select name="collection">
					<?php include 'collection.php'; ?>
				<select/>
			</div>
			<div id="records"></div>
		</div>
	</body>
</html>