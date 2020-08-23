<?php

require("db/connect.php");


$contacts = [];
$query = "SELECT * FROM contact";

if($res = mysqli_query($conn, $query)) {
    $i = 0;

    while($row = mysqli_fetch_assoc($res)) {
        $contacts[$i]['id'] = $row['id'];
        $contacts[$i]['name'] = $row['name'];
        $contacts[$i]['tel'] = $row['tel'];
        $i++;
    }

    echo json_encode($contacts);
}


?>