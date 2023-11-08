<?php 
    include './db.php';
    $sql = "SELECT * FROM booking";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>