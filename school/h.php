  <!doctype html>
<html>
<head>

<title>Untitled Document</title>
<link href="style.css" rel="stylesheet">
</head>

<body>
<form action="" method="post">
 <input type="text" name="sno" ><input type="submit" name="submit">
 
 
 </form>
</body>
</html>
 
 <?php 
 	$servername="localhost";
    $username="root";
    $password="";
    $dbname="user";
    
    $connect=mysqli_connect($servername,$username,$password,$dbname);
    
    if(!$connect){
    	die("connection fail").mysqli_connect_error();
    }
    echo "conection success";
    
    $sql="SELECT Id from users";
    $qery=mysqli_query($connect,$sql);
    
    $student_no=0;
    $found=0;
    
    if(isset($_REQUEST['submit'])){
    	$student_no=$_REQUEST['sno'];
        	
        while($row=mysqli_fetch_array($qery)){
        	
            
            if($student_no==$row['Id']){
            	$found=1;
                break;
            }
            else{
            	$found=0;
        }
       } 
         if($found==1)
        	header('Location:view.php?var1='.$student_no);
    	else
        	header('Location:add.php?var1='.$student_no);
        
    }
   
    
    ?>
