<?php $title = 'День города Владимира 2014';?>
<?php $description = 'День города Владимира 2014, компания Golden Home стала спонсором силового экстрима на дне города';?>
<?php $keywords = '';?>
<?php $breadcrumb = 'День города Владимира 2014';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">
<?php include($root."blocks/breadcrumbs.php");?>
  <h1 class="h1_small">Силовой экстрим на дне города Владимира 2014</h1>
  
  <div class="center-block" style="text-align:center">
        <iframe class="center-block" width="480" height="360" src="//www.youtube.com/embed/5e-TSNKGpH8" frameborder="0" allowfullscreen></iframe>
  </div>
<?php
$photo_title = 'Фотография с мероприятия';
$photo_alt = 'Силовой экстрим на дне города Владимира 2014';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."blocks/img-list.php");
?>
</div>

<?php include($root."blocks/footer.php");?>