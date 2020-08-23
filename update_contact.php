<?php

require("db/connect.php");


$data = file_get_contents("php://input");

$request = json_decode($data);

$query = "UPDATE contact SET name = '$request->name' , tel = '$request->tel' WHERE  id = '$request->id'";

if(mysqli_query($conn, $query)) {
    $contact = [
        'name' => $request->name,
        'tel' => $request->tel,
        'id' => mysqli_insert_id($conn)
    ];
    echo json_encode($contact);
}



?>