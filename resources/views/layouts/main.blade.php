<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('favicon.ico')}}">
    <title>Кафедра Фотоники И Лазерной Инженерии</title>
    <meta charset="utf-8">
    <link href="{{URL::to('bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::to('styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{URL::to('styles/header.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body id="top">
<header>

    <div class="menu_block">

        <div class="logo text-center">
            <img src="{{URL::to('img/nure1.png')}}">
        </div>


        <!-- MENU -->
        <div class="text-center">
            <nav class="navmenu">
                <ul>
                    <li class="first active scroll_btn"><a href="#top">Главная</a></li>
                    <li class="scroll_btn"><a href="#">Галерея</a></li>
                    <li class="scroll_btn"><a href="#">Абитуриенту</a></li>
                    <li class="scroll_btn"><a href="#">Новости</a></li>
                    <li class="scroll_btn"><a href="#">О Кафедре</a></li>
                    <li class="scroll_btn"><a href="http://cist.nure.ua/ias/app/tt/f?p=778:2:1917547441500311::NO#"
                                              target="_blank">Расписание</a>
                    </li>
                    <li class="scroll_btn last"><a href="#to_contact">Контакты</a>
                </ul>
            </nav>
        </div><!-- //MENU -->
    </div><!-- //MENU BLOCK -->
    </div><!-- //CONTAINER -->
</header><!-- //HEADER -->
</ul>
<!-- ################################################################################################ -->
</nav>

</div>


@yield('content')
<footer id="footer" class="hoc clear">
    <div class="wrapper overlay-footer">

        <!-- ################################################################################################ -->
        <div id="cta" class="group">
            <div class="one_third first"><i class="fa fa-map-marker"></i>
                <p>Координаты</p>
                <p>
                    <a href="https://www.google.ru/maps/dir//50.0147362,36.2280767/@50.0151245,36.2258219,17z/data=!4m2!4m1!3e0">Построить
                        маршрут</a></p>
                <p>Харьков, пр. Науки, 14 <br>3-й этаж <br> ауд.326</p>

            </div>
            <div class="one_third"><i class="fa fa-phone"></i>
                <p>Связаться с нами</p>
                <p><a href="callto:+380577021484">+38 (057) 702 14 84</a></p>
                <p><a href="viber://chat?number=xxxxxxxxxxxxxxxx">Viber</a></p>

            </div>
            <div class="one_third"><i class="fa fa-envelope-o"></i>
                <p>Написать нам</p>
                <p><a href="mailto:d_pfee@nure.ua?">d_pfee@nure.ua</a></p>
            </div>
        </div>


        <div class="wrapper row5">
            <div id="social" class="hoc clear">
                <!-- ################################################################################################ -->
                <div class="one_half first">
                    <h6 class="title">Найти нас</h6>
                    <ul class="faico clear">
                        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="faicon-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <!-- <div class="one_half">
                   <h6 class="title">Newsletter subscription</h6>
                   <form class="clear" method="post" action="#">
                     <fieldset>
                       <legend>Newsletter:</legend>
                       <input type="text" value="" placeholder="Введите ваш email&hellip;">
                       <button class="fa fa-share" type="submit" title="Submit"><em>Submit</em></button>
                     </fieldset>
                   </form>
                 </div>
                 -->
                <!-- ################################################################################################ -->
            </div>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper row6">
            <div id="copyright" class="hoc clear">
                <!-- ################################################################################################ -->
                <p class="fl_left">Кафедра Фотоники и Лазерной Инженерии &copy; 2017 <a href="#">адрес-сайта.домен</a>
                </p>
                <p class="fl_right">Разработчик <a target="_blank" href="http://">Кто разработал</a></p>
                <!-- ################################################################################################ -->
            </div>
        </div>
    </div>
</footer>

<script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::to('js/jquery.backtotop.js')}}"></script>
<script src="{{URL::to('js/to_id_animated.js')}}"></script>
<script src="{{URL::to('js/jquery.PageScroll2id.js')}}"></script>
</body>
</html>
