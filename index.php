<?php
	session_start();

	if (isset($_SESSION['usuario'])){
		$file_path = 'modulos/menu/menu.php';
		if (file_exists($file_path)) {
			$content = file_get_contents($file_path);
			echo $content;
		} else {
			echo 'El archivo no existe.';
		}
	}else{
		$file_path = 'modulos/login/login.php';
		if (file_exists($file_path)) {
			$content = file_get_contents($file_path);
			echo $content;
		} else {
			echo 'El archivo no existe.';
		}
	}		
		
?>