<?php
    ini_set('display_errors','On');
    error_reporting(E_ALL);
?>
<?php include('lib/utility.php') ?>
<?php include('inc/header.php') ?>
<div id="intro">
  <p>
    I am an engineer, a coder, a humanist.  I've been taking things apart, figuring out how they
    work, and putting them back together as long as I can remember.  I'm inexhaustibly curious,
    and spend a lot of time thinking about how the world works.  You'll find me across the web
    as cincodenada.
  </p>
</div>
    
<div role="main">
<h2>Projects</h2>
<h4>...here are a few of the things I've been working on</h4>
<ul class="tile_list">
  <?php $projects = yaml_parse_file('projects/projects.yaml') ?>
  <?php foreach($projects as $name => $info): ?>
  <li style="background-image: url(img/<?=get_thumb($info['img'],250,250)?>)">
    <a href="/projects/<?=$name?>">
      <h2><?=$info['title']?></h2>
      <span class="link_summary"><?=empty($info['summary']) ? '' : $info['summary']?></span>
    </a>
    <div class="imgcover"></div>
  </li>
  <?php endforeach ?>
</ul>
</div>
<?php include('inc/footer.php') ?>
