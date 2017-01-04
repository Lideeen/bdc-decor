<?php
    include '../database_connection.php';
    $item = $_GET['item'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['full_name']) && empty($_POST['name']) && empty($_POST['height']) && empty($_POST['width']) && empty($_POST['length']) &&
            empty($_POST['price']) && empty($_POST['inst_price']) && empty($_POST['position']) && empty($_POST['images'])){
            $messageCollection = "<b style='color:red'>Не все обязательные поля заполнены</b><br /><a href='add.php'>Вернуться назад</a>";
        }else {
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
            $sql = "update ramy_dly_zerkal set full_name='$full_name', name='$name', height='$height', width='$width', length='$length',
                        price='$price', installation_price='$inst_price', position='$position', material='$material', dop_info_2='$dop_info_2',
                         dop_info_3='$dop_info_3', id_collection='$collection'  where id='$item'";
            $result = $conn->query($sql);
            if ($result) {
                $messageCollection = "<b style='color:green'>Товар успешно изменён</b><br /><a href='index.php'>Вернуться на главную</a>";
            }else{
                $messageCollection = "<b style='color:red'>Произошла неизвестная ошибка</b><br /><a href='index.php'>Вернуться на главную</a>";
            }
        }
        echo $messageCollection;
    }
    $conn->close();
?>