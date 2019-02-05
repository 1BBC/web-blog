<?php
require "includes/config.php";

if($UI && $_POST[comment]){
  mysqli_query($connection,
   "INSERT INTO `comments` (`user_id`, `article_id`, `comment`) 
   VALUES ('" . $UI[user_id] . "', '" . $_POST[id] . "', '" . strip_tags($_POST[comment]) . "')");
  header("Refresh:0; url=/article.php?id=$_POST[id]#comment");
}
elseif($UI && $_GET[del_comment]){
  mysqli_query($connection,
   "DELETE FROM `comments` WHERE `comment_id` = $_GET[del_comment] AND `user_id` = $UI[user_id]");
  header("Refresh:0; url=/article.php?id=$_GET[id]#comment");
}

$article_data = mysqli_query($connection,
 "SELECT a.`article_id`, a.`title`, a.`image`, a.`text`, a.`categorie_id`, a_c.`name` AS categorie_name, a.`update_date` 
 FROM articles AS a LEFT JOIN articles_categories AS a_c ON a.`categorie_id` = a_c.`categorie_id` 
 WHERE a.`article_id` =" . (int) $_GET['id'] . " ORDER BY a.`article_id` DESC LIMIT 1");

if(!$article_data || !(mysqli_num_rows($article_data))){
  $page_error = 1;
  $header_title = $config[title] . " - Ошибка";
}
else{
  $article = mysqli_fetch_assoc($article_data);
  $header_title = $article[title];
}
?>
<!-- Navigation -->
<?php include "includes/header.php" ?>

<?php 
if($page_error){
  ?>
  <div class="alert alert-warning" role="alert">
    Пост не найдено
  </div>
  <?php
  exit();
}
?>
<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h1 class="mt-4"><?php echo $article[title] ?></h1>

      <!-- Author -->
      <p class="lead">
        <a href="/profile.php?id=<?php echo $config[admin_id] ?>">Admin</a>
      </p>

      <hr>

      Категория:<a href="/?categorie_id=<?php echo $article[categorie_id] ?>"> <?php echo $article[categorie_name] ?></a>

      <!-- Date/Time -->
      <p> Опубликовано: <?php echo $article[update_date] ?></p>

      <hr>

      <!-- Preview Image -->
      <img class="img-fluid rounded" height="300" width="900" src="<?php echo $article[image]?>" alt="">

      <hr>

      <!-- Post Content -->
      <p><?php echo strip_tags($article['text']) ?></p>

      <hr id="comment">
      <?php 
      if($UI){
        ?>
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Оставить комментарий:</h5>
          <div class="card-body">
            <form action="/article.php" method="POST">
              <input name="id" type="hidden" value="<?php echo $_GET[id] ?>">
              <div class="form-group">
                <textarea class="form-control" rows="3" name="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
          </div>
        </div>
        <?php
      }
      ?>

      <!-- Single Comment -->
      <?php 
      $comments = mysqli_query($connection,
        "SELECT c.`comment_id`, c.`user_id`, c.`article_id`, c.`comment`, c.`date`, u.`login`, u.`url` 
        FROM `comments` c LEFT JOIN `users` u ON c.`user_id` = u.`user_id` 
        WHERE c.`article_id` = '" . $_GET[id] . "' ORDER BY c.`comment_id` DESC");

      if($comments && mysqli_num_rows($comments) != 0){

        while($comment = mysqli_fetch_assoc($comments)){

          if($comment[user_id] == $UI[user_id]){
            $del_comment = "<a class=\"text-danger\" href=\"/article.php?id=$_GET[id]&del_comment=$comment[comment_id]\" style=\"font-size: 55%;\">Удалить</a>";
          }
          else{
            $del_comment = '';
          }

          ?>
          <div class="media mb-4">
            <a href="/profile.php?id=<?php echo $comment[user_id]?>">
              <img class="d-flex mr-3 rounded-circle img-respontive" height="50" width="50"  src="<?php echo $comment[url] ?>" alt="">
              <div class="media-body">
                <h5 class="mt-0">
                  <?php echo $comment[login] ?></a> 
                  <small style="font-size: 55%;"><?php $date = new DateTime($comment[date]); echo date_format($date, 'H:i:s d.m.Y') ?></small>
                  <?php echo $del_comment?> 
                </h5>
                <?php echo $comment[comment] ?>
              </div>
            </div>
            <?php
          }
        }
        ?>
      </div>

      <!-- Sidebar Widgets Column -->
      <?php include "includes/sidebar.php" ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
<?php require "includes/footer.php"?>