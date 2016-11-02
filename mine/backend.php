<?php
  $nameer=$emailer=$msger="";
  
  if($_SERVER["REQUEST METHOD"]=="POST"){
	  if(empty($_POST["name"])){
		  echo("please feel free to say your good name :)") ;
	  }
	  else{
		  $name= test_input($_POST["name"]);
		   if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          echo("Please enter a valid name :)");
     }
	  }
      if(empty $_POST["email"]){
		  echo("Kindly allow me to get back to you by saying your email id :)");
	  }	  
         else{
			 $email= test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo("Invalid email"); 
		 }
		 }
	  if(empty($_POST["message"])) {
		  echo("Kindly say me something when you wish to say :)");
	  }
	  else {
		  $msg= test_input($_POST["message"]);  
	  }
	  }
    function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$to="bgbharath722@gmail.com"
$sub="Message From my Website"
$msg = $_POST["$message"];
$from=$_POST["$email"];
mail($to,$sub,$msg,$from);
?>