<?php
if(isset($_POST['submit']))
{
   $name=$_POST['Name'];
   $email=$_POST['Email'];
   $subject=$_POST['Phone'];
   $message=$_POST['Message'];
  
  
   $to="demo2show1@gmail.com";
   
   $body="";
   $body .="from:".$name."\r\n";
   $body .="Email:".$email."\r\n";
   $body .="Message:".$message."\r\n";

   if(mail($to,$subject,$body))
   {
       header("location: index.php?success");
       
   }
}

?>
