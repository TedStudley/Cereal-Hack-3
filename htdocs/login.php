<?php
if ( session_status() == PHP_SESSION_NONE ) {
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['user'] = 'hacker';
}
?>
