<?php
require_once('config.php');

//su dung cho them sua xoa
function execute($sql) {
    //save data  into table
    // open connection to database
    $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    //insert,update,delete
    mysqli_query($con,$sql);
    //close connect
    mysqli_close($con);
}

//tra ve ket qua truy van sql
function executeResult($sql) {
    //save data  into table
    // open connection to database
    $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    //insert,update,delete
    $result = mysqli_query($con,$sql);
    $data =[];
    while($row = mysqli_fetch_array($result,1)){
        $data[] = $row;
    }
    //close connect
    mysqli_close($con);

    return $data;
}
?>