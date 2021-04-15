<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div>
    
        <form class="searchlist" method="post" name="form1">

        <div>

            <input type="text" name="search" placeholder="view a customer">
            <button type="submit" name="submit" class="btn"></button>

        </div>
        </form>
    </div>

     <h2>List of all users</h2>
    

    <?php

if(isset($_POST['submit']))
{
    $q=mysqli_query($db,"SELECT * from users123 where C_Name like '%$_POST[search]%' ");

    if(mysqli_num_rows($q)==0)
    {
        echo "Sorry! No book found. Try searching again.";
    }
    else
    {
        echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color: white'>";
            echo "<th>"; echo"C_ID"; echo "</th>";
            echo "<th>"; echo"C_Name"; echo "</th>";
            echo "<th>"; echo"C_email"; echo "</th>";
            echo "<th>"; echo"Cust_balance"; echo "</th>";
        echo "</tr>";


        while($row=mysqli_fetch_assoc($q))
        {

            echo "<tr>";
            echo "<td>"; echo $row['C_ID']; echo "</td>";
            echo "<td>"; echo $row['C_Name']; echo "</td>";
            echo "<td>"; echo $row['C_email']; echo "</td>";
            echo "<td>"; echo $row['Cust_balance']; echo "</td>";
         echo "</tr>";

        }
        echo "</table>";

    }
}

else
{
    $res=mysqli_query($db,"SELECT * FROM `users123`;");

    echo "<table class='table table-bordered table-hover'>";
    echo "<tr style='background-color: white'>";
        echo "<th>"; echo"C_ID"; echo "</th>";
        echo "<th>"; echo"C_Name"; echo "</th>";
        echo "<th>"; echo"C_email"; echo "</th>";
        echo "<th>"; echo"Cust_balance"; echo "</th>";
    echo "</tr>";


    while($row=mysqli_fetch_assoc($res))
    {

        echo "<tr>";
        echo "<td>"; echo $row['C_ID']; echo "</td>";
        echo "<td>"; echo $row['C_Name']; echo "</td>";
        echo "<td>"; echo $row['C_email']; echo "</td>";
        echo "<td>"; echo $row['Cust_balance']; echo "</td>";
     echo "</tr>";

    }
    echo "</table>";
}
       

        $res=mysqli_query($db,"SELECT * FROM `users123`;");

        echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color: white'>";
            echo "<th>"; echo"C_ID"; echo "</th>";
            echo "<th>"; echo"C_Name"; echo "</th>";
            echo "<th>"; echo"C_email"; echo "</th>";
            echo "<th>"; echo"Cust_balance"; echo "</th>";
        echo "</tr>";


        while($row=mysqli_fetch_assoc($res))
        {

            echo "<tr>";
            echo "<td>"; echo $row['C_ID']; echo "</td>";
            echo "<td>"; echo $row['C_Name']; echo "</td>";
            echo "<td>"; echo $row['C_email']; echo "</td>";
            echo "<td>"; echo $row['Cust_balance']; echo "</td>";
         echo "</tr>";

        }
        echo "</table>";

    
            




    ?>



    
</body>
</html>