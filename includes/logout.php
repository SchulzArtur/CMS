<?php session_start(); ?>

<?php
	
				$_SESSION['username'] = null;
				$_SESSION['fistname'] = null;
				$_SESSION['lastname'] = null;
				$_SESSION['user_role'] = null;

			header("Location: ../index.php");
		
	
?>