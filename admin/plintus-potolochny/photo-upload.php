<?php
    include '../database_connection.php';

    $dir = $_POST['dir'];

    if($dir == "no"){
        $type = $_POST['type'];
        if($type != 7) {
            $sql = "select image from content where category=3 and type='$type'";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                $imageDelete = $row['image'];
            }
            unlink('images/' . $imageDelete);
            $sql = "update content set image='{$_FILES['userfile']['name']}' where category=3 and type='$type'";
            $conn->query($sql);
            copy($_FILES['userfile']['tmp_name'], "images/" . $_FILES['userfile']['name']);
        }else{
            $sql = "select image from reference where id_category=1";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                $imageDelete = $row['image'];
            }
            unlink('images/' . $imageDelete);
            $sql = "update reference set image='{$_FILES['userfile']['name']}' where id_category=3";
            $conn->query($sql);
            copy($_FILES['userfile']['tmp_name'], "images/" . $_FILES['userfile']['name']);
        }
    }else {
        if (isset($_POST['srcMain'])) {
            unlink($_POST['srcMain']);
            $main_image = basename($_FILES['userfile']['name']);
            $target_file = "images/" . $dir . "/main." . pathinfo($main_image, PATHINFO_EXTENSION);
            copy($_FILES['userfile']['tmp_name'], $target_file);
        } else {
            copy($_FILES['userfile']['tmp_name'], "images/$dir/" . $_FILES['userfile']['name']);
        }
    }

    $conn->close();
?>