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

                $("#images-button-2").click(function(){
                    $("#images-2").trigger('click');
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
                    formData.append("dir", "sliders/1");
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

                $('#images-2').change(function(){
                    var formData = new FormData();

                    formData.append("userfile", $(this).prop("files")[0]);
                    formData.append("dir", "sliders/2");
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
            <h1>Слайдеры</h1>
        </div>
        <div id="main" style="margin-top:40px">
            <div class="load-images">
                <h2>Первый слайдер</h2>
                <?php
                if($dir = opendir('images/sliders/1')) {
                    while ($file = readdir($dir)) {
                        if ($file != '.' && $file != '..') {
                ?>
                            <div class="delete-image-box">
                                <img class="delete-image" src="../images/delete.png" alt=""/>
                                <img src="images/sliders/1/<?= $file ?>" alt=""/>
                            </div>
                <?php
                        }
                    }
                    closedir($dir);
                }
                ?>
                <form class="image-form" enctype="multipart/form-data">
                    <input id="images" type="file" />
                    <input id="images-button" class="btn btn-primary" type="button" value="Добавить" />
                </form>
            </div>
            <div class="load-images">
                <h2>Второй слайдер</h2>
                <?php
                if($dir = opendir('images/sliders/2')) {
                    while ($file = readdir($dir)) {
                        if ($file != '.' && $file != '..') {
                            ?>
                            <div class="delete-image-box">
                                <img class="delete-image" src="../images/delete.png" alt=""/>
                                <img src="images/sliders/2/<?= $file ?>" alt=""/>
                            </div>
                            <?php
                        }
                    }
                    closedir($dir);
                }
                ?>
                <form class="image-form" enctype="multipart/form-data">
                    <input id="images-2" type="file" />
                    <input id="images-button-2" class="btn btn-primary" type="button" value="Добавить" />
                </form>
            </div>
        </div>
    </body>
</html>
