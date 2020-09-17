<?php
  require("../common.php");
  $ITERS = 256;
  $MAX = 128;
  $CHARS = array("v", "V", "u", "U");

  $LUCKY = rand(0, $ITERS-1);
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/0002/style.css">
  </head>
  <body>
    <p>
<?php
      for ($i = 0; $i < $ITERS; ++$i) {
        $spaces = rand(0, $MAX);
        $char = $CHARS[rand(0, count($CHARS)-1)];
        for ($j = 0; $j < $spaces; ++$j) {
?>
          &nbsp;
<?php
        }

        if ($i == $LUCKY) {
?>
          <a href="<?=$linky?>"><?=$char?></a>
<?php
        } else {
?>
          <?=$char?>
<?php
        }
      }
?>
    </p>
  </body>
</html>
