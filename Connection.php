<?php
    $link = mysqli_connect("localhost","root","","mcqs");
    if (mysqli_connect_error()) {
        echo "Error Connecting";
    }
    $query = "Select * from english";
    $result = mysqli_query($con, $query);
    $data = array();
    while($row = mysqli_fetch_row($result)){
        $data[] = $row;
    }
    echo json_encode($data);
?>