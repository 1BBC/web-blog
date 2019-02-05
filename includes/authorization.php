<?php

if(isset($_GET{'logout'})){
	SetCookie("email", '');
    SetCookie("password", '');
    header("Refresh:0; url=index.php");
}
if(isset($_COOKIE{'email'}, $_COOKIE{'password'})){
	$user_info = mysqli_query($connection, "SELECT `user_id`, `login`, `url`, `bio` FROM `users` WHERE `email` = '" . $_COOKIE{'email'} . "' AND `password` = '" . $_COOKIE{'password'} . "' LIMIT 1");

	if(mysqli_num_rows($user_info) > 0) {
		$UI = mysqli_fetch_assoc($user_info);
	}
}


?>