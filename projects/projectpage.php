<?php
include('../vendor/autoload.php');
use \Michelf\Markdown;
$pagename = $_GET['page'];
$pagedata = yaml_parse_file("$pagename.yaml");
?>
<?php include('../inc/header.php') ?>
<div class="sidebar">
<h1><a href="<?=$pagedata['link']?>"><?=$pagedata['title']?></a></h1>
<img class="articleimg" src="/img/<?=$pagedata['img']?>"/>
<?=Markdown::defaultTransform(file_get_contents("$pagename.md")) ?>
<?php include('../inc/projects_footer.php') ?>
</div>
<?php include('../inc/footer.php') ?>
