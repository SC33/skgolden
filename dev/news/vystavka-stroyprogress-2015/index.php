<?php $title = 'Выставка Стройпрогресс-2015 во Владимире';?>
<?php $description = 'Выставка Стройпрогресс-2015 во Владимире компания Golden представила свои проекты в рамках выставки';?>
<?php $keywords = '';?>
<?php $breadcrumb = 'Стройпрогресс-2015';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">
  <h1 class="h1_small">Выставка "Стройпрогресс-2015"</h1>
<?php
$photo_title = 'Фотография с мероприятия';
$photo_alt = 'Силовой экстрим на дне города Владимира 2014';
$photo_col = 'Выставка Стройпрогресс-2015'; 
include($root."blocks/img-list.php");
?>
</div>

<?php include($root."blocks/footer.php");?>