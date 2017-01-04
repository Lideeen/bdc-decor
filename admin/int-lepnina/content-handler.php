<?php
    include '../database_connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $type = $_POST['type'];

        switch($type){
            case 1:
                $title = $_POST['title'];
                $text = $_POST['text'];
                $sql = "update content set title='$title', text='$text' where category=5 and type='$type'";
                $result = $conn->query($sql);
                if($result){
                    $messageCollection = "<b style='color:green'>Успешно сохранено</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                else{
                    $messageCollection = "<b style='color:red'>Ошибка базы данных</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                echo $messageCollection;
                break;
            case 2:
                $text = $_POST['text'];
                $sql = "update content set text='$text' where category=5 and type='$type'";
                $result = $conn->query($sql);
                if($result){
                    $messageCollection = "<b style='color:green'>Успешно сохранено</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                else{
                    $messageCollection = "<b style='color:red'>Ошибка базы данных</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                echo $messageCollection;
                break;
            case 3:
                $text = $_POST['text'];
                $sql = "update content set text='$text' where category=5 and type='$type'";
                $result = $conn->query($sql);
                if($result){
                    $messageCollection = "<b style='color:green'>Успешно сохранено</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                else{
                    $messageCollection = "<b style='color:red'>Ошибка базы данных</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                echo $messageCollection;
                break;
            case 4:
                $text = $_POST['text'];
                $sql = "update content set text='$text' where category=5 and type='$type'";
                $result = $conn->query($sql);
                if($result){
                    $messageCollection = "<b style='color:green'>Успешно сохранено</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                else{
                    $messageCollection = "<b style='color:red'>Ошибка базы данных</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                echo $messageCollection;
                break;
            case 5:
                $title = $_POST['title'];
                $text = $_POST['text'];
                $sql = "update content set title='$title', text='$text' where category=5 and type='$type'";
                $result = $conn->query($sql);
                if($result){
                    $messageCollection = "<b style='color:green'>Успешно сохранено</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                else{
                    $messageCollection = "<b style='color:red'>Ошибка базы данных</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                echo $messageCollection;
                break;
            case 6:
                $title = $_POST['title'];
                $text = $_POST['text'];
                $sql = "update content set title='$title', text='$text' where category=5 and type='$type'";
                $result = $conn->query($sql);
                if($result){
                    $messageCollection = "<b style='color:green'>Успешно сохранено</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                else{
                    $messageCollection = "<b style='color:red'>Ошибка базы данных</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                echo $messageCollection;
                break;
            case 7:
                $link = $_POST['ref-category'];
                $text = $_POST['text'];
                $sql = "update reference set link='$link', text='$text' where category=5 and type='$type'";
                $result = $conn->query($sql);
                if($result){
                    $messageCollection = "<b style='color:green'>Успешно сохранено</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                else{
                    $messageCollection = "<b style='color:red'>Ошибка базы данных</b><br /><a href='content.php'>Вернуться назад</a>";
                }
                echo $messageCollection;
                break;
        }
    }
?>