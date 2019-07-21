<?php 
	$servername="localhost";
    $username="root";
    $password="";
    $dbname="user";
    
    $connect=mysqli_connect($servername,$username,$password,$dbname);
    
    if(!$connect){
    	die("connection fail").mysqli_connect_error();
    }
    
    $id=$_REQUEST["var1"];
    
  	if(isset($_REQUEST['submit'])){
    
       $name=$_REQUEST['name'];
       $email=$_REQUEST['email'];
       $password=$_REQUEST['password'];
     
        
    $query="INSERT INTO users(Id,Email,Password,Username) VALUES ('$id','$email','$password','$name')";
    	 
    $sql=mysqli_query($connect,$query);
    if($sql){
    	header('Location:h.php');
    }
    }
    
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<table>
	<tr>
    	<td>name</td>
    </tr>
    <tr>
    	<td><input type="text" name="name"></td>
    </tr>
	<tr>
    	<td>email</td>
    </tr>
      <tr>
    	<td><input type="email" name="email"></td>
    </tr>
    <tr>
    	<td>password</td>
    </tr>
      <tr>
    	<td><input type= "password" name="password"></td>
    </tr>
    <tr>
    	<td><input type ="submit" name="submit"></td>
    </tr>


</table>
</form>
</body>
</html>
