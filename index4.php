<?php
$fname = mysqli_real_escape_string($con,$_POST['fname']);
$password = mysqli_real_escape_string($con,$_POST['password']);

if ($fname != "" && $password != ""){
    $sql_query = "select count(*) as cntUser from users where fname='".$fname."' and password='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);
    $count = $row['cntUser'];
    if($count > 0){
        $_SESSION['fname'] = $fname;
        echo 1;
    }else{
        echo 0;
    }
}