<?php $servername="localhost";
    $username="root";
    $password="";
    $dbname="user";
    
    $connect=mysqli_connect($servername,$username,$password,$dbname);
    
    if(!$connect){
    	die("connection fail").mysqli_connect_error();
    }
    echo "conection success";
?>