<?php
require "/includes/config.php";

$header_title = $config[title] . ' - Авторизация';

if(isset($_POST{'email'}, $_POST{'password'})){

  $user = mysqli_query($connection, "SELECT 1 FROM `users` WHERE `email` = '" . $_POST{'email'} . "' AND `password` = '" . $_POST{'password'} . "' LIMIT 1");

  if(mysqli_num_rows($user)){
    SetCookie("email", $_POST{'email'}, time()+86400);
    SetCookie("password", $_POST{'password'}, time()+86400);
    header("Refresh:0; url=/index.php");
  }
  else{
    SetCookie("email", '');
    SetCookie("password", '');
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
        <a href="/registration.php" class="float-right btn btn-outline-primary mt-1">Регистрация</a>
        <h4 class="card-title mt-2">Войти</h4>
      </header>
      <article class="card-body">
        <form action="/signup.php" method="POST">
          <div class="form-group">
            <label>Адрес электронной почты</label>
            <input type="email" name="email" class="form-control" placeholder="example@mail.com" value="<?php echo $_POST{'email'} ?>" required>
          </div> <!-- form-group end.// -->
          <div class="form-group">
            <label>Пароль</label>
            <input class="form-control" type="password" name="password" placeholder="Пароль к вашей учётной записи" value="<?php echo $_POST{'password'} ?>"required>
          </div> <!-- form-group end.// -->  
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Войти  </button>
            <?php
            if (isset($user)) {
              if(!(mysqli_num_rows($user))) {
                ?>
                <small  class="text-danger">Вы ввели некорректный e-mail или пароль</small>
                <?php
              } 
            }
            ?>
          </div> <!-- form-group// -->                                                
        </form>
      </article> <!-- card-body end .// -->
      <div class="border-top card-body text-center"> У вас нет аккаунта? <a href="">Зарегистрироваться</a></div>
    </div> <!-- card.// -->
  </div> <!-- col.//-->

</div> <!-- row.//-->

</div> 
<!--container end.//-->
