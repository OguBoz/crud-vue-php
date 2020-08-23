<?php

require("db/connect.php");

$id = $_GET['id'];

$contacts = [];
$query = "DELETE FROM contact WHERE id = '$id'";

if($res = mysqli_query($conn, $query)) {
    echo 'Deleted';
}


?>