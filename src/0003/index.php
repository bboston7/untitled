<?php
  require("../common.php");

  $SCALE_FACTOR = 16;

  $max = 365 * 3 * $SCALE_FACTOR;
  $doy = (date('z') + 1) * $SCALE_FACTOR;
  $dates = range(1, $max);
  shuffle($dates);

  $arrs = array_chunk($dates, $doy);
  $forward = $arrs[0];
  $backward = $arrs[1];
  $pipe = $arrs[2];

  rsort($forward);
  rsort($backward);
  rsort($pipe);

  $next_forward = array_pop($forward);
  $next_backward= array_pop($backward);
  $next_pipe = array_pop($pipe);

  $lucky = $pipe[rand(0, count($pipe)-1)];
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<?php
    for ($i = 1; $i <= $max; ++$i) {
      if ($i == $next_forward) {
        $next_forward = array_pop($forward);
?>
        <span class="leaf">/</span>
<?php
      } else if ($i == $next_backward) {
        $next_backward = array_pop($backward);
?>
        <span class="leaf">\</span>
<?php
      } else if ($i == $next_pipe) {
        $next_pipe = array_pop($pipe);
        if ($i == $lucky) {
?>
          <a href="<?=$linky?>"><span class="trunk">|</span></a>
<?php
        } else {
?>
          <span class="trunk">|</span>
<?php
        }
      } else {
?>
        &nbsp;
<?php
      }
    }
?>
  </body>
</html>
