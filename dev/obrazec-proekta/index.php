<?php $title = 'Проект обоснования сметы';?>
<?php $description = 'Пример проекта обоснования сметы на строительство дома';?>
<?php $keywords = 'Проект обоснования сметы';?>
<?php $breadcrumb = 'Проект обоснования сметы';?>
<?php $root = '../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="container">

  <h1>Проект обоснования сметы (эскизный проект)</h1>
  <p>Выполним разработку проекта Вашего будущего дома. В проект входят:</p>
  <ul>
    <li>&mdash;&nbsp;отделочные планы;</li>
    <li>&mdash;&nbsp;фасады и разрезы;</li>
    <li>&mdash;&nbsp;спецификации;</li>
    <li>&mdash;&nbsp;планы перекрытий;</li>
    <li>&mdash;&nbsp;фундамента и кровли;</li>
    <li>&mdash;&nbsp;визуализация.</li>
  </ul>
<?php
$preview = 'preview/';
$photo_title = 'Фотография эскизного проекта';
$photo_alt = 'Фотография эскизного проекта';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."blocks/img-list.php");
?>
</div>

<?php include($root."blocks/footer.php");?>
<style>.fancybox-thumb img:hover {-webkit-transform: none;-moz-transform: none;-o-transform: none;}</style>