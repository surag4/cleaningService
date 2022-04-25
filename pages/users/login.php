<?php
	$title = "Safari Express | Login";
	$message="";
	$conn = new DatabaseTable('users');
	$data=$conn->findAll();
	
	if(isset($_POST['logout'])){
		session_unset();
		header('location:index.php?page=userhome');
	}
	$_SESSION["login"]=0;
	$_SESSION["userID"]=0;
	if(isset($_POST['login'])){
		$bol=0;
		foreach($data as $value){
			if($value['userName']==$_POST['userName'] && $value['password']==$_POST['password'] && $value['role']=='user'){
				$bol=1;
				echo "User login Success";
				$_SESSION["login"]=1;
				$_SESSION["userName"]=$_POST['userName'];
				$_SESSION["userID"]=$value['userID'];
				$_SESSION["role"]=$value['role'];	
				header('location:index.php?page=userhome');
			}
			elseif($value['userName']==$_POST['userName'] && $value['password']==$_POST['password'] && $value['role']=='staff'){
				$bol=1;
				echo "Staff login Success";
				$_SESSION["login"]=1;
				$_SESSION["userName"]=$_POST['userName'];
				$_SESSION["role"]=$value['role'];
				header('location:../admin/index.php');
			}
			elseif($value['userName']==$_POST['userName'] && $value['password']==$_POST['password'] && $value['role']=='admin'){
				$bol=1;
				echo "Admin login Success";
				$_SESSION["login"]=1;
				$_SESSION["userName"]=$_POST['userName'];
				$_SESSION["role"]=$value['role'];
				header('location:../admin/index.php');
			}
			else{
			}
			
		}
		
		if($bol!=1){
			$message="Incorrect Credentials! Please Check Your Login Details Or Contact The Administration.";
		}
	}


	$content = loadTemplate('../templates/users/loginTemplate.php', ['message'=>$message]);//load template
?>