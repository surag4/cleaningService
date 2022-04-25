<?php
	$title = "Customer Support";
	if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && ($_SESSION['role']  == 'staff' || $_SESSION['role'] == 'admin')){
		$connToInsert = new DatabaseTable('contactform');

		if ($_SESSION['role']  == 'admin') {
			$allData=$connToInsert->findcustsv('staffId = "NotAssigned" OR staffId = "staff" OR staffId',$_SESSION['userName'], 'CASE WHEN staffId="NotAssigned" THEN NULL ELSE staffId END ASC');
		} else {
			$allData=$connToInsert->findcustsv('staffId = "NotAssigned" OR staffId',$_SESSION['userName'], 'CASE WHEN staffId="NotAssigned" THEN NULL ELSE staffId END ASC');
		}

		if(isset($_GET['assign'])){
			$values= [
				'cntFormID' => $_GET['assign'],
				'staffId' => $_SESSION['userName']
			];
			$connToInsert->update($values,'cntFormID');
			header('location:index.php?page=customersupport');
		}
		$content = loadTemplate('../templates/admin/custsupTemplate.php', ['allData'=>$allData]);//load template
	}else {
		session_unset();
		header('location:../public_html/index.php?page=login');
	}
?>