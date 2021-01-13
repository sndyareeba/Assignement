<?php


require("Database.php");

//Allowing the user to use their username or Email////
    
if (isset($_POST['login_submit'])){
$User = $_POST['Username'];

	
	$pass = $_POST['Password'];
	
	if(empty($User) || empty($pass) ){
		
			
header("Location: User_Access.php?error=emptyfields");
		exit();
		 		
	}
else

{
	
	 
	 	
	$sql = "SELECT * FROM iap.users  WHERE Username=? OR Email=?;";
		$stmt = mysqli_stmt_init($conn);
		
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: User_Access.php?error=sqlerror");
		exit();
			
		}


	else {
		// passing the parameters 
		mysqli_stmt_bind_param($stmt, "ss", $User, $User);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		 
		 	if($row = mysqli_fetch_assoc($result)){
		
			 $check = password_verify($pass , $row['Password']);
				if ($check == false){
					header("Location: User_Access.php 	error=wrongpassword");
			
				exit();
				}
			
		else if ($check == true){
		
			session_start();
			
			$_SESSION['Username'] = $row['Username'];
				
		header("Location: Main_Site.php?loginsuccessful");
		exit();
		}
			 
		
		else{ 
			header("Location: User_Access.php?error=nouser");
			
			exit();
		}

			}
	}
}
 }
	


?>