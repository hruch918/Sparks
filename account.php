<?php

 include "connection.php";


?>


</head>
<link rel="stylesheet" href="index.css">
<body>

    <div class="container">
        <form name="Usersform" action=" " method="post">

          <h1>Create your account here!!!</h1>

          <label for="C_ID" class="name">Customer ID:</label>
          <input type="number" id="C_ID" name="C_ID" placeholder="Enter ID...for example:1001"><br>

          <label for="fname" class="name">First Name:</label>
          <input type="text" id="fname" name="C_Name" placeholder="Your name.."><br>
      
          <label for="email1" class="emails">Email:</label>
          <input type="email" id="email1" name="C_email" placeholder="Your Email ID..."><br>
      
          <label for="Bal" class="phn">Balance:</label>
          <input type="number" id="Bal" name="Cust_balance" placeholder="Your balance is..."><br>
      
          <button name="submit1" type="submit" value="HTML">Submit</button>

          

        </form>
      </div>

      <?php

      if(isset($_POST['submit1']))
      {

        mysqli_query($db,"INSERT INTO `USERS123` VALUES('$_POST[C_ID]','$_POST[C_Name]','$_POST[C_email]',
        '$_POST[Cust_balance]');");
      }




      ?>
      
    
</body>
</html>