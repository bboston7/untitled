<?php
  $dirs__ = glob('../*', GLOB_ONLYDIR);
  $index__ = rand(0, count($dirs__)-1);
  $linky = $dirs__[$index__] . "/";
?>
