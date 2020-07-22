<?php
    session_start();
    $con = mysqli_connect('localhost' , 'root');
    mysqli_select_db($con, 'eurosinternprofile');
    $username = $_POST['username'];
    $course = $_POST['course'];
    $college = $_POST['college'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $city = $_POST['city'];
    $linkprofile = $_POST['linkprofile'];
    $file = $_POST['file'];
    $about = $_POST['about'];
    $s = "SELECT * FROM profile where name = '$username'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "username already taken";
    }
    else{
        $reg = "INSERT INTO profile(name , course , college , email , number , city , linkprofile , file , about) VALUES ('$username' , '$course', '$college' , '$email' , '$number' , '$city' , '$linkprofile' , '$file' , '$about')";
        mysqli_query($con , $reg);
        echo "connection sucessfully";
    }


?>

