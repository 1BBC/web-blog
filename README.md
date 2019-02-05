# web-blog
Simple web blog on procedural php

## Settings /include/config.php
```php
$config = array(
	'title' => 'WEB BLOG',
	'favicon' => '/images/favicon.png',
	'logo' => '/images/logo.png',
	'footer_text' => 'Копирайт &copy; Сайт 2019',
	'contacts_img' => 'images/contacts_bg.jpg', //bg image on the contact page
	'articles_on_pg' => 3, //number of publications per page
	'admin_id' => 1,	
  // Database Connection Settings
	'db' => array( //
		'server'   => 'localhost', //servername
		'username' => 'root', 
		'password' => '',
		'name' 	   => 'web_blog' //db name
	)
);
```

## Display on page
### index.php
![alt text](http://drive.google.com/uc?export=view&id=1rQMJKqjyZWrVKi7VeoucH0YZR2-gDJLE)
### profile.php
![alt text](http://drive.google.com/uc?export=view&id=1JuhgR6PwnTgVRS2IoJrnxkttkRsV04b0)
