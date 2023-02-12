<?php
    $conn = mysqli_connect("localhost", "root", "root", "register-bg");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error() . '<br');
    }

    echo "Connected successfully";

    $sql = "INSERT INTO users (id, login, pass, name) VALUES (NULL, 'login1', 'pass1', 'name1')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>