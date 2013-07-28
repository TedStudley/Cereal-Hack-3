<?php
if ( session_status() == PHP_SESSION_NONE ) {
/*	if ( isset($_POST['email'])
	&& $_POST['email'] == 'hacker@hackerlab.com'
	&& $_POST['password'] == 'hacker' ) { */
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['user'] = 'hacker';
/*	} else {
		header('Location: /?loginfailed=true');
		exit;
	} */
}
*/
?>
