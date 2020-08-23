<?php

    $conn = mysqli_connect("localhost", "root", "", "contacts");

    if(!$conn) {
        echo mysqli_connect_errno();
    }

?>