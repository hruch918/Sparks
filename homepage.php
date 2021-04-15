<?php

include"connection.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
</head>
<link rel="stylesheet" href="index.css">
<body>


<div class="myDiv">

        <h1>Basic Banking System</h1>

        <button id="custbutton" class="float-left submit-button" >View Customers List</button>
        <script type="text/javascript">
        document.getElementById("custbutton").onclick = function () {
        location.href = "transaction.php";
          };
        </script>

        
        

        <button id="transferbutton" class="float-left submit-button" >Transfer Money</button>
        <script type="text/javascript">
        document.getElementById("transferbutton").onclick = function () {
        location.href = "current.php";
          };
        </script>

        <br>

        


    <a href="account.php">Not a member?Please create your Account</a>        
    </div>
  
    
</body>
</html>
