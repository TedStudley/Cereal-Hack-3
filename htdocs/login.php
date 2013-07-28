<?php
if ( session_status() == PHP_SESSION_NONE ) {
		session_start();
		$_SESSION['email'] = 'hacker@hackerlab.com';
		$_SESSION['user'] = 'hacker';
}
?>
