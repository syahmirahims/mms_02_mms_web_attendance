<?php

// database connection
$connection = mysqli_connect("localhost:3308", "root", "12345678", "mms_attendance");

// set timezone
date_default_timezone_set('Singapore');

if (isset($_GET['recordbtn'])) {
    $name = $_GET['name'];
    $category = $_GET['category'];
    $department = $_GET['department'];
    $remarks = $_GET['remarks'];
    $recorded_time = date("H:i:s");
    $recorded_date = date("Y-m-d");
    
    $query = "INSERT INTO january_2021 (fullname, department, category, remarks, recorded_time, recorded_date) VALUES ('$name', '$department', '$category', '$remarks', '$recorded_time', '$recorded_date')";

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script type="text/javascript">alert("Hello, '.$name.', you have successfully selected '.$category.' at '.$recorded_time.'");</script>';
        echo '<script>window.location.href = "/attendance"</script>';

    } else {
        echo "Data Not Recorded..";
    }
}

?>