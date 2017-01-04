<?php
    include '../database_connection.php';
    $id_col = $_POST['id_col'];
    $sql = "select id, name, height, width, length, price, position from int_lepnina where id_collection='$id_col' order by name ASC";
    $result = $conn->query($sql);
    $count = 1;
    if($result){
        if($result->num_rows == 0) echo "<b>В базе нет записей.</b>";
        else{
?>
            <table>
                <tr>
                    <th><p>№</p></th>
                    <th><p>Название</p></th>
                    <th><p>Высота</p></th>
                    <th><p>Ширина</p></th>
                    <th><p>Длина</p></th>
                    <th><p>Цена за метр</p></th>
                    <th><p>Позиция</p></th>
                    <th><p>Действия</p></th>
                </tr>
            <?php while($row = $result->fetch_assoc()){ ?>
                <tr>
                    <td><?=$count++;?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['height']?></td>
                    <td><?=$row['width']?></td>
                    <td><?=$row['length']?></td>
                    <td><?=$row['price']?></td>
                    <td><?=$row['position']?></td>
                    <td>
                        <a href="edit-item.php?item=<?=$row['id']?>"><img class="icon" src="../images/edit.png" title="Редактировать" alt="" /></a>
                        <img class="icon delete" src="../images/delete.png" title="Удалить" alt="" />
                        <a href="delete-item.php?item=<?=$row['id']?>" style="display:none"></a>
                    </td>
                </tr>
            <?php } ?>
            </table>
<?php
        }
    }else{
        echo "<b style='color:red'>Произошла ошибка соединения с базой данных. Попробуйте обновить старницу.</b>";
    }
    $conn->close();
?>