<?php
//include auth.php file on all secure pages
include("LoginSystem/auth.php");
?>
<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="profile/profile.js">
  <link rel="stylesheet" href="profile/style.css">
</head>
<body>


<?php
            $image="";
            $first_name="";
            $last_name="";
            $phone="";
            $age="";
            $email="";
            $location="";
            

            if(isset($_POST['image'])) $image = $_POST['image'];
            if(isset($_POST['first_name'])) $first_name = $_POST['first_name']; 
            if(isset($_POST['last_name']))  $last_name = $_POST['last_name'];
            if(isset($_POST['phone']))  $phone = $_POST['phone'];
            if(isset($_POST['age']))  $age = $_POST['age'];
            if(isset($_POST['email'])) $email = $_POST['email'];
           if(isset($_POST['location']))  $location = $_POST['location'];
           
           


            if(isset($_POST['first_name'])){

            $servername="localhost";
            $username="root";
            $password="";
            $dbname="hospital";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO patient (image,first_name,last_name,phone,age,email,location )
            VALUES ( '$image','$first_name', '$last_name','$phone','$age', '$email', '$location')";
            
            
        
            
                if($conn->query($sql)=== TRUE)
                {
                    echo "New record created successfully";
                } else 
                {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
        


            $conn->close();
            
            }
    
    ?>



<?php
           /* $servername="localhost";
            $username="root";
            $password="";
            $dbname="hospital";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            
            
            $sql = "SELECT *FROM  patient ORDER BY  id DESC WHERE ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "--->id : " . $row["id"]. "--->Image : " . $row["image"]. " --->First Name : " . $row["first_name"]. " " . $row["last_name"]. "--->Phone :". $row["phone"]."--->Age : " . $row["age"]. "--->Email : " . $row["email"]."--->location :" . $row["location"]. "<br>";
            }
            } else {
            echo "0 results";
            }
            $conn->close();**/
     ?> 





<hr>
<div class="container bootstrap snippet">
    
          <div class="form">
     <p> <h1>Welcome <?php echo $_SESSION['username']; ?> Profile!</h1> </p> <br>
       <p><h2><a href="LoginSystem/logout.php">Logout</a> OR <a href="http://localhost/hospital/update_patient.php">Update</a> Profile ! </h2></p> <br>
      
       </div>
    	
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
        
          <form class="form" action="" method="post" id="registrationForm" enctype="multipart/form-data">
         
         <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" name="image" class="text-center center-block file-upload">
      </div></hr><br>
  
         
        </div><!--/col-3-->
    	<div class="col-sm-9">
            

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>                       
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                            <?
                            echo "$first_name";
                            ?>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                              
                          
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">

                         
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="age"><h4>Age</h4></label>
                              <input type="text" class="form-control" name="age" id="age" placeholder="Age" title="enter your age.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="text"><h4>Location</h4></label>
                              <input type="text" class="form-control" name="location" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<br>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
        </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->

    <hr>

    
</div>
</div>

   
  
</body>
</html> 
