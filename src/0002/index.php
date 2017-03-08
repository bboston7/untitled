<?php
  $ITERS = 256;
  $MAX = 128;
  $CHARS = array("v", "V", "u", "U");
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <p>
<?php
      for ($i = 0; $i < $ITERS; ++$i) {
        $spaces = rand(0, $MAX);
        $char = $CHARS[rand(1, count($CHARS))];
        for ($j = 0; $j < $spaces; ++$j) {
?>
          &nbsp;
<?php
        }
?>
      <?=$char?>
<?php
      }
?>
    </p>
  </body>
</html>
