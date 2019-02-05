<?php
require "/includes/config.php";
?>
<?php 
$errors = array('', '');
$header_title = $config[title] . ' - Регистрация';

if(isset($_POST{'email'}, $_POST{'password'}, $_POST{'login'})){

  $check_user = mysqli_query($connection, "SELECT 1 FROM `users` 
    WHERE `email` = '" . $_POST{'email'} . "' LIMIT 1");

  if(mysqli_num_rows($check_user)){
    $errors[0] = 'Пользователь с таким email уже существует';
  }

  $check_user = mysqli_query($connection, "SELECT 1 FROM `users` 
    WHERE `login` = '" . $_POST{'login'} . "' LIMIT 1");

  if(mysqli_num_rows($check_user)){
    $errors[1] = 'Пользователь с таким логином уже существует';
  }

  if(!$errors[0] && !$errors[1]){
    mysqli_query($connection, 
      "INSERT INTO `users` (`login`, `password`, `email`) 
      VALUES ('" . strip_tags($_POST{'login'}) . "', '" .  $_POST{'password'} . "', '" . $_POST{'email'} . "');");

    SetCookie("email", $_POST{'email'}, time()+86400);
    SetCookie("password", $_POST{'password'}, time()+86400);
    header("Refresh:0; url=/index.php");
  }
}
?>
<?php include "/includes/header.php" ?>
<br>
<br>

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <header class="card-header">
        <a href="/signup.php" class="float-right btn btn-outline-primary mt-1">Войти</a>
        <h4 class="card-title mt-2">Регистрация</h4>
      </header>
      <article class="card-body">
        <form action="/registration.php" method="POST">
          <div class="form-group">
            <label>Адрес электронной почты</label>
            <input type="email" name="email" class="form-control" placeholder="example@mail.com" value="<?php echo $_POST{'email'} ?>" required>
            <small  class="text-danger"><?php echo $errors[0]?></small>
          </div> <!-- form-group end.// -->
          <div class="form-group">
            <label>Логин</label>
            <input type="text" name="login" class="form-control" placeholder="Имя учётной записи " value="<?php echo $_POST{'login'} ?>" required>
            <small  class="text-danger"><?php echo $errors[1]?></small>
          </div> <!-- form-group end.// -->
          <div class="form-group">
            <label>Пароль</label>
            <input class="form-control" type="password" name="password" placeholder="Пароль к вашей учётной записи" value="<?php echo $_POST{'password'} ?>"required>
          </div> <!-- form-group end.// -->  
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Создать  </button>
          </div> <!-- form-group// -->                                                
        </form>
      </article> <!-- card-body end .// -->
      <div class="border-top card-body text-center"> У вас уже есть аккаунт? <a href="/signup.php">Войти</a></div>
    </div> <!-- card.// -->
  </div> <!-- col.//-->

</div> <!-- row.//-->
</div> 
<!--container end.//-->
