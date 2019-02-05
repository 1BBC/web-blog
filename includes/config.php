<?php 

$config = array(
	'title' => 'WEB BLOG',
	'favicon' => '/images/favicon.png',
	'logo' => '/images/logo.png',
	'footer_text' => 'Копирайт &copy; Сайт 2019',
	'contacts_img' => 'images/contacts_bg.jpg',
	'articles_on_pg' => 3,
	'admin_id' => 1,	
	'db' => array(
		'server'   => 'localhost',
		'username' => 'root',
		'password' => '',
		'name' 	   => 'php_blog'
	)
);

$header_active = array('', ''); 
require "db.php";
require "authorization.php";
require "functions.php";
?>