<?php
	include '../database_connection.php';
	
	$messageCollection = '';

    $item = $_GET['item'];
    $sql = "select images_dir from moldings where id='$item'";
    $result = $conn->query($sql);
    if($result){
        while($row = $result->fetch_assoc())
            $images_dir = $row['images_dir'];
        $dir = opendir("images/".$images_dir);
        while($file = readdir($dir)){
            if($file != '.' && $file != '..')
                unlink("images/".$images_dir."/".$file);
        }
        rmdir("images/".$images_dir);
        $sql = "delete from moldings where id='$item'";
        $result = $conn->query($sql);
        if($result){
            $messageCollection = "<b style='color:green'>Товар успешно удален</b><br /><a href='index.php'>Вернуться назад</a>";
        }else{
            $messageCollection = "<b style='color:red'>Ошибка при удалении из базы данных</b><br /><a href='index.php'>Вернуться назад</a>";
        }
    }else{
        $messageCollection = "<b style='color:red'>Ошибка при обращении к базе данных</b><br /><a href='index.php'>Вернуться назад</a>";
    }
	
	echo $messageCollection;
	$conn->close();
?>