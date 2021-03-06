<?php $title = 'Портфолио студии дизайна интерьера Golden Home';?>
<?php $description = 'Студия дизайна интерьеров Golden Home представляет Вам портфолио работ: ознакомьтесь с нашими проектами и фото по дизайну интерьеров и экстерьеров домов, коттеджей и квартир.и';?>
<?php $keywords = 'Дизайн-проекты, реализованные объекты, портфолио';?>
<?php $breadcrumb = 'Портфолио';?>
<?php $breadcrumb2 = 'Дизайн интерьера';?>
<?php $breadcrumb2_url = 'dizayn-interera';?>
<?php $root = '../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="dizayn container-fluid"> 
  <!-- ROW 1 -->
  <div class="row" id="imgd">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-design-portfolio">
      <div class="dizayn-content">
		<?php include($root."blocks/breadcrumbs.php");?>
        <h1>Портфолио</h1>
        <p>Наша задача предложить клиенту такой интерьер, чтобы он, еще только взглянув на макет, сказал: «Это — то, что нужно! Моя мечта». Никто не поспорит: дома должно быть удобно. Поэтому дизайн продуман до мелочей. Мы поможем сделать исключительно Ваш стиль, ведь если просто следовать какой-то модной тенденции, интерьер получится безликим. Мы за индивидуальность. Представляем Вам свое портфолио.</p>
      </div>
    </div>

<?php $dizayn=json_decode('[
{"url":"elegantnyy-interer-gostinoy-i-kuhni","img":"elegantnyy-interer-gostinoy-i-kuhni","text":"Молоко и шоколад. Элегантный интерьер гостиной и кухни"},
{"url":"dvuhkomnatnaya-kvartira","img":"nalivnoy-pol-s-uzorom","text":"Двухкомнатная квартира с наливными полами"},
{"url":"kvartira-studiya","img":"kvartira-studiya","text":"Квартира-студия"},
{"url":"kvartira-v-evropeyskom-stile","img":"gostinaya-v-evropeyskom-stile","text":"Квартира в европейском стиле"},
{"url":"detskaya","img":"dizayn-detskoy-komnaty","text":"Дизайн детской комнаты"},
{"url":"dizayn-dlya-molodoy-semi","img":"dizayn-dlya-molodoy-semi","text":"Дизайн для молодой семьи"},
{"url":"interer-v-zheltyh-tonah","img":"interer-v-zheltyh-tonah","text":"Интерьер в желтых тонах"},
{"url":"belaya-gostinaya","img":"belaya-gostinaya","text":"Интерьер в желтых тонах"},
{"url":"seraya-gostinaya","img":"seraya-gostinaya","text":"Серая гостиная"},
{"url":"interer-hi-tech","img":"interer-hi-tech","text":"Интерьер в стиле Хай-Тек"},
{"url":"kvartira-v-sovremennom-stile","img":"kvartira-v-sovremennom-stile","text":"Квартира в современном стиле"},
{"url":"interer-kottedzha","img":"interer-kottedzha","text":"Интерьер коттеджа"},
{"url":"interer-zagorodnogo-doma","img":"interer-zagorodnogo-doma","text":"Интерьер загородного дома"},
{"url":"salon-krasoty-estel","img":"salon-krasoty-estel","text":"Салон красоты Estel"},
{"url":"salon-krasoty-milan","img":"salon-krasoty-milan","text":"Салон красоты Milan"},
{"url":"stolovaya-loft","img":"stolovaya-loft","text":"Столовая Loft"},
{"url":"dizayn-stomatologii","img":"dizayn-stomatologii","text":"Дизайн стоматологии"},
{"url":"stolovaya-teleperformance","img":"stolovaya-teleperformance","text":"Столовая teleperformance"},
{"url":"kafe-forest","img":"kafe-forest","text":"Кафе forest"},
{"url":"bar","img":"bar","text":"Бар"}
]',true);
foreach ($dizayn as $key => $row) { 
if ($key<4) { ?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-design-portfolio" style="min-height:200px;">
<?php } else {?>
    <div  id="img<?php echo $key; ?>" class="col-lg-4 col-md-4 col-sm-6 col-xs-12 block-design-portfolio imgd" style="min-height:200px;">
<?php }?>
	<div>
      <a href="/dizayn-proekty/<?php echo $row['url']; ?>/">
      <div class="block">
        <div class="shadow-small"></div>
        <div class="line1 lines"></div>
        <div class="line2 lines"></div>
        <div class="line3 lines"></div>
        <div class="line4 lines"></div>
        <div class="block-content"></div>
        <div class="block-title"><?php echo $row['text']; ?></div>
        <img src="/dizayn-proekty/<?php echo $row['url'].'/'.$row['img']; ?>.jpg" class="img-responsive" alt="<?php echo $row['text']; ?>" title="<?php echo $row['text']; ?>">
      </div>
    </a>
	</div>
    </div>
<?php } ?>

	</div>
</div>
<?php include($root."blocks/footer.php");?>
<script>var imgd_col=document.getElementById('imgd').children.length-1;for(i=4;i<imgd_col;i++){document.getElementById('img'+i).children[0].style.cssText="opacity:0;top:200px";}</script>