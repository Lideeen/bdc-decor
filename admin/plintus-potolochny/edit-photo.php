<?php
    include '../database_connection.php';

    if(isset($_POST['image'])) {
        $image = $_POST['image'];
        $sql = "select description, position, image from plintus_potolochny_collection where id='$image'";
        $result = $conn->query($sql);
        $answer = '';
        while ($row = $result->fetch_assoc()) {
            $answer .= '{"description":"'. $row['description']. '",';
            $answer .= '"image":"'. $row['image']. '",';
            $answer .= '"position":"'. $row['position']. '"}';
            echo $answer;
        }
    }

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $image_collection = basename($_FILES['userfile']['name']);
        $target_file = "images/collections/".$_FILES['userfile']['name'];
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $target_file)) {
            $sql = "select image from plintus_potolochny_collection where id='$id'";
            $result = $conn->query($sql);
            if($result){
                while($row = $result->fetch_assoc()){
                    $imageForDelete = "images/collections/".$row['image'];
                    unlink($imageForDelete);
                }
                $sql = "update plintus_potolochny_collection set image='$image_collection' where id='$id'";
                $result = $conn->query($sql);
            }
        }
    }

    $conn->close();
?>