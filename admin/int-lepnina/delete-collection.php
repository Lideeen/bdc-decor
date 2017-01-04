<?php
	include '../database_connection.php';
	
	$messageCollection = '';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$collection = $_POST['collection'];
		$sql = "delete from int_lepnina_collection where id='$collection'";
		$result = $conn->query($sql);
		if($result){
			$messageCollection = "<b style='color:green'>Коллекция успешно удалена</b><br /><a href='collections.php'>Вернуться назад</a>";
		}else{
			$messageCollection = "<b style='color:red'>Ошибка при удалении из базы данных</b><br /><a href='collections.php'>Вернуться назад</a>";
		}
	}
	
	echo $messageCollection;
	$conn->close();
?>