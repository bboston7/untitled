<?php
  require("../common.php");
  $CHARS = 9000;
  $LT = rand(0, $CHARS-1);
  $THREE = rand($LT, $CHARS)
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/0005/style.css">
  </head>
  <body>
    <p>
<?php
      for ($i = 0; $i < $CHARS; ++$i) {
        if ($i == $LT) {
?>
          <a href=<?=$linky?>>
<?php
            if ($THREE == $LT+1) {
?>
              &lt;3
<?php
              ++$i;
            } else {
?>
              &lt
<?php
            }
?>
          </a>
<?php
        } else if ($i == $THREE) {
?>
          <a href=<?=$linky?>>3</a>
<?php
        } else {
?>
          &nbsp;
<?php
        }
      }
?>
    </p>
  </body>
</html>
