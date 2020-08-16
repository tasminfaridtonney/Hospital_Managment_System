<?php
//include auth.php file on all secure pages
include("LoginSystem/auth.php");
?>
<!DOCTYPE html>
<head>
  <title>profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="profile/profile.js">
  <link rel="stylesheet" href="profile/style.css">
</head>
<body>

          <?php
            $sql="SELECT * FROM users where username=$username";
            $result=mysqli_query($con,$sql);
            ?>
            <?php
            while($rows=mysqli_fetch_array($result)){
            ?>
                  <form class="form" action="" method="post" >
                      
                              <label for="first_name"><h4>Username</h4></label>
                              <?php echo $rows['username']; ?>
                          
                            <label for="last_name"><h4>Email</h4></label>
                            <?php echo $rows['email']; ?>              
              	</form>  

    </body>
</html> 
