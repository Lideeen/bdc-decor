<?php
    include '../database_connection.php';
    $sql = "select id, name from falsh_balki_collection order by name asc";
    $result = $conn->query($sql);
    if($result){
        while($row = $result->fetch_assoc()){
?>
            <option value="<?=$row['id']?>"><?=$row['name']?></option>
<?php
        }
    }
?>