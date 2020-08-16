<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="pharmacist.css">
    </head>

    <body>

    <?php

            $name="";
            $email="";
            $phone="";
            $NID="";
            $address="";
            $prescrioption="";
            $card_number="";
            $cv_code="";
            $card_owner="";
            $bekash="";

            if(isset($_POST['name'])) $name = $_POST['name']; 
            if(isset($_POST['email']))  $email = $_POST['email'];
            if(isset($_POST['phone'])) $phone = $_POST['phone'];
            if(isset($_POST['NID']))  $NID = $_POST['NID'];
            if(isset($_POST['address']))  $address = $_POST['address'];
            if(isset($_POST['prescrioption']))  $prescrioption = $_POST['prescrioption'];
            if(isset($_POST['card_number']))  $card_number = $_POST['card_number'];
            if(isset($_POST['cv_code']))  $cv_code = $_POST['cv_code'];
            if(isset($_POST['card_owner']))  $card_owner = $_POST['card_owner'];
            if(isset($_POST['bekash']))  $bekash = $_POST['bekash'];


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

            $sql = "INSERT INTO pharmacist (name, email, phone, NID, address,prescription,card_number,cv_code,card_owner,bekash )
            VALUES ( '$name', '$email', '$phone', '$NID', '$address','$prescrioption','$card_number','$cv_code','$card_owner','$bekash')";

        
            
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
            <h1>Online Medicin Shop</h1><br>
          <div class="pharmacist">
          <form action="" method="post" enctype="multipart/form-data">
        
         <input type="text" name="name"   placeholder="Name"  required/> <br>
         <input type="email" name="email"  placeholder="Email"  required/><br>
         <input type="phone" name="phone"  placeholder="Phone Number"  required /><br>
        <input type="text" name="NID"   placeholder="NID Number"  required /><br>
        <input type="text" name="address" placeholder="Enter your address"  required/><br>

          <h3>Prescription : </h3><br>
         <input type="file" id="myfile" name="myfile"/>

         <h3> Advance Payment</h3>
         
         <h3>CARD NUMBER</h3><br>
            <input type="text" class="card_number" placeholder="Valid Card Number" /><br>
            <input type="text" class="cv_code" placeholder="CV_CODE" /><br>
            <input type="text" class="card_owner" placeholder="Card Owner Names" /><br>
                
             <h3>OR</h3>
            <input type="text" class="bekash" placeholder="Bekash Payment" /> <br>
            <input type="submit" name="submit" value= "Process payment" />



  </form>

<?
$_FILES['file_name']['name']
$_FILES['file_name']['tmp_name']
$_FILES['file_name']['size']
$_FILES['file_name']['type']

if (($_FILES['myfile']['name']!="")){
    // Where the file is going to be stored
     $target_dir = "Process payment/";
     $file = $_FILES['myfile']['name'];
     $path = pathinfo($file);
     $filename = $path['filename'];
     $ext = $path['extension'];
     $temp_name = $_FILES['myfile']['tmp_name'];
     $path_filename_ext = $target_dir.$filename.".".$ext;
     
    // Check if file already exists
    if (file_exists($path_filename_ext)) {
     echo "Sorry, file already exists.";
     }else{
     move_uploaded_file($temp_name,$path_filename_ext);
     echo "Congratulations! File Uploaded Successfully.";
     }
    }
?>

<div>




    </body>
</html>