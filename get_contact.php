<?php

require("db/connect.php");

$id = $_GET['id'];

$contacts = [];
$query = "SELECT * FROM contact WHERE id = '$id'";

if($res = mysqli_query($conn, $query)) {
    $row = $res->fetch_assoc();
    $contact = [
        'id' => $row['id'],
        'name' => $row['name'],
        'tel' => $row['tel']
    ];
    echo json_encode($contact);
}


?>