<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>
    <form method="POST">
        <label>Enter a number:</label>
        <input type="text" name="number" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $number = (int)$_POST['number'];
        echo prime($number);
    }

    function prime($num) {
        if ($num < 2) {
            return "$num is not a prime number.";
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return "$num is not a prime number.";
            }
        }
        return "$num is a prime number.";
    }
    ?>
</body>
</html>
