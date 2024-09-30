<?php
$ages=array(
    "harry"=>21,"ALice"=>23,"jevin"=>12
);
$ages["megha"]=23;
asort(array:$ages);
foreach($ages as $name=>$age)
echo "$name is $age years old\n<br>";
?>