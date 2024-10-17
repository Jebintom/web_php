
<?php
        if(isset($_POST['submit']))
        {
            $servername="localhost";
$password="";
$username="root";
$dbname="jebin";
        $conn=mysqli_connect("localhost","root","","jebin");
        if($conn)
        {
            echo "connected to DB established successfully";
            
                $sql="INSERT INTO testtable (name) VALUES ('$_POST[textfield]')";
                $res=mysqli_query($conn,$sql);
                if($res)
                {
                    echo '<br> Data ihnserted successfully';

                }else{
                    die("error :".mysqli_error($conn));
                }
            }
        else{
            die("connection failed :".mysqli_connect_error());
        }mysqli_close($conn);
    }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <p><label>Text to add:</label>
        <input type="text" name="textfield" size="30"/></p>
        <input type="submit" name="submit"value="inert record"/>
        
</form>    
</body>
</html>