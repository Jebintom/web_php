<?php
function add_five(&$value)
{
    $value+=94;
}
$num=2;
add_five($num);
echo "Num=$num";
?>