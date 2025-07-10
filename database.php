
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
</head>
<body>
    <?php
    //Database Variable Declarations
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "expenses_db";
    
    //Connection to Datebase
    try {
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    } catch (mysqli_sql_exception) {
        echo "Could not connect. Please check if user info is correct";
    }
    //Connection Check
   if ($conn) {
        echo "Connected sucessfully!";
    }


?>
<br>
<a href="homepage.php">
    <button>Back to homepage!</button>
</a>

</body>
</html>