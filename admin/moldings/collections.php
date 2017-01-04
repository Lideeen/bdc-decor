<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../style-admin.css" />
        <title>Добавить</title>
        <script src="../jquery-1.11.3.js"></script>
        <script src="../images.js"></script>
        <script>
            $(document).ready(function(){
                $("#menu").height(screen.height);

                $("#main-image-button").click(function(){
                    $('#main-image').trigger('click');
                });

                $("#collection-image-button").click(function(){
                    $('#collection-image-edit').trigger('click');
                });

                var collection = $('#collection-for-edit').val();
                $.post("edit-photo.php", {image:collection},
                    function(data){
                        var res = JSON.parse(data);
                        $("#edit-image").attr('src', "images/collections/" + res.image);
                        $("#edit-description").val(res.description);
                        $("#edit-position").val(res.position);
                    });

                $('#collection-for-edit').on('change', function(){
                    var collection = $('#collection-for-edit').val();
                    $.post("edit-photo.php", {image:collection},
                        function(data){
                            var res = JSON.parse(data);
                            $("#edit-image").attr('src', "images/collections/" + res.image);
                            $("#edit-description").val(res.description);
                            $("#edit-position").val(res.position);
                        });
                });

                $('#collection-image-edit').change(function(){
                    var formData = new FormData();
                    var selectedCollection = $('#collection-for-edit').val();
                    formData.append("userfile", $(this).prop("files")[0]);
                    formData.append("id", selectedCollection);
                    $.ajax({
                        url: "edit-photo.php",
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
            <h1>Коллекции</h1>
        </div>
        <div id="main" style="margin-top:40px">
            <div class="forms">
                <h2>Добавить</h2>
                <form action="add-collection.php" name="collection" method="post" enctype="multipart/form-data">
                    <label for="name">Название</label><br />
                    <input type="text" name="name" /><br /><br />
                    <label for="description">Описание</label><br />
                    <input type="text" name="description" /><br /><br />
                    <label for="position">Позиция</label><br />
                    <input type="text" name="position" /><br /><br />
                    <input id="main-image-button" class="btn btn-primary" type="button" value="Загрузить фотографию" /><br /><br />
                    <input type="file" name="main-image" id="main-image" />
                        <div id="main-image-container"></div><br />
                    <input class="btn btn-primary" type="submit" value="Добавить коллекцию" />
                </form>
            </div>
            <div class="forms">
                <h2>Удалить</h2>
                <form action="delete-collection.php" name="collection" method="post" enctype="multipart/form-data">
                    <label for="name">Название</label><br />
                    <select name="collection">
                        <?php include 'collection.php'; ?>
                    </select><br /><br />
                    <input class="btn btn-primary" type="submit" value="Удалить коллекцию" />
                </form>
            </div>
            <div class="forms" style="clear:both">
                <h2>Редактировать</h2>
                <form action="edit-collection.php" name="collection" method="post" enctype="multipart/form-data">
                    <label for="name">Название</label><br />
                    <select name="collection" id="collection-for-edit">
                        <?php include 'collection.php'; ?>
                    </select><br /><br />
                    <label for="description">Описание</label><br />
                    <input id="edit-description" type="text" name="description" /><br /><br />
                    <label for="position">Позиция</label><br />
                    <input id="edit-position" type="text" name="position" /><br /><br />
                    <div>
                        <img id="edit-image" src="" alt="Фото коллекции" />
                    </div>
                    <input id="collection-image-edit" type="file" />
                    <input id="collection-image-button" class="btn btn-primary" type="button" value="Обновить фото" /><br /><br />
                    <input type="submit" value="Изменить" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </body>
</html>