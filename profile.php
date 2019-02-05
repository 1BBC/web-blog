<?php
require "/includes/config.php";
$header_title = $config[title] . ' - Профиль';
?>

<?php include "/includes/header.php" ?>
<br>
<br>

<?php 
if($UI{user_id} == $_GET{id}){

  if(isset($_GET{url}) && isset($_GET{bio})){

    if(isImage($_GET{url}) == false){
      $_GET{url} = 'http://placehold.it/200x200';
    }

    mysqli_query($connection, 
      "UPDATE `users` SET `url` = '" . $_GET{url} . "', `bio` = '" . strip_tags($_GET{bio}) . "' 
      WHERE `user_id` = '" . $UI{user_id} . "'");

    $UI{url} = $_GET{url};
    $UI{bio} = $_GET{bio};
  }
  ?>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <header class="card-header">
          <a href="/?logout=yes" class="float-right btn btn-outline-primary mt-1">Выйти</a>
          <h4 class="card-title mt-2">Профиль</h4>
        </header>
        <article class="card-body">
          <img class="img-responsive img-thumbnail d-block mx-auto" width="200" height="200" src="<?php echo $UI{url} ?>" alt="">
          <h3 class="text-center"><?php  echo $UI{login} ?></h3>
          <form action="/profile.php" method="GET">
            <div class="form-group">
              <input name="id" type="hidden" value="<?php echo $UI{user_id} ?>">
              <label>URL фото</label>
              <input type="text" name="url" class="form-control" placeholder="" value="<?php echo $UI{url} ?>">
              <label>О себе</label>
              <textarea name="bio" class="form-control" rows="3"><?php echo $UI{bio} ?></textarea>
            </div> <!-- form-group end.// -->
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block"> Изменить  </button>
            </div> <!-- form-group// -->                                                
          </form>
        </article> <!-- card-body end .// -->
      </div> <!-- card.// -->
    </div> <!-- col.//-->

  </div> <!-- row.//-->
  <?php
}
else{
  $profile_data = mysqli_query($connection, 
    "SELECT `login`, `url`, `bio` FROM `users` WHERE `user_id` = '" . $_GET{id} . "' LIMIT 1");

  if($profile_data && mysqli_num_rows($profile_data) != 0) {

    $profile = mysqli_fetch_assoc($profile_data);
    ?>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <header class="card-header">
            <h4 class="card-title mt-2">Профиль</h4>
          </header>
          <article class="card-body">
            <img class="img-responsive img-thumbnail d-block mx-auto" width="200" height="200" src="<?php echo $profile{url} ?>" alt="">
            <h3 class="text-center"><?php  echo $profile{login} ?></h3>
            <p class="text-center"><?php  echo $profile{bio} ?></p>
          </article> <!-- card-body end .// -->
        </div> <!-- card.// -->
      </div> <!-- col.//-->

    </div> <!-- row.//-->
    <?php
  }
  else{
    ?>
    <div class="alert alert-warning" role="alert">
      Пользователя не найдено
    </div>
    <?php
  }
}
?>

</div> 
<!--container end.//-->