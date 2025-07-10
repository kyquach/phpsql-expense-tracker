<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Expense Tracker</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/main.css">

</head>
    
<body>
    <h1 class="title-styling"> Expense Tracker </h1>
    <section>
        <p class="description-styling">This is an expense tracker app.</p>
    </section>
    <main>
    <!-- Homepage Section --> 
        <section>
            <button type="button"> Login to Database</button>
            <button type="button" onclick=""> Display Database</button>
            <a href="database.php">
                <button type="button"> Check Database Connection</button>
            </a>
           
        </section>
    


    <!-- Expense Form Section -->
        <section>
            <a href="forms/add_expense_form.php">
                <button>Add Expense</button>
            </a>
            <a href="forms/delete_form.php">
                <button>Delete Expense</button>
            </a>
           
            <a href="forms/edit_expense_form.php">
                <button>Edit Expense</button>
            </a>
            
        </section>
    </main>
 

</body>
</html>

