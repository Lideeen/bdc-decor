<?php
    include '../database_connection.php';
    $item = $_GET['item'];
    $sql = "select id, full_name, name, height, width, length, price, installation_price, position, material, dop_info_2, dop_info_3,
            images_dir, id_collection from int_lepnina where id='$item'";
    $result = $conn->query($sql);
    if ($result) {
        while ($row = $result->fetch_assoc()){
            $id = $row['id'];
            $full_name = $row['full_name'];
            $name = $row['name'];
            $height = $row['height'];
            $width = $row['width'];
            $length = $row['length'];
            $price = $row['price'];
            $price_inst = $row['installation_price'];
            $position = $row['position'];
            $material = $row['material'];
            $dop_info_2 = $row['dop_info_2'];
            $dop_info_3 = $row['dop_info_3'];
            $images_dir = $row['images_dir'];
            $collection = $row['id_collection'];
        }
        $conn->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="../style-admin.css" />
		<title>Редактировать</title>
		<script src="../jquery-1.11.3.js"></script>
		<script>
            $(document).ready(function(){
                $("#menu").height(screen.height);

                $("#images-button").click(function(){
                    $("#images").trigger('click');
                });

                var srcMain = $('#mainImg').attr('src');

                $("#main-image-button").click(function(){
                    $("#main-image").trigger('click');
                });

                $(".delete-image").click(function(){
                    var src = $(this).siblings().attr('src');
                    $.post("photo-delete.php",{path:src},
                    function(result){
                        location.reload();
                    });
                });

                $('#images').change(function(){
                    var formData = new FormData();

                    formData.append("userfile", $(this).prop("files")[0]);
                    formData.append("dir", <?=$images_dir?>);
                    $.ajax({
                        url: "photo-upload.php",
                        dataType: 'text',
                        data: formData,
                        type: 'POST',
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            location.reload();
                        }
                    });
                });

                $('#main-image').change(function(){
                    var formData = new FormData();

                    formData.append("userfile", $(this).prop("files")[0]);
                    formData.append("dir", <?=$images_dir?>);
                    formData.append("srcMain", srcMain);
                    $.ajax({
                        url: "photo-upload.php",
                        dataType: 'text',
                        data: formData,
                        type: 'POST',
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            location.reload();
                        }
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
            <h1>Редактировать</h1>
        </div>
        <div id="main" style="margin-top:40px">
            <div class="forms">
                <h2>Товар</h2>
                <form action="edit-item-handler.php?item=<?=$id?>" name="item" method="post" enctype="multipart/form-data">
                    <label for="full_name">Полное наименование товара</label><br />
                    <input type="text" name="full_name" value="<?=$full_name?>" /><br /><br />
                    <label for="name">Артикул</label><br />
                    <input type="text" name="name" value="<?=$name?>" /><br /><br />
                    <label for="collection">Коллекция</label><br />
                    <select name="collection">
                        <?php include 'collection.php'; ?>
                    <select/><br><br>
                    <label for="height">Высота</label><br>
                    <input type="text" name="height" value="<?=$height?>" /><br /><br />
                    <label for="width">Ширина</label><br>
                    <input type="text" name="width" value="<?=$width?>" /><br /><br />
                    <label for="length">Длина</label><br>
                    <input type="text" name="length" value="<?=$length?>" /><br /><br />
                    <label for="price">Цена</label><br>
                    <input type="text" name="price" value="<?=$price?>" /><br /><br />
                    <label for="inst_price">Цена монтажа</label><br>
                    <input type="text" name="inst_price" value="<?=$price_inst?>" /><br /><br />
                    <label for="position">Позиция на странице</label><br>
                    <input type="text" name="position" value="<?=$position?>" /><br /><br />
                    <label for="position">Матриал</label><br>
                    <input type="text" name="material" value="<?=$material?>" /><br /><br />
                    <label for="position">Дополнительное поле 2</label><br>
                    <input type="text" name="dop_info_2" value="<?=$dop_info_2?>" /><br /><br />
                    <label for="position">Дополнительное поле 3</label><br>
                    <input type="text" name="dop_info_3" value="<?=$dop_info_3?>" /><br /><br />
                    <input class="btn btn-primary" type="submit" value="Изменить" />
                </form>
            </div>
            <div class="load-images">
                <h2>Загруженные фото</h2>
                <?php
                    if($dir = opendir('images/'.$images_dir)) {
                        while ($file = readdir($dir)) {
                            if ($file != '.' && $file != '..') {
                                $info = pathinfo($file, PATHINFO_EXTENSION);
                                $name = basename($file, $info);
                                if($name != 'main.') {
                ?>
                                    <div class="delete-image-box">
                                        <img class="delete-image" src="../images/delete.png" alt=""/>
                                        <img src="images/<?= $images_dir ?>/<?= $file ?>" alt=""/>
                                    </div>
                <?php
                                }else{
                                    $main_ext = $info;
                                }
                            }
                        }
                ?>
                        <h3>Главная</h3>
                        <img id="mainImg" src="images/<?= $images_dir ?>/main.<?= $main_ext ?>" alt=""/>
                <?php
                        closedir($dir);
                    }
                ?>
                <form class="image-form" enctype="multipart/form-data">
                    <input id="images" type="file" />
                    <input id="images-button" class="btn btn-primary" type="button" value="Добавить" />
                    <input id="main-image" type="file" />
                    <input id="main-image-button" class="btn btn-primary" type="button" value="Обновить главную" />
                </form>
            </div>
        </div>
    </body>
</html>
<?php }else{ ?>
    <script>alert('Ошибка при обращении к базе данных. Повторите попытку позже.')</script>
<?php } ?>