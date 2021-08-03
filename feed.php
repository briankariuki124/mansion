<?php

//GET PAGE NO TO DISPLAY DATA
$page = $_GET['page'];

//Start from row 0
$start = 0;

//Limit to 3 items being displayed at once
$limit = 3;

require 'conn.php';

//Count total items in db
$total  = mysqli_num_rows(mysqli_query($conn, "SELECT id from feed "));

//We can go atmost to page no.
$page_limit = $total/$limit;

//if page no. is more than the limit, we can't show anything
if ($page<=$page_limit){

    //calculating start for every given page no.
    $start = ($page - 1) * $limit;

    //SQL to fetch data of a range
    $sql = "SELECT * from feed limit $start, $limit";

    //Get result
    $result = mysqli_query($conn, $sql);

    //Add results to an array
    $res = array();

    while ($row  = mysqli_fetch_array($result)){
        array_push($res, array(
            "image" => $row['image'],
            "description" => $row['description'],
            "price"=> $row['price'])
        );
    }

    //Display the array in JSON format
    echo json_encode($res);
}else{
    echo "over";
}