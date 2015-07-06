<?php
	$name = $_POST['name'];
	$password = $_POST['password'];

	if($name != "" && $password != ""){
		echo "вы успешно зарегистрированы";
	}
	else{
		echo "Что-то не так";
	}
?>
