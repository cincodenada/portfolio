<?php
    ini_set('display_errors','On');
    error_reporting(E_ALL);
?>
<?php include('lib/utility.php') ?>
<?php include('inc/header.php') ?>
<h3>I am an engineer, always building, always learning, always curious.</h3>
<ul class="tile_list">
  <?php foreach(glob('projects/*.yaml') as $yaml): ?>
  <?php $info = yaml_parse_file($yaml) ?>
  <li style="background-image: url(img/<?=get_thumb($info['img'],250,250)?>)">
    <div class="imgcover">
    </div>
      <h2><?=$info['title']?></h2>
      <?=empty($info['summary']) ? '' : $info['summary']?>
  </li>
  <?php endforeach ?>
</ul>

<?php include('inc/footer.php') ?>
