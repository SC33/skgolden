<?php $title = 'Калькулятор расчета объема газобетонных блоков Bonolit';?>
<?php $description = 'Калькулятор для расчета необходимиого объема газобетонных блоков Bonolit для строительства вашего дома';?>
<?php $keywords = 'расчет газобетона дом, калькулятор';?>
<?php $breadcrumb = 'Калькулятор стоимости';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once($root."/config.php");
$style = '<link href="'.HTTP_URL.'calc.css" type="text/css" rel="stylesheet" />';
$script = '<script language="javascript" type="text/javascript" src="'.HTTP_URL.'calc.js"></script>';
include($root."/blocks/meta.php");
include($root."/blocks/header.php");?>

<div class="container">
            <h1>Калькулятор</h1>

            <div id="calc">
                <ul class="inlinia bldng">
                    <li class="calc_text">Длина дома, м</li>
                    <li class="calc_input">
                        <input type="text" id="b1">
                    </li>
                    <li class="calc_text">Толщина наружной стены, мм</li>
                    <li class="calc_input">
                        <select id="b4">
                            <option value="0.2" selected="">200</option>
                            <option value="0.25">250</option>
                            <option value="0.3">300</option>
                            <option value="0.35">350</option>
                            <option value="0.375">375</option>
                            <option value="0.4">400</option>
                            <option value="0.5">500</option>
                        </select>
                    </li>
                    <li class="calc_text">Ширина дома, м</li>
                    <li class="calc_input">
                        <input type="text" id="b2">
                    </li>
                    <li class="calc_text">
                        Толщина внутренних несущих
                        <br>
                        стен, мм
                    </li>
                    <li class="calc_input">
                        <select id="b8">
                            <option value="0.2" selected="">200</option>
                            <option value="0.25">250</option>
                            <option value="0.3">300</option>
                            <option value="0.35">350</option>
                            <option value="0.375">375</option>
                            <option value="0.4">400</option>
                            <option value="0.5">500</option>
                        </select>
                    </li>
                    <li class="calc_text">Длина внутренних несущих стен, м</li>
                    <li class="calc_input">
                        <input type="text" id="b6" value="0">
                    </li>
                    <li class="calc_text">Наличие перегородок</li>
                    <li class="calc_input">
                        <select id="baffle_trigger">
                            <option value="0" selected="">Нет</option>
                            <option value="1">Есть</option>
                        </select>
                    </li>
                    <span id="baffle">
                        <li class="calc_text"></li>
                        <li class="calc_input"></li>
                        <li class="calc_text">Общая длина перегородок, м</li>
                        <li class="calc_input">
                            <input type="text" id="b105">
                        </li>
                        <li class="calc_text"></li>
                        <li class="calc_input"></li>
                        <li class="calc_text">Толщина перегородок, мм</li>
                        <li class="calc_input">
                            <select id="b106">
                                <option value="0.075" selected="">75</option>
                                <option value="0.1">100</option>
                                <option value="0.15">150</option>
                                <option value="0.2">200</option>
                            </select>
                        </li>
                    </span>
                </ul>
                <ul class="inlinia floor first">
                    <li class="floor_name">
                        <h2>1 этаж</h2>
                    </li>
                    <li class="calc_text">Высота от пола до потолка, м</li>
                    <li class="calc_input">
                        <input type="text" class="floor_height">
                    </li>
                    <li class="calc_text floor_quant">Количество этажей данного типа</li>
                    <li class="calc_input floor_quant">
                        <input type="text" value="1" class="quant">
                    </li>
                    <li></li>
                    <li class="calc_text">Тип перекрытий</li>
                    <li class="calc_input">
                        <select class="floor_type_trigger">
                            <option value="0">Деревянные</option>
                            <option value="1">Другие</option>
                        </select>
                    </li>
                    <span class="floor_type">
                        <li></li>
                        <li class="calc_text">
                            Толщина блоков
                            <br>
                            в уровне перекрытия, мм
                        </li>
                        <li class="calc_input">
                            <select class="b78">
                                <option value="0.075" selected="">75</option>
                                <option value="0.1">100</option>
                                <option value="0.15">150</option>
                                <option value="0.2">200</option>
                                <option value="0.25">250</option>
                                <option value="0.3">300</option>
                                <option value="0.375">375</option>
                                <option value="0.4">400</option>
                                <option value="0.5">500</option>
                            </select>
                        </li>
                    </span>
                    <li> </li>
                    <li>
                        <h4>Проёмы в наружных стенах</h4>
                    </li>
                    <li class="calc_act_block">
                        <a class="calc_act" data-type="outer" href="#">
                            добавить проём
                            <span>+</span>
                        </a>
                    </li>
                    <li>
                        <h4>Проёмы во внутренних несущих стенах</h4>
                    </li>
                    <li class="calc_act_block">
                        <a class="calc_act" data-type="inner" href="#">
                            добавить проём
                            <span>+</span>
                        </a>
                    </li>
                </ul>
                <ul class="inlinia floor add_floor">
                    <li>
                        <button>
                            <span>Добавить этаж</span>
                        </button>
                    </li>
                    <li class="calc_text">Тип этажа</li>
                    <li class="calc_input">
                        <select>
                            <option value="0" selected="">Полный</option>
                            <option value="1">Мансардный</option>
                        </select>
                    </li>
                </ul>
                <p id="total_btn">
                    <span id="total_error"></span>
                    <button>
                        <span>Рассчитать</span>
                    </button>
                </p>
                <div id="res">
                    <ul class="inlinia">
                        <li>
                            <h2>Результат вычислений</h2>
                        </li>
                        <li class="calc_text">
                            <b>1.</b>
                            Объем блоков для наружных стен, м³
                        </li>
                        <li class="calc_input" id="b76"></li>
                        <li class="calc_text">
                            <b>2.</b>
                            Объем блоков для внутренних несущих стен, м³
                        </li>
                        <li class="calc_input" id="b102"></li>
                        <li class="calc_text">
                            <b>3.</b>
                            Количество U-блоков на проемы наружных стен, шт.
                        </li>
                        <li class="calc_input" id="b69"></li>
                        <li class="calc_text">
                            <b>4.</b>
                            Количество U-блоков на монолитный пояс наружных стен, шт.
                        </li>
                        <li class="calc_input" id="b73"></li>
                        <li class="calc_text">
                            <b>5.</b>
                            Объем блоков в уровне перекрытия, м³
                        </li>
                        <li class="calc_input" id="b79"></li>
                        <li class="calc_text">
                            <b>6.</b>
                            Количество U-блоков на проемы внутренних несущих стен, шт.
                        </li>
                        <li class="calc_input" id="b96"></li>
                        <li class="calc_text">
                            <b>7.</b>
                            Объем блоков на перегородки, м³
                        </li>
                        <li class="calc_input" id="b107"></li>
                        <li class="calc_text">
                            <b>8.</b>
                            Упаковок клея
                        </li>
                        <li class="calc_input" id="b117"></li>
                    </ul>
                    <form action="/basket/" method="post">
                        <input type="hidden" name="calc_b76">
                        <input type="hidden" name="calc_b102">
                        <input type="hidden" name="calc_b69">
                        <input type="hidden" name="calc_b73">
                        <input type="hidden" name="calc_b79">
                        <input type="hidden" name="calc_b96">
                        <input type="hidden" name="calc_b107">
                        <input type="hidden" name="calc_b117">
                        <input type="hidden" name="calc_extra_1" value="0">
                        <!--толщина наружной стены-->
                        <input type="hidden" name="calc_extra_2" value="0">
                        <!--толщина внутренних несущих стен-->
                        <input type="hidden" name="calc_extra_3" value="0">
                        <!--толщина перегородок-->
                        <!--calc_extra_4[] толщина блоков в уровне перекрытия-->
                        <!--calc_extra_5[] кол-во этажей данного типа-->
