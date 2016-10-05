<?php
include('../vendor/autoload.php');
use \Michelf\Markdown;
$alldata = yaml_parse_file("projects.yaml");
$pagename = $_GET['page'];
$pagedata = $alldata[$pagename];
?>
<?php include('../inc/header.php') ?>
<div role="main" class="project_page">
<img class="articleimg" src="/img/<?=$pagename?>.png"/>
<h1><a href="<?=$pagedata['link']?>"><?=$pagedata['title']?></a></h1>
<?php if(file_exists("$pagename.md")): ?>
  <?=Markdown::defaultTransform(file_get_contents("$pagename.md")) ?>
<?php else: ?>
  <?=$pagedata['summary']?>
<?php endif ?>
<?php include('../inc/projects_footer.php') ?>
</div>
<?php include('../inc/footer.php') ?>
