<?php
$breadcrumb2 = 'Купить дом';
$text = 'просмотр';$nomer = $breadcrumb;
$root = '../../'
include($root."blocks/meta.php");
include($root."blocks/header.php");
?>

<div class="container">
<?php include($root."blocks/breadcrumbs.php");?>
<h1><?php echo $breadcrumb; ?></h1>

<div class="row" style="padding-bottom:18px">
    <div class="col-md-8">
		<ul id="imageGallery" style="margin:0;">
<?php
$path = 'img/';
$images = scandir($path);
if (false !== $images) {
	$imgarray = preg_grep('/\\.(?:jpe?g)$/', $images);
	$active = 'active';$text1='';$text2='';$i=0;
	foreach($imgarray as $row) { ?>
<li data-thumb="<?php echo 'img/'.htmlspecialchars(urlencode($row));?>" data-src="<?php echo 'img/'.htmlspecialchars(urlencode($row));?>" class="lslide">
    <img src="<?php echo 'img/'.htmlspecialchars(urlencode($row));?>" class="img-responsive" alt="<?php echo $title;?>">
</li>
<?php $active = '';}} ?>
		</ul>
	</div>
	<div class="col-md-4 proekt">
		<div class="vr-line">
			<div style="background-color:#FFD400; width:100%; text-align:center"><span class="h1"><b><?php echo $bd['cost']; ?></b></span> <i class="fa fa-rub fa-2x"></i></div>
			<div class="h2">Местоположение:</div>
			<div class="price"><?php echo $bd['mesto']; ?></div>
			<div class="h2">Площадь дома:</div>
			<div class="price"><span><?php echo $s_doma; ?><span></div>
			<div class="h2">Площадь участка:</div>
			<div class="price"><span><?php echo $s_uchastka; ?><span></div>
			<button data-toggle="modal" data-target="#modal-zakaz" class="btn-zakaz">Заявка на просмотр</button>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="tck"><?php echo $bd['mesto']; ?></div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <p><?php echo $bd['opisanie']; ?></p>
    </div>
</div>

<?php foreach ($bd['table'] as $row) { ?>
<div class="row">
  <?php foreach ($row as $col) { ?>
    <div class="col-lg-<?php echo round(12/count($row)); ?> col-md-<?php echo round(12/count($row)); ?> col-sm-12 col-xs-12">
     <div class="h2"><?php echo $col['name']; ?>:</div>
      <ul class="atrsul">
	<?php foreach ($col['punkt'] as $punkt) { ?>
        <li class="atrnamepad" id="attr2">
          <div class="atrname"><?php echo $punkt[0]; ?><div class="dot"></div></div>
          <div id="atrtext2" class="atrtext"><?php echo $punkt[1]; ?></div>
        </li>
	<?php } ?>
  	  </ul>
    </div>
  <?php } ?>
</div>	
<?php } ?>

   <div class="warn_block text-center">
      <p style="font-size:18px">Заинтересовались данным домом?</p>
      <p style="font-size:22px">Позвоните нам <strong>+7 (4922) 37-73-94</strong> или <a href="javascript: void(0);" data-toggle="modal" data-target="#modal-zakaz"><b>оставьте заявку</b></a> на просмотр</p>
   </div>   
</div>

<?php include($root."blocks/footer.php");?>
<style>
.row img {margin:0px;}
.lSAction > a {background-color:#333;z-index:1000;}
.btn-zakaz {margin-top: 30px;}
</style>