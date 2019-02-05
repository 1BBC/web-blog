<?php
require "includes/config.php";
$header_title = $config[title] . ' - Главная';
$header_active[0] = 'active';
?>
<?php require "includes/header.php"?>
<!-- Page Content -->
<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->
    <?php include "includes/posts.php" ?>

    <!-- Sidebar Widgets Column -->
    <?php include "includes/sidebar.php" ?>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php require "includes/footer.php"?>
