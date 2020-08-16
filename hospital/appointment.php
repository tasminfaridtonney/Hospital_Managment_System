<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="appointment.css">
    </head>

    <body>

    <?php

            $name="";
            $age="";
            $gender="";
            $email="";
            $phone="";
            $address="";
            $date="";
            $time="";

            if(isset($_POST['name'])) $name = $_POST['name']; 
            if(isset($_POST['age']))  $age = $_POST['age'];
            if(isset($_POST['gender']))  $gender = $_POST['gender'];
            if(isset($_POST['email']))  $email = $_POST['email'];
            if(isset($_POST['phone'])) $phone = $_POST['phone'];
           if(isset($_POST['address']))  $address = $_POST['address'];
           if(isset($_POST['date']))  $date = $_POST['date'];
           if(isset($_POST['time']))  $time = $_POST['time'];
           


            if(isset($_POST['name'])){

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

            $sql = "INSERT INTO appointment (name,age,gender,email, phone,  address,date,time )
            VALUES ( '$name', '$age','$gender','$email', '$phone',  '$address','$date','$time')";

        
            
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



        <div class="">
        <h1>Make An Appointment</h1><br>
          <div class="Appointment">
          <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name"   placeholder="Enter your name" /><br>
            <input type="text" name="age" placeholder="Age"/><br>
         
           <input type="text" name="gender" placeholder="Male/Female"/><br>
        
            <input type="email" name="email"  placeholder="Email" /><br>
           

            <input type="phone" name="phone"   placeholder="phone" /><br>
       
           <input type="text" name="address" placeholder="Enter your address"/><br>
        
          <input type="date"  name="date" required /><br>
          
           <input type="time"  name="time"required/><br>
         
        <input type="submit" name="submit" value="Submit"/><br>




  </form>



<div>



    </body>
</html>