<?php

   if($_SERVER['REQUEST_METHOD']=='GET')
   {
         $Host="localhost"; // Host name
            $username="root"; // Mysql username
            $db_name="contact"; // Database name


            // Create connection    
            $conn = mysqli_connect($Host, $username,'', $db_name);
            // Check connection                                             
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            else {
                echo "Connected successfully";
        
            $name = $_GET['name'];
            $email = $_GET['email'];
            $msg= $_GET['msg'];
              $sql = "insert into contactus (name, email, msg) values ('$name', '$email', '$msg')";
              if (mysqli_query($conn, $sql)) {
          
                  //echo "New record created successfully";
                  echo "<script>alert('Data inserted successfully');</script>";
                  echo "<script>window.location.href='index.html';</script>";
              }
               else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
               } 


            mysqli_close($conn);
            }    
   }
?>