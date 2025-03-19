<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];


      $request = " insert into contact_form(name, email, phone, address) values('$name','$email','$phone','$address') ";
      mysqli_query($connection, $request);
      session_start();
      $_SESSION['success_message'] = "room booked successfully.";
      

   }else{
      echo 'something went wrong please try again!';
   }

?>