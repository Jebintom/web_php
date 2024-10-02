<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="border" width="500" align="center" cellpadding="10">
        <caption>Powers Table</caption>
        <tr>
            <th>Number</th>
            <th>SquareRoot</th>
            <th>Square</th>
            <th>Cube</th>
            <th>Quad</th>
        </tr>
        <?php
            for($n=1;$n<=10;$n++)
            {
                $root = sqrt($n);
                $square=pow($n,2);
                $cube = pow($n,3);
                $quad = pow($n,4);

                print ("<tr><td>$n</td><td>$root</td><td>$square</td><td>$cube</td><td>$quad</td></tr>");
            }
        ?>
    </table>
</body>
</html>