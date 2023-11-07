<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $connect = mysqli_connect('localhost','root','','test1') or die('Connection Failed:').mysqli_connect_error();
    if(isset($_POST['name']) && isset($_POST['last']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $last = $_POST['last'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (name, last, password) VALUES ('$name', '$last', '$password')";

        $query = mysqli_query($connect, $sql);

        if ($query){
            echo "SUCCESS";
        }
        else{
            echo "FAILED";
        }


    }
    
    

}

//DELETING DATA FROM DATABASE



?>