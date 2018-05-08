
<form>
	<input type="email" name="email">
	<button>Enviar</button>
</form>

<?php 
	if (!empty($_GET)) {
		session_start();
		session_unset();
		$_SESSION['email'] = $_GET['email'];
		
	}else{
		session_destroy();
	}

	var_dump($_SESSION);
 ?>