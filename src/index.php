<?php
  $dirs = glob('*', GLOB_ONLYDIR);
  $index = rand(0, count($dirs)-1);
  $linky = $dirs[$index];
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div>
      <a href="<?=$linky?>/">....</a>
    </div>
  </body>
</html>
