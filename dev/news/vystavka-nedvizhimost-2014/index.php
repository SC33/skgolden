<?php $title = 'Выставка Недвижимость 2014 во Владимире';?>
<?php $description = 'Выставка Недвижимость 2014 компания Golden представила свои проекты в рамках выставки';?>
<?php $keywords = '';?>
<?php $breadcrumb = 'Выставка "Недвижимость 2014"';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">
  <h1 class="h1_small">Выставка "Недвижимость 2014"</h1>
<?php
$photo_title = 'Фотография с мероприятия';
$photo_alt = 'Выставка Недвижимость 2014';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."blocks/img-list.php");
?>
</div>
<?php include($root."blocks/footer.php");?>