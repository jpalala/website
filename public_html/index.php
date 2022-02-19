<?php
 $dir= __DIR__ . "/../";
?>
<!doctype html>
<html>
    <head>
<?php
 var_dump( $dir );
  require($dir . 'views/partials/head.phtml');
?>

    </head>
    <body>
<?php
  require($dir . 'views/partials/header.phtml');
?>
  <main>
<?php
  require('../app/router.php');
?>
  </main>
  </body>
</html>
