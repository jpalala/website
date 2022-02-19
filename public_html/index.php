<?php
  $dir= __DIR__ . "/../";
?>
<!doctype html>
<html>
<head>
<?php
  require $dir . 'views/partials/head.phtml';
?>
</head>
<body>
  <div class="container">
  <?php
    require $dir . 'views/partials/header.phtml';
  ?>
    <main>
    <?php
      require('../app/router.php');
    ?>
    </main>
  </div>
</body>
</html>