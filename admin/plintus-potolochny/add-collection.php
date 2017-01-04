<?php
	include '../database_connection.php';
	
	$messageCollection = '';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['position']) || !$_FILES['main-image']['tmp_name']){
			$messageCollection = "<b style='color:red'>Поле не заполнено</b><br /><a href='collections.php'>Вернуться назад</a>";
		}else{
			$name = $_POST['name'];
			$description = $_POST['description'];
            $position = $_POST['position'];
            $image = basename($_FILES['main-image']['name']);
            $target_file = "images/collections/".$_FILES['main-image']['name'];
            if(move_uploaded_file($_FILES['main-image']['tmp_name'], $target_file)) {
                $sql = "insert into plintus_potolochny_collection values(null, '$name', '$description', '$position', '$image')";
                $result = $conn->query($sql);
                if ($result) {
                    $messageCollection = "<b style='color:green'>Коллекция успешно создана</b><br /><a href='collections.php'>Вернуться назад</a>";
                } else {
                    $messageCollection = "<b style='color:red'>Ошибка при добавлении в базу данных</b><br /><a href='collections.php'>Вернуться назад</a>";
                }
            }else{
                $messageCollection = "<b style='color:red'>Ошибка при загрузке фотографии</b><br /><a href='collections.php'>Вернуться назад</a>";
            }
		}
	}
	
	echo $messageCollection;
	$conn->close();
?>