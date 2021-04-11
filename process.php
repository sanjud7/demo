<?php
if(isset($_POST['submit']))
{
   $name=$_POST['Name'];
   $email=$_POST['Email'];
   $phone=$_POST['Phone'];
   $message=$_POST['Message'];
  
   $to="demo@show1@gmail.com";
   if(mail($to,$message,$email))
   {
       header("location: index.php?success");
       
   }
}

?>
