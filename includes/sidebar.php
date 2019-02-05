<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Поиск</h5>
      <div class="card-body">
        <form action="/" method="GET">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Ваш запрос..." value="<?php echo strip_tags($_GET[q])?>">
          </div>
        </form>
      </div>
    </div>
    
    <?php 
      $categories = mysqli_query($connection, 
        "SELECT * FROM `articles_categories` ORDER BY `name`");
    ?>
    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">Категории</h5>
      <div class="card-body">
        <div class="row">
          <?php 
          while($cat = mysqli_fetch_assoc($categories))
          {
           ?>
           <a class="col-md-6" href="/?categorie_id=<?php echo $cat['categorie_id']; ?>"><?php echo $cat[name]; ?></a>
           <?php
         }
         ?>
       </div>
     </div>
   </div>

   <!-- Side Widget -->
   <div class="card my-4">
    <h5 class="card-header">Web BLOG</h5>
    <div class="card-body">
      Простой сайт на php
    </div>
  </div>

</div>