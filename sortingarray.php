<?php
$fruits=array("orange","grapes","apple","banana");
sort($fruits);
foreach($fruits as $x)
{
    echo $x;
    echo"<br>";
}
echo "in reverse<br>";
rsort($fruits);
foreach($fruits as $x)
{
    echo $x;
    echo"<br>";   
}
$ages=array("peter"=>22,"ben"=>54,"joe"=>34);

asort($ages);
foreach($ages as $x=>$i)
{
    echo " $x is the age of $i";
    echo"<br>";   
}
?>