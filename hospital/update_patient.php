<!DOCTYPE html>

    <head>
        
        <h2>Update Profile</h2>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <link rel="stylesheet" href="appointment.css">
       
    </head>
    <body>
        <form action="" method="post">
        <h2> Update Data ..</h2>
        <h2>Email :</h2>
    
        <input type="email" name="recoveremail" required placeholder="Enter your email"><br>
          <br>
        <input type="submit" name="submit"  value="RETRIEVE"><br>
       </form>
      
      <?php
      if(isset($_POST['recoveremail'])){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="hospital";
            
        // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $email = $_POST['recoveremail'];
            $sql= "SELECT * FROM patient WHERE email='$email' LIMIT 1";
              
            $matches = $conn->query($sql);
                   
            if ($matches->num_rows > 0) {
                while($row = $matches->fetch_assoc()) {
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $phone = $row['phone'];
                    $age = $row['age'];
                    $email = $row['email'];
                    $location = $row['location'];
                   
                }
             }
            else{ 
                if ($conn->query($sql) === TRUE) echo "No record found.";
                else echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        ?>


       
   
        
          <form class="form" action="" method="post" id="registrationForm" enctype="multipart/form-data">
         
       
        
                  
                                            
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          
                          
                          
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                              
                          
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">

                       
                              <input type="text" class="form-control" name="age" id="age" placeholder="Age" title="enter your age.">
                         
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                        
                              <input type="text" class="form-control" name="location" id="location" placeholder="somewhere" title="enter a location">
                         
                              <input type="submit" name="submit" value= "Save" />
                           
              	</form>
              
              
             
        <?php
      }
        
      $first_name="";
      $last_name="";
      $phone="";
      $age="";
      $email="";
      $location="";

          
            if(isset($_POST['first_name'])) $first_name = $_POST['first_name']; 
            if(isset($_POST['last_name']))  $last_name = $_POST['last_name'];
            if(isset($_POST['phone']))  $phone = $_POST['phone'];
            if(isset($_POST['age']))  $age = $_POST['age'];
            if(isset($_POST['email'])) $email = $_POST['email'];
            if(isset($_POST['location']))  $location = $_POST['location'];
         
        if( isset($_POST['email']) ){

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
            $sql = "UPDATE patient SET  first_name='$first_name', last_name='$last_name', phone='$phone', age='$age', email='$email', location='$location' WHERE email='$email'" ;
            

            if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }    
         
                $conn->close();
            }
        ?>
      </div>

      
    </body>
    </html> 