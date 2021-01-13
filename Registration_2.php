<?php

require("Database.php");
		$User = $_POST['Username'];
		$UserEmail = $_POST['Email'];
		$pass = $_POST['Password'];
     	$repass = $_POST['pass_rep'];
		$last = $_POST['lname'];
		$first = $_POST['fname'];

if (isset($_POST['signup_submit'])){
	
	
/// Error handlers///////
	
	if(empty($User) || empty($UserEmail) || empty($first) || empty($last)|| empty($pass) || empty($repass)){
	
header("Location:User_Access.php?error=emptyfields&Username".$User."&mail.".$UserEmail);
	exit();
	
	
	
}		else if(!filter_var($UserEmail, FILTER_VALIDATE_EMAIL) && !preg_match(" /^[a-zA-A0-9]*$/",$User)) {
		
				header("Location: User_Access.php ?error=invalidemail&user_id");
		
						exit();
	}  
								else if(!filter_var($UserEmail, FILTER_VALIDATE_EMAIL)){
		
									header("Location: User_Access.php ?error=invalidemail&user_id".$User);
															exit();
			}
	
	/*
else if(!preg_match(" /^[a-zA-A0-9]*$/",$User)){
		
		header("Location: User_Access.php ?error=invalidemail&user_id".$UserEmail);
exit();
		}
	*/
	

	else if ( $pass !== $repass){
			
			header("Location: User_Access.php ?error=passwordcheckl&user_id".$User."&mail=".$UserEmail);	
		
		}
	
	else{
		
	$sql = "SELECT Username FROM iap.users  WHERE Username = ? ";
	
	$stmt = mysqli_stmt_init($conn);
		
		if(!(mysqli_stmt_prepare($stmt, $sql)))
	   {	
	header("Location: Users_Access.php?error=sqlerror");
   exit();	   
	
	}
	
	
	else{
		mysqli_stmt_bind_param($stmt, "s",$User);
	
mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	$result = mysqli_stmt_num_rows($stmt);
		if($result > 0){
		header("Location:Users_Access.php=usertaken&mail=".$UserEmail);
	exit();		
	}
	
	else{	
$sql = "INSERT INTO iap.users(Username, Password, Email,fname,lname)
VALUES(?,?,?,?,?);";
		
	$stmt = mysqli_stmt_init($conn);	
if(!(mysqli_stmt_prepare($stmt, $sql)))
	   {
	header("Location:Users_Access.php?error=sqlerrorfailedtoinsert");   		
	exit();	   
	
	}
	

		
else  {

/*	$hashpass = password_hash($pass,PASSWORD_DEFAULT);
	mysqli_stmt_bind_param($stmt, "sssss",$User,$hashpass,$UserEmail,$first,$last);
*/	
mysqli_stmt_execute($stmt);

	header("Location:Profile.php?signupsuccess");
	exit();		
			 
		}
	
	
	}
	
	
}
mysqli_stmt_close($stmt);
	mysqli_close($conn);
 
}


}


/////Simple code /////////
/*
	
	$User = $_POST['Username'];
	$UserEmail = $_POST['Email'];
	$pass = $_POST['Password'];
     $repass = $_POST['pass_rep'];


	
		$sql = "INSERT INTO iap.users
(Username, Password, Email)
VALUES('$User', '$UserEmail', '$pass');
";
		
		 mysqli_query($conn, $sql);

header("Location: Main_Site.php?signup=success");*/


?>




