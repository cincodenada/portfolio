<?php
function get_thumb($imgpath,$w,$h) {
  $pi = pathinfo($imgpath);
  return sprintf('%s/%s_%sx%s.%s',
    $pi['dirname'],
    $pi['filename'],
    $w,$h,
    $pi['extension']
  );
}
?>
