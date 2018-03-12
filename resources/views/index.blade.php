@extends('layouts.main')
@section('content')
<div class="wrapper bgded" style="background-color: rgba(242, 241, 238, 0.8); margin-bottom: 3%; margin-top: 200px; ">


    <div id="pageintro" class="hoc">


        <!-- ################################################################################################ -->
        <article>
            <div class="overlay inspace-30 btmspace-30 text-center">
                <h2 class="heading">Кафедра Фотоники и Лазерной Инженерии</h2>
                <p><br>
                <h3>Приглашает на обучение<br>
                    Образовательно-квалификационный
                    уровень - бакалавр.<br>
                    Специальность - 152 "Метрология и информационно-измерительная техника"<br>Специализация -
                    "Оптотехника"<br>
                    Форма обучения - дневная и заочная: <br>
                    Для выпускников школ со сроком обучения 4 года,<br>
                    Для младших специалистов 2-3 года.<br></h3>

                </p>
            </div>
            <footer>
                <ul class="nospace inline pushright">
                    <li><a class="btn" href="#">Читать полностью</a></li>
                </ul>
            </footer>
        </article>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3" style="background-color: rgba(242, 241, 238, 0.8); margin-bottom: 3%;">
    <main class="hoc container clear">
        <div class="article_content_row3">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="center btmspace-50">
                <h2 class="heading">Justo non pulvinar</h2>
                <p>Elit nullam facilisis est quis justo viverra hendrerit donec euismod fringilla justo a auctor.</p>
            </div>
            <article class="one_third first btmspace-50">
                <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-500px rightspace-10"></i> <a href="#">Aliquam in
                        lacus</a></h3>
                <p>Bibendum et vestibulum condimentum rutrum arcu sed posuere sem in eu lectus sit amet dolor ultrices
                    suscipit aliquam vestibulum sollicitudin dapibus&hellip;</p>
            </article>
            <article class="one_third btmspace-50">
                <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-adjust rightspace-10"></i> <a href="#">Vel velit
                        malesuada</a></h3>
                <p>Nunc enim sapien elementum ac aliquam in tempus a tortor vivamus at arcu ut tellus fermentum rutrum a
                    eu orci vestibulum ante ipsum primis in faucibus&hellip;</p>
            </article>
            <article class="one_third btmspace-50">
                <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-leaf rightspace-10"></i> <a href="#">Gravida nec
                        non</a></h3>
                <p>Ultrices posuere cubilia curae nam placerat neque eu elit eleifend gravida ut efficitur lacus et ex
                    ullamcorper eget molestie massa lacinia donec euismod&hellip;</p>
            </article>
            <article class="one_third first">
                <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-leanpub rightspace-10"></i> <a href="#">Mauris nam
                        mollis</a></h3>
                <p>Amet nunc feugiat sed volutpat odio mollis duis tellus ante mollis non tellus sit amet facilisis
                    interdum quam morbi imperdiet tincidunt leo ac eleifend&hellip;</p>
            </article>
            <article class="one_third">
                <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-legal rightspace-10"></i> <a href="#">Mauris dui
                        sed</a></h3>
                <p>Elementum mattis vulputate ut euismod vitae nibh nam nulla sapien vehicula nec erat ut sodales
                    tincidunt magna curabitur commodo leo eu felis rhoncus&hellip;</p>
            </article>
            <article class="one_third">
                <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-pied-piper-alt rightspace-10"></i> <a href="#">Vestibulum
                        odio</a></h3>
                <p>Elit nisi tincidunt bibendum lectus condimentum non etiam pulvinar erat et tristique tempor nisi
                    lectus ultricies sapien bibendum interdum sapien&hellip;</p>
            </article>
            <!-- ################################################################################################ -->
            <!-- / main body -->
        </div>
        <div class="clear"></div>
    </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper_row3" style="background-color: rgba(242, 241, 238, 0.8); color: #4A4A4A; margin-bottom: 3%; ">
    <div class='article_content_row4'>
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="center btmspace-50">
                <h2 class="heading">Какая то информация</h2>
                <p>Возможно это будут статьи. Или видео. Или выбранные фото</p>
            </div>
            <ul class="nospace group">
                <li class="one_third first">
                    <article class="element">
                        <figure><img src="{{URL::to('img/320x210.png')}}" alt="">
                            <figcaption><a href="#"><i class="fa fa-eye"></i></a></figcaption>
                        </figure>
                        <div class="excerpt">
                            <h6 class="heading">Заголовок статьи</h6>
                            <time datetime="2017-09-01">2<sup>th</sup> сентября 2017</time>
                            <p>текст статьи&hellip;</p>
                            <footer><a href="#">Читать полностью &raquo;</a></footer>
                        </div>
                    </article>
                </li>
                <li class="one_third">
                    <article class="element">
                        <iframe width="260" height="210" src="https://www.youtube.com/embed/DRa-WP6PDOE" frameborder="0"
                                allowfullscreen></iframe>


                        <div class="excerpt">
                            <h6 class="heading">День открытых дверей в ХНУРЭ</h6>
                            <time datetime="2045-04-05">5<sup>th</sup> April 2045</time>
                            <p>Текст статьи&hellip;</p>
                            <footer><a href="#">Читать полностью &raquo;</a></footer>
                        </div>
                    </article>
                </li>
                <li class="one_third">
                    <article class="element">
                        <figure><img src="{{URL::to('img/320x210.png')}}" alt="">
                            <figcaption><a href="#"><i class="fa fa-eye"></i></a></figcaption>
                        </figure>
                        <div class="excerpt">
                            <h6 class="heading">Заголовок</h6>
                            <time datetime="2045-04-05">5<sup>th</sup> April 2045</time>
                            <p>текст статьи&hellip;</p>
                            <footer><a href="#">Открыть полностью &raquo;</a></footer>
                        </div>
                    </article>
                </li>
            </ul>
            <div id="to_contact">
                <!-- ################################################################################################ -->
            </div>
        </section>
    </div>
</div>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
@endsection



