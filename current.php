<?php
// connect to database
include "connection.php";

// turn off auto-commit
mysqli_autocommit($db, FALSE);

// look for a transfer
if ($_POST['submit'] && is_numeric($_POST['amt'])) {
    // add $$ to target account
    $result = mysqli_query($db, "UPDATE users123 SET Cust_balance = Cust_balance + " . $_POST['amt'] . " WHERE C_ID = " . $_POST['to']);
    if ($result !== TRUE) {
        mysqli_rollback($db);  // if error, roll back transaction
    }
   
    // subtract $$ from source account
    $result = mysqli_query($db, "UPDATE users123 SET Cust_balance = Cust_balance - " . $_POST['amt'] . " WHERE C_ID = " . $_POST['from']);
    if ($result !== TRUE) {
        mysqli_rollback($db);  // if error, roll back transaction
    }

    // assuming no errors, commit transaction
    mysqli_commit($db);
}

// get account balances
// save in array, use to generate form
$result = mysqli_query($db, "SELECT * FROM users123");
while ($row = mysqli_fetch_assoc($result)) {
    $accounts[] = $row;
}






// close connection
mysqli_close($db);
?>
<html>
<head></head>
<body>

<h3>TRANSFER</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Transfer $ <input type="text" name="amt" size="5"> from

<select name="from">
<?php
foreach ($accounts as $a) {
    echo "<option value=\"" . $a['C_ID'] . "\">" . $a['C_Name'] . "</option>";   
}
?>
</select>

to

<select name="to">
<?php
foreach ($accounts as $a) {
    echo "<option value=\"" . $a['C_ID'] . "\">" . $a['C_Name'] . "</option>";   
}
?>
</select>

<input type="submit" name="submit" value="Transfer">

</form>

<h3>ACCOUNT BALANCES</h3>
<table border=1>
<?php
foreach ($accounts as $a) {
    echo "<tr><td>" . $a['C_Name'] . "</td><td>" . $a['Cust_balance'] . "</td></tr>";   
}
?>
</table>







</body>
</html>