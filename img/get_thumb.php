<?php
    ini_set('display_errors','On');
    error_reporting(E_ALL);
?>
<?php
include('../vendor/autoload.php');
print_r($_GET);
$dir = getcwd();
$pi = pathinfo($dir . '/' . $_GET['orig']);
$cropper = new \stojg\crop\CropBalanced($pi['dirname'] . '/' . $pi['basename']);
$newsize = array_map('intval',explode('x',$_GET['size'],2));
$cropped = $cropper->resizeAndCrop($newsize[0],$newsize[1]);
$newfile = sprintf("%s_%sx%s.%s",$pi['filename'],$newsize[0],$newsize[1],$pi['extension']);
if($cropped->writeimage($dir . '/' . $newfile)) {
  header("Location: $newfile");
} else {
  header("HTTP/1.0 500 Server Error");
}
