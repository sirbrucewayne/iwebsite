<?php
   if(isset($_POST["send"]))
   {

   	    include_once  'database_conn.php';
   	    $name= mysqli_real_escape_string($conn,$_POST['name']);
   	    $email=mysqli_real_escape_string($conn,$_POST['email']);
   	    $college=mysqli_real_escape_string($conn,$_POST['college']);
   	    $btn=$_POST['btn'];
   	    $note=mysqli_real_escape_string($conn,$_POST['note']);
   	    echo $name;

   	    if(empty($name) || empty($email) || empty($college) || empty($note) || empty($btn))
   	    {
   	    	header("Location: ../home.php?required_fields_are_empty");
   	    	exit();
   	    }
   	    else
   	    {
             if(!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/", $college))
             {
             	header("Location: ../home.php?!!ERROR_only_alphabets_are_allowed");
   	    	    exit();
             }
             else
             {
             	  if(!filter_var($email,FILTER_VALIDATE_EMAIL))
              	{
             		   header("Location: ../home.php?ERROR_not_valid");
   	    	         exit();
             	  }
             	/*else{
             		if(!preg_match("/^[a-zA-Z]*$/", $note))
             		{
             			header("Location: ../home.php?required_fields_are_not_valid");
             			   	    	exit();
             		   
             		}*/
             		else
             		{
             			$sql = "INSERT INTO users (name,college,email,btn,note) VALUES('$name','$college','$email','$btn','$note');" ;
            			mysqli_query($conn,$sql);
            			header("Location: ../home.php?saved=SUCCESS");
             		}
             	/*}*/
             }
   	    }
   }

?>