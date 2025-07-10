<!DOCTYPE HTML>
<html>
<body>
    <h1>Add Expense Form</h1>
<form action="../includes/add_form_handler.inc.php" method="POST">
    Expense Name: <input type="text" name="_expense_name" required><br>
    Category: <input type="text" name="_category" required><br>
    Amount: <input type="int" name="_amount" required><br>
    Due Date: <input type="text" name="_due_date" ><br>
        <input type="submit">

</form>

<section>
    <a href="../homepage.php">
        <button>Back to homepage.</button>
    </a>
    
</section>
</body>
</html>