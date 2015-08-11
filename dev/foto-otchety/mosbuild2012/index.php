<?php $title = 'MosBuild 2012 - мастер-класс по строительству из газобетонных блоков';?>
<?php $description = '';?>
<?php $keywords = '';?>
<?php $breadcrumb = 'MosBuild 2012';?>
<?php $root = '../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">
<?php include($root."blocks/breadcrumbs.php");?>
  <h1>10-13 апреля MosBuild 2012</h1>
  <p>С&nbsp;10&nbsp;по&nbsp;13&nbsp;апреля 2012 года на&nbsp;территории главной выставочной площадки Москвы&nbsp;&mdash; ЦВК &laquo;Экспоцентр&raquo;&nbsp;&mdash; прошла вторая неделя крупнейшей в&nbsp;Европе ежегодной международной строительной и&nbsp;интерьерной выставки MosBuild.</p>
  <p>Компания &laquo;Golden Home&raquo; совместно с&nbsp;компанией <a href="<?php echo HTTP_SERVER;?>gazobloki-bonolit/">Bonolit</a> провела мастер-класс по&nbsp;<a href="<?php echo HTTP_SERVER;?>stroitelstvo/">строительству</a> из&nbsp;газобетонных блоков. 4&nbsp;квадратных метра стены были построены за&nbsp;20&nbsp;минут. Мастера-демонстраторы показали, как выкладывать первый ряд блоков, как нужно наносить клей для газобетона для того, чтобы оптимизировать временные и&nbsp;трудозатраты и&nbsp;как правильно укладывать блоки друг на&nbsp;друга, чтобы не&nbsp;появлялись отклонения по&nbsp;вертикали. А&nbsp;также наглядно продемонстрировали явные преимущества данного материала над другими.</p>
  <p><iframe width="640" height="360" src="http://www.youtube.com/embed/5SXQRXRmBo8?feature=player_embedded" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<?php
$photo_dir = '/image/reports/mosbuild2012/';
$photo_alt = 'Фотография с мероприятия';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."blocks/photo-list.php");
?>
</div>
<?php include($root."blocks/footer.php");?>