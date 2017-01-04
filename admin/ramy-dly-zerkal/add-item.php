<?php
	include '../database_connection.php';
	
	$messageCollection = '';
	$file = fopen("count.txt", 'r+') or die("Неизвестная ошибка");
	$count = fgets($file) + 1;
	fseek($file, 0);

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(empty($_POST['full_name']) || empty($_POST['name']) || empty($_POST['height']) || empty($_POST['width']) || empty($_POST['length']) ||
		   empty($_POST['price']) || empty($_POST['inst_price']) || empty($_POST['position']) || !$_FILES['main-image']['tmp_name'] ||
           !$_FILES['images']['tmp_name'][0]){
			$messageCollection = "<b style='color:red'>Не все обязательные поля заполнены</b><br /><a href='add.php'>Вернуться назад</a>";
		}else{
			$full_name = $_POST['full_name'];
			$name = $_POST['name'];
			$collection = $_POST['collection'];
			$height = $_POST['height'];
			$width = $_POST['width'];
			$length = $_POST['length'];
			$price = $_POST['price'];
            $inst_price = $_POST['inst_price'];
            $position = $_POST['position'];
            $material = (empty($_POST['material']) ? '' : $_POST['material']);
            $dop_info_2 = (empty($_POST['dop_info_2']) ? '' : $_POST['dop_info_2']);
            $dop_info_3 = (empty($_POST['dop_info_3']) ? '' : $_POST['dop_info_3']);
			$sql = "insert into ramy_dly_zerkal values(null, '$full_name', '$name', '$height', '$width', '$length', '$price', '$inst_price', 
                    '$position', '$material', '$dop_info_2', '$dop_info_3', '$count', '$collection')";
			$result = $conn->query($sql);
			if($result){
				if(mkdir("images/".$count, 0777)){
                    foreach($_FILES['images']['name'] as $k => $v){
                        $target_file = "images/".$count."/".$_FILES['images']['name'][$k];
                        move_uploaded_file($_FILES['images']['tmp_name'][$k], $target_file);
                    }
                    $main_image = basename($_FILES['main-image']['name']);
                    $target_file = "images/".$count."/main.".pathinfo($main_image, PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['main-image']['tmp_name'], $target_file);
                    $messageCollection = "<b style='color:green'>Товар успешно добавлен</b><br /><a href='add.php'>Вернуться назад</a>";
                    fwrite($file, $count);
				}else{
					$sql = "delete from ramy_dly_zerkal where images_dir='$count'";
					$conn->query($sql);
					$messageCollection = "<b style='color:red'>Ошибка при добавлении в базу данных</b><br /><a href='add.php'>Вернуться назад</a>";
				}
			}else{
				$messageCollection = "<b style='color:red'>Ошибка при добавлении в базу данных</b><br /><a href='add.php'>Вернуться назад</a>";
			}
		}
	}
	
	echo $messageCollection;
	
	fclose($file);
	$conn->close();
?>