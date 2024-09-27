<?php declare(strict_types=1);// to check the type rules stricyly
function writeMsg()
{
    echo "hello world! <br>";

}
function family($fname,$year){
    echo "$fname  born in $year <br>";
}
function addnum(int $a,int $b)
{
    return $a+$b;
}
writeMsg();
family("smith","1975");
family("stalin","1978");
family("kai jim","1959");
echo addnum(5,12);
?>