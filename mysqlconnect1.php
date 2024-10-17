  <?php 
// $servername="localhost";
// $password="";
// $username="root";
// $dbname="mysql1"; 
// $conn=mysqli_connect($servername,$username,$password,$dbname);
// if($conn)
// echo "connected to ".$dbname."established successfully";
// else
// die("connection failed".mysqli_connect_error());
// ?>
 <?php
$servername="localhost";
$password="";
$username="root";
$dbname="mysql1";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connecton failed".$conn->connect_error);
}
else{
    echo "connected to ".$dbname."established successfully";
}
?>