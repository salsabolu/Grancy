<?php
if (isset($_GET['id'])) {
    include('../database/database.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id = $id";
    if (mysqli_query($conn, $sql)) {
        header('Location: adminusers.php');
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    }
    mysqli_close($conn);
}
