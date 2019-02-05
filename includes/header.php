<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="<?php echo $config[favicon] ?>" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <title><?php echo $header_title?></title>
</head>
<body>
  <h1><?php echo $config[title] ?></h1>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   <div class="container">
     <a class="navbar-brand" href="/"><img src="<?php echo $config[logo] ?>" width="30" height="30" class="d-inline-block align-top"> <?php echo $config[title] ?></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php echo $header_active[0]?>">
          <a class="nav-link" href="/">Главная</a>
        </li>
        <li class="nav-item <?php echo $header_active[1]?>">
          <a class="nav-link" href="/contacts.php">Контакты</a>
        </li>
        <li class="nav-item">

          <?php 
          if(isset($UI)){
            ?>
            <form action="/profile.php">
              <input name="id" type="hidden" value="<?php echo $UI[user_id] ?>">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit"> <?php echo $UI[login] ?></button>
            </form>
            <?php
          }
          else{
            ?>
            <form action="/signup.php">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit"> Войти</button>
            </form>
            <?php 
          }
          ?>

        </li>
      </ul>
    </div>
  </div>
</nav>
