<?php
    include '../database_connection.php';

    $sql = "select title, text, image from content where category=6";
    $result = $conn->query($sql);
    $content = [];
    while($row = $result->fetch_assoc()){
        $content[] = $row;
    }
    $sql = "select link, text, image from reference where id_category=6";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $reference = $row;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../style-admin.css" />
        <title>Контент</title>
        <script src="../jquery-1.11.3.js"></script>
        <script>
            $(document).ready(function(){
                $("#menu").height(screen.height);

                $("#ref-image, .image-button").click(function(){
                    $(this).siblings('.img-button, #ref-image').trigger('click');
                });

                $('#ref-image, .img-button').change(function(){
                    var formData = new FormData();

                    formData.append("userfile", $(this).prop("files")[0]);
                    formData.append("dir", "no");
                    var type = $(this).siblings('input[type="hidden"]').val();
                    formData.append("type", type);
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
            <h1>Контент</h1>
        </div>
        <div id="main">
            <div class="content">
                <h2>Текст вверху страницы</h2>
                <form action="content-handler.php" method="post">
                    <label for="text">Заголовок</label><br />
                    <input type="text" name="title" value="<?=$content[0]['title']?>"/><br /><br />
                    <textarea name="text" cols="70" rows="9"><?=$content[0]['text']?></textarea><br /><br />
                    <input class="btn btn-primary" type="submit" value="Сохранить" />
                    <input name="type" type="hidden" value="1" />
                </form>
            </div>
            <div class="content">
                <h2>Текст перед слайдерами</h2>
                <form action="content-handler.php" method="post">
                    <textarea name="text" cols="70" rows="9"><?=$content[1]['text']?></textarea><br /><br />
                    <input class="btn btn-primary" type="submit" value="Сохранить" />
                    <input name="type" type="hidden" value="2" />
                </form>
            </div>
            <div class="content">
                <h2>Текст между слайдерами</h2>
                <form action="content-handler.php" method="post">
                    <textarea name="text" cols="70" rows="9"><?=$content[2]['text']?></textarea><br /><br />
                    <input class="btn btn-primary" type="submit" value="Сохранить" />
                    <input name="type" type="hidden" value="3" />
                </form>
            </div>
            <div class="content">
                <h2>Текст после слайдеров</h2>
                <form action="content-handler.php" method="post">
                    <textarea name="text" cols="70" rows="9"><?=$content[3]['text']?></textarea><br /><br />
                    <input class="btn btn-primary" type="submit" value="Сохранить" />
                    <input name="type" type="hidden" value="4" />
                </form>
            </div>
            <div class="content">
                <h2>Блок с картинками</h2>
                <form class="forms" action="content-handler.php" enctype="multipart/form-data" method="post">
                    <h3>Первый</h3>
                    <label for="text">Заголовок</label><br />
                    <input type="text" name="title" value="<?=$content[4]['title']?>" /><br /><br />
                    <textarea name="text" cols="70" rows="6"><?=$content[4]['text']?></textarea><br /><br />
                    <div id="images-container"><img src="images/<?=$content[4]['image']?>" alt="Изображение" /></div><br />
                    <input class="btn btn-primary image-button" type="button" value="Загрузить фотографию" /><br /><br />
                    <input class="img-button" type="file" name="bl-image-1" />
                    <input class="btn btn-primary" type="submit" value="Сохранить" />
                    <input name="type" type="hidden" value="5" />
                </form>
                <form class="forms" action="content-handler.php" enctype="multipart/form-data" method="post">
                    <h3>Второй</h3>
                    <label for="text">Заголовок</label><br />
                    <input type="text" name="title" value="<?=$content[5]['title']?>" /><br /><br />
                    <textarea name="text" cols="70" rows="6"><?=$content[5]['text']?></textarea><br /><br />
                    <div id="images-container"><img src="images/<?=$content[5]['image']?>" alt="Изображение" /></div><br />
                    <input class="btn btn-primary image-button" type="button" value="Загрузить фотографию" /><br /><br />
                    <input class="img-button" type="file" name="bl-image-2" />
                    <input class="btn btn-primary" type="submit" value="Сохранить" />
                    <input name="type" type="hidden" value="6" />
                </form>
            </div>
            <div class="content">
                <h2>Ссылка на другой раздел</h2>
                <form action="content-handler.php" enctype="multipart/form-data" method="post">
                    <label for="ref-category">Раздел</label><br />
                    <select name="ref-category">
                        <option value="1" <?php if($reference['link'] == 1){ ?>selected<?php } ?>>Плинтус напольный</option>
                        <option value="2" <?php if($reference['link'] == 2){ ?>selected<?php } ?>>Молдинги</option>
                        <option value="3" <?php if($reference['link'] == 3){ ?>selected<?php } ?>>Плинтус потолочный</option>
                        <option value="4" <?php if($reference['link'] == 4){ ?>selected<?php } ?>>Рамы для картин и зеркал</option>
                    </select><br /><br />
                    <textarea name="text" cols="70" rows="6"><?=$reference['text']?></textarea><br /><br />
                    <div id="images-container"><img src="images/<?=$reference['image']?>" alt="Изображение" /></div><br />
                    <input class="btn btn-primary image-button" type="button" value="Загрузить фотографию" /><br /><br />
                    <input id="ref-image" type="file" name="ref-image" />
                    <input class="btn btn-primary" type="submit" value="Сохранить" />
                    <input name="type" type="hidden" value="7" />
                </form>
            </div>
        </div>
    </body>
</html>