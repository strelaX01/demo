<?php 
session_start(); 
include "conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate( $_POST['uname' ]);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if($row['username'] === $uname && $row['password'] === $pass){
                $_SESSION['username'] = $row['username'];
                $S_ESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("location:../index.php");
                exit();

            }else{
                header("location: login.php?error=Incorect user name or password");
                exit();
            }
		}else{
            header("location: login.php?error=Incorect user name or password");
            exit();
        }
	}
	
}else{
	header("Location: login.php");
	exit();
}