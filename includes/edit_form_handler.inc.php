<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$expense_name = $_POST["_expense_name"];
$category = $_POST["_category"];
$amount = $_POST["_amount"];
$due_date = $_POST["_due_date"];

try {
    require_once "../database.php";

    $query = "UPDATE expense_table SET 
    expense_name = ?, 
    category_name = ?,
    amount = ?,
    due_date = ? 
    WHERE expense_name =  ?;";

    $stmt = $conn->prepare($query);
    $stmt->execute([$expense_name, $category, $amount, $due_date, $expense_name]);


    $conn->close();
    $stmt = null;
    echo "<script>
        alert('Successfully edited expense!');
        window.location.href = '../homepage.php';
    </script>";



    die();
} catch (Exception $e) {
    die("Query failed: " . $e->getMessage());
}
} else{
    header("Location: ../forms/add_expense_form.php");
}