<!--                        <p id="basket_btn">
                            <button type="submit">
                                <span>Перейти в корзину</span>
                            </button>
                        </p>-->
                    </form>
                </div>
            </div>
            <div id="calc_detail">
                <ul class="inlinia floor standard">
                    <li class="floor_name">
                        <h2></h2>
                        <a href="#" class="calc_act">
                            убрать этаж
                            <span>×</span>
                        </a>
                    </li>
                    <li class="calc_text">Высота от пола до потолка, м</li>
                    <li class="calc_input">
                        <input type="text" class="floor_height">
                    </li>
                    <li class="calc_text floor_quant">Количество этажей данного типа</li>
                    <li class="calc_input floor_quant">
                        <input type="text" value="1" class="quant">
                    </li>
                    <li></li>
                    <li class="calc_text">Тип перекрытий</li>
                    <li class="calc_input">
                        <select class="floor_type_trigger">
                            <option value="0">Деревянные</option>
                            <option value="1">Другие</option>
                        </select>
                    </li>
                    <span class="floor_type">
                        <li></li>
                        <li class="calc_text">
                            Толщина блоков
                            <br>
                            в уровне перекрытия, мм
                        </li>
                        <li class="calc_input">
                            <select class="b78">
                                <option value="0.075" selected="">75</option>
                                <option value="0.1">100</option>
                                <option value="0.15">150</option>
                                <option value="0.2">200</option>
                                <option value="0.25">250</option>
                                <option value="0.3">300</option>
                                <option value="0.375">375</option>
                                <option value="0.4">400</option>
                                <option value="0.5">500</option>
                            </select>
                        </li>
                    </span>
                    <li> </li>
                    <li>
                        <h4>Проёмы в наружных стенах</h4>
                    </li>
                    <li class="calc_act_block">
                        <a class="calc_act" data-type="outer" href="#">
                            добавить проём
                            <span>+</span>
                        </a>
                    </li>
                    <li>
                        <h4>Проёмы во внутренних несущих стенах</h4>
                    </li>
                    <li class="calc_act_block">
                        <a class="calc_act" data-type="inner" href="#">
                            добавить проём
                            <span>+</span>
                        </a>
                    </li>
                </ul>
                <ul class="inlinia floor attic">
                    <li class="floor_name">
                        <h2>Мансардный этаж</h2>
                        <a href="#" class="calc_act">
                            убрать этаж
                            <span>×</span>
                        </a>
                    </li>
                    <li class="calc_text">Высота стен мансардного этажа, м</li>
                    <li class="calc_input">
                        <input type="text" class="floor_height">
                    </li>
                    <li></li>
                    <li class="calc_text">Длина фронтона, м</li>
                    <li class="calc_input">
                        <input type="text" id="b26">
                    </li>
                    <li></li>
                    <li class="calc_text">Высота фронтона, м</li>
                    <li class="calc_input">
                        <input type="text" id="b27">
                    </li>
                    <li> </li>
                    <li>
                        <h4>Проёмы в наружных стенах</h4>
                    </li>
                    <li class="calc_act_block">
                        <a class="calc_act" data-type="outer" href="#">
                            добавить проём
                            <span>+</span>
                        </a>
                    </li>
                    <li>
                        <h4>Проёмы во внутренних несущих стенах</h4>
                    </li>
                    <li class="calc_act_block">
                        <a class="calc_act" data-type="inner" href="#">
                            добавить проём
                            <span>+</span>
                        </a>
                    </li>
                </ul>
                <li class="opening">
                    <ul class="inlinia">
                        <li>
                            <a href="#" class="calc_act">
                                убрать проём
                                <span>×</span>
                            </a>
                        </li>
                        <li class="calc_text">Высота проёма, м</li>
                        <li class="calc_input">
                            <input type="text">
                        </li>
                        <li class="calc_text">Ширина проёма, м</li>
                        <li class="calc_input">
                            <input type="text">
                        </li>
                        <li class="calc_text">Количество проёмов данного типа</li>
                        <li class="calc_input">
                            <input type="text" value="1" class="quant">
                        </li>
                    </ul>
                </li>
            </div>
            <!-- /INDEXAREA -->
            <div style="clear:both;"></div>

</div>
<?php include($root."/blocks/footer.php"); ?>