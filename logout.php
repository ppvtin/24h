<?php 
	session_start();
	unset($_SESSION['admin']);
	session_destroy();
	echo '<script>window.location.href = \'http://localhost:81/24h/loginadmin.html\'</script>';
?>
