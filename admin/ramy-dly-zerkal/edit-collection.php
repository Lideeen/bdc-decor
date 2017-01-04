<?php
    include '../database_connection.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $collection = $_POST['collection'];
        $description = $_POST['description'];
        $position = $_POST['position'];

        $sql = "update ramy_dly_zerkal_collection set description='$description', position='$position' where id='$collection'";
        $result = $conn->query($sql);
        if($result){
            $messageCollection = "<b style='color:green'>Коллекция успешно изменена</b><br /><a href='index.php'>Вернуться на главную</a>";
        }else{
            $messageCollection = "<b style='color:red'>Произошла неизвестная ошибка</b><br /><a href='index.php'>Вернуться на главную</a>";
        }
        echo $messageCollection;
    }

    $conn->close();
?>