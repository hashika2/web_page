<?php

	$servername="localhost";
    $username="root";
    $password="";
    $dbname="user";
    
    $connect=mysqli_connect($servername,$username,$password,$dbname);
    
    if(!$connect){
    	die("connection fail").mysqli_connect_error();
    }
    
     
	$sno=$_REQUEST["var1"];
    
    echo" stdent no".$sno."<br>";
    
    $query="SELECT Username from users where Id='$sno'";
    $result=mysqli_query($connect,$query);
    while($row=mysqli_fetch_assoc($result)){
    	
        echo "Student name :".$row['Username'];
    	
    }
    
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="view.php" method="post">

	
</form>
</body>
</html>
