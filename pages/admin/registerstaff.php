<?php
	$title = "Pals and Partner Cleaning Services";
	if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && ($_SESSION['role'] == 'admin')){
		$connToInsert = new DatabaseTable('users');
		
		if(isset($_POST['registerstaff'])){
			unset($_POST['registerstaff']);
			$connToInsert-> insert($_POST);
			header('location:index.php?page=staff'); 
		}

		if(isset($_GET['sid'])){
			$conn = new DatabaseTable('users');
			$dataa=$conn->find('userID',$_GET['sid']);
			$data=$dataa->fetch();
		}

		$content = loadTemplate('../templates/admin/registerStaffTemplate.php', []);//load template
	}else {
		session_unset();
		header('location:../public_html/index.php?page=login');
	}
?>