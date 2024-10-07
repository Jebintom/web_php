<?php
if (isset($_POST["submit"])) {
    define("FIVE_DAYS", 60 * 60 * 24 * 5); // Corrected 'defne' to 'define' and updated constant naming
    setcookie("name", $_POST["username"], time() + FIVE_DAYS); // Using 'username' instead of 'name'
    $name = $_POST["username"]; // Capture the submitted username
    echo "Cookie set successfully with the following data: <br>";
    echo "Name: " . htmlspecialchars($name); // Safely output the username
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Login Form</h2>
        <?php
        $error = "";
        if ($error) {
            echo '<div style="color:red;">' . htmlspecialchars($error) . '</div>';
        }
        ?>
        <form method="post" action="savecook.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <button type="submit" name="submit">Submit</button> 
            <button type="submit" name="cancel">Cancel</button>
        </form>
    </body>
    </html>
    <?php
}
?>
