<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'eurosinternprofile');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $mysqli->real_escape_string($_POST['name']);
    $course = $mysqli->real_escape_string($_POST['course']);
    $college = $mysqli->real_escape_string($_POST['college']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $number = $mysqli->real_escape_string($_POST['number']);
    $city = $mysqli->real_escape_string($_POST['city']);
    $linkprofile = $mysqli->real_escape_string($_POST['linkprofile']);
    $file = $mysqli->real_escape_string('./images/'.$_POST['file']);
    $about = $mysqli->real_escape_string($_POST['about']);
    
    $sql = "INSERT INTO profile (name, course, college, email, number, city, linkprofile, file, about) "
            . "VALUES ('$username', '$course', '$college', '$email', '$number', '$city', '$linkprofile', '$file', '$about');";
    if ($mysqli->query($sql) === true) {
        echo "registration sucessfull";
    }
}
?>
