<div class="col-md-8">
  
  <?php 

  if($_GET[q]){
    $articles_count = mysqli_fetch_assoc(mysqli_query($connection,
     "SELECT COUNT(*) as `count` FROM `articles` WHERE `title` LIKE '%" . $_GET[q] . "%' OR `text` LIKE '%" . $_GET[q] . "%'"));
    $page_title = 'Поиск';
    $where      = "WHERE `title` LIKE '%" . $_GET[q] . "%' OR `text` LIKE '%" . $_GET[q] . "%'";  
  }
  elseif($_GET[categorie_id]){
    $articles_count = mysqli_fetch_assoc(mysqli_query($connection, 
      "SELECT COUNT(*) as `count`, (SELECT `name` FROM `articles_categories` 
      WHERE `categorie_id` = '" . (int)$_GET[categorie_id] . "') AS categorie_name 
      FROM `articles` AS a WHERE a.`categorie_id` = " . (int)$_GET[categorie_id]));
    $page_title = $articles_count[categorie_name];
    $where      = "WHERE a.`categorie_id` = " . (int)$_GET[categorie_id];
  }
  else{
    $articles_count = mysqli_fetch_assoc(mysqli_query($connection, "SELECT COUNT(*) as `count` FROM `articles`"));
    $page_title     = 'Последние записи';
    $where          = '';
  }

  $pg_link[0] = '';
  $pg_link[1] = '';

  if(!$_GET[pg] || $_GET[pg] == 1){
    $_GET[pg]   = 1;
    $pg_link[0] = 'disabled';
  }

  $max_pg = (($articles_count['count'] % $config['articles_on_pg']) > 0) 
    ?   (int)($articles_count['count'] / $config['articles_on_pg']) + 1 
    :   (int)($articles_count['count'] / $config['articles_on_pg']);

  if($_GET[pg] >= $max_pg){
    $_GET[pg]   = $max_pg;
    $pg_link[1] = 'disabled';
  }
  $_GET[pg] -= 1;

  $limit = (int) $_GET[pg] * $config['articles_on_pg'];

  $articles = mysqli_query($connection, 
    "SELECT a.`article_id`, a.`title`, a.`image`, LEFT(a.`text`, 255) AS preview_text, a.`categorie_id`,
       a_c.`name` AS categorie_name, a.`update_date` 
    FROM articles AS a LEFT JOIN articles_categories AS a_c ON a.`categorie_id` = a_c.`categorie_id` $where 
    ORDER BY a.`article_id` DESC LIMIT " . $config['articles_on_pg'] . " OFFSET $limit");
  ?>

  <h1 class="my-4"><?php echo $page_title?>
    <small>Стр.<span class="label label-default"><?php echo ($_GET[pg]+1)?></span></small>
  </h1>

  <?php
  if($articles && mysqli_num_rows($articles) != 0){
    while($article = mysqli_fetch_assoc($articles))
    {
      ?>
      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" height="300" width="750" src="<?php echo $article{image}?>" alt="Card image cap">
        <div class="card-body">
          <div class="text-center">
            <h5><a href="/categorie.php?id=<?php echo $article['categorie_id'] ?>" class="badge badge-dark">
              <?php echo $article['categorie_name'] ?>
            </a></h5>
          </div>
          <h2 class="card-title"><?php echo $article['title'] ?></h2><small></small>
          <p class="card-text"><?php echo strip_tags($article['preview_text']) ?> ...</p>
          <a href="/article.php?id=<?php echo $article['article_id'] ?>" class="btn btn-primary">Читать &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          Опубликовано <?php $date = new DateTime($article['update_date']); echo date_format($date, 'H:i:s d.m.Y'); ?>
          <a href="/profile.php?id=<?php echo $config[admin_id] ?>">Admin</a>
        </div>
      </div>
      <?php
    }
  }
  else{
    ?>
      <div class="alert alert-warning" role="alert">
        По вашему запросу ничего не найдено
      </div>
    <?php
  }
  ?>

  <?php 
    $categorie_input = ($_GET[categorie_id] && !$_GET[q]) 
     ? "<input name=\"categorie_id\" type=\"hidden\" value=\"$_GET[categorie_id]\">" : "";
  ?>
  
  <!-- Pagination -->
  <ul class="pagination justify-content-center mb-4">
    <li class="page-item <?php echo $pg_link[0] ?>">
      <form action="/" method="GET">
        <input name="pg" type="hidden" value="<?php echo $_GET[pg] ?>">
        <?php echo  $categorie_input?>
        <button class="page-link" type="submit">&larr; Назад</button>
      </form> 
    </li>
    <li class="page-item <?php echo $pg_link[1] ?>">
      <form action="/" method="GET">
        <input name="pg" type="hidden" value="<?php echo ($_GET[pg]+2) ?>">
        <?php echo  $categorie_input?>
        <button class="page-link" type="submit"> Вперед &rarr; </button>
      </form> 
    </li>
  </ul>

</div>
