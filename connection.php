<?php
// Connect to the database
$db = mysqli_connect("localhost", "root", "", "db_blog");

function query($query) {
    global $db;

    $result = mysqli_query($db, $query);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return$data;
}

?>