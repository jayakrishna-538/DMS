@extends('layouts.template')

@section('body')
    <div class="wrapper">
        <div id="slider">
            <div id="slide-wrapper" class="rounded clear">
                <!-- ################################################################################################ -->
                <figure class="slide-1"><a class="view" href="#"><img src="images/demo/slider/a1.png" alt=""></a>
                    <!--<figcaption>
                      <h2>Nullamlacus dui ipsum</h2>
                      <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
                      <p class="right"><a href="#">Continue Reading &raquo;</a></p>
                    </figcaption>-->
                </figure>
                <figure class="slide-2"><a class="view" href="#"><img src="images/demo/slider/a2.png" alt=""></a>
                    <!--<figcaption>
                      <h2>Aliquatjusto quisque nam</h2>
                      <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
                      <p class="right"><a href="#">Continue Reading &raquo;</a></p>
                    </figcaption>-->
                </figure>
                <figure class="slide-3"><a class="view" href="#"><img src="images/demo/slider/a3.png" alt=""></a>
                    <!--<figcaption>
                      <h2>Aliquatjusto quisque nam</h2>
                      <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
                      <p class="right"><a href="#">Continue Reading &raquo;</a></p>
                    </figcaption>-->
                </figure>
                <figure class="slide-4"><a class="view" href="#"><img src="images/demo/slider/a5.jpg" alt=""></a>
                    <!--<figcaption>
                      <h2>Aliquatjusto quisque nam</h2>
                      <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
                      <p class="right"><a href="#">Continue Reading &raquo;</a></p>
                    </figcaption>-->
                </figure>
                <figure class="slide-5"><a class="view" href="#"><img src="images/demo/slider/a5.jpg" alt=""></a>
                    <!--<figcaption>
                      <h2>Dapiensociis temper donec</h2>
                      <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
                      <p class="right"><a href="#">Continue Reading &raquo;</a></p>
                    </figcaption>-->
                </figure>
                <!-- ################################################################################################ -->
                <ul id="slide-tabs">
                    <li><a href=".slide-1">Welcome to CSE Department</a></li>
                    <li><a href=".slide-2">New Department</a></li>
                    <li><a href=".slide-3">Computer Science Lab</a></li>
                    <li><a href=".slide-4">Convocation</a></li>
                    <li><a href=".slide-5">Library</a></li>
                </ul>
                <!-- ################################################################################################ -->
            </div>
        </div>
    </div>


    <div class="wrapper row3">
        <div class="rounded">
            <main class="container clear">
                <!-- main body -->
                <!-- ################################################################################################ -->
                <div class="group btmspace-30">
                    <!-- Left Column -->
                    <div class="two_third first">
                        <!-- ################################################################################################ -->

                        <h2 class="subhead">About CSE Department</h2>
                        <p align="justify">The department of Computer Science Engineering has started offering B.Tech programme since 1989 with an intake of
                            15 students. The present intake for the Bachelor’s course is 60 and is accredited by NBA. For the last two decades
                            the department has an enormous growth in student strength, infrastructure facilities number of courses being offered.
                            Currently, The department is offering B.Tech, M.C.A, and three M.Tech programmes. M.C.A was started in the year 1996
                            with an intake of 30 and now it has been increased to 60. M.Tech in Computer Science was started in 2000, M.Tech in
                            Software Engineering in 2001 and M.Tech in Artificial Intelligence in 2011. The intake to all these programmes is 25.
                            In the year of 2017, the department have started a sweden batch program with an intake of 10 students. This is an 3+1
                            dual degree integration course in collaboration with JNTUA and BTH, sweden. Students are requested to achieve 120
                            credits in JNTUA and 60 credits in Sweden. The department is also having state of the art facilities for carrying out
                            research Department is equipped with three laboratories, One lab is dedicated for B.Tech students, one for Master’s
                            programmes, and one lab for the research to carry out their research.Apart from this, The department maintains a
                            central computing center with over 200 systems where, The 1st year students of all the branches are accessing
                            Computing facilities within and beyond working hours. The entire campus is networked with 1 Gbps internet connectivity
                            so as to enable the students to browse the internet. The department also possesses a library with over 1300 text books,
                            10 journals and around 45 e-learning resources.
                        {{--       </span><button onclick="myFunction()" id="myBtn">Read more>></button></p>--}}
                        {{--                    <script>--}}
                        {{--                        function myFunction() {--}}
                        {{--                            var dots = document.getElementById("dots");--}}
                        {{--                            var moreText = document.getElementById("more");--}}
                        {{--                            var btnText = document.getElementById("myBtn");--}}

                        {{--                            if (dots.style.display === "none") {--}}
                        {{--                                dots.style.display = "inline";--}}
                        {{--                                btnText.innerHTML = "Read more>>";--}}
                        {{--                                moreText.style.display = "none";--}}
                        {{--                            } else {--}}
                        {{--                                dots.style.display = "none";--}}
                        {{--                                btnText.innerHTML = "Read less<<";--}}
                        {{--                                moreText.style.display = "inline";--}}
                        {{--                            }--}}
                        {{--                        }--}}
                        {{--                    </script>--}}
                        <h2 class="subhead">Vision &amp Mission</h2>
                        <p>
                            <strong>Vision</strong><br>
                            To become a center of excellence in computer science education and research by imparting
                            students with latest technical skills through high quality teaching methodologies supplemented
                            with practical orientation to face the challenges in the field of computer science and
                            engineering for the benefit of the society.
                        </p>
                        <p>
                            <strong>Mission</strong><br>
                            To educate and train next generation computer professionals with strong theoretical and practical foundations in computer science discipline
                            To amplify the hidden technical skills in the graduates by cultivating research and apply attitude in the field of computer science and engineering.
                            To instill value-based professional behavior and strong ethical morals in the graduates and motivate them to apply their knowledge to the benefit of the society.
                        </p>

                        <!--<ul class="nospace">
                      <li class="btmspace-15"><a href="#"><em class="heading">Prospective Students</em> <img class="borderedbox" src="images/demo/220x95.gif" alt=""></a></li>
                      <li class="btmspace-15"><a href="#"><em class="heading">Current Students</em> <img class="borderedbox" src="images/demo/220x95.gif" alt=""></a></li>
                      <li class="btmspace-15"><a href="#"><em class="heading">International Students</em> <img class="borderedbox" src="images/demo/220x95.gif" alt=""></a></li>
                      <li><a href="#"><em class="heading">Alumni</em> <img class="borderedbox" src="images/demo/220x95.gif" alt=""></a></li>
                    </ul>-->
                            <!-- ################################################################################################ -->
                    </div>
                    <!-- / Left Column -->
                    <!-- Middle Column -->
                    <!--<div class="one_third">
                      <! ################################################################################################
                      <h2>Latest News &amp; Events</h2>
                      <ul class="nospace listing">
                        <li class="clear">
                          <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
                          <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
                          <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a></p>
                        </li>
                        <li class="clear">
                          <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
                          <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
                          <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.</p>
                        </li>
                        <li class="clear">
                          <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
                          <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
                          <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
                        </li>
                      </ul>
                      <p class="right"><a href="#">Click here to view all of the latest news and events &raquo;</a></p>
                      <! ################################################################################################
                    </div>-->
                    <!-- / Middle Column -->
                    <!-- Right Column -->
                    <div class="one_third sidebar">
                        <h2 class="subhead">Achievements</h2>
                        <div class="achi_container">
                            <marquee scrollamount= "6" direction="up" height="100%" onmouseover="this.stop();" onmouseout="this.start();">
                                <ul class="nospace">
                                    <li class="clear">
                                        <div class="news_box">
                                            <p><img class="news_img" src="images/demo/gallery/achievements.png" alt="">
                                                <b>Geetha Charan</b><br>
                                                Secured AIR 15 in GATE 2022 CS paper.</p>
                                        </div>
                                    </li>
                                    <li class="clear">
                                        <div class="news_box">
                                            <p><img class="news_img" src="images/demo/gallery/achievements.png" alt="">
                                                <b>D Neeraja</b><br>
                                                Got placed in Walmart .</p>
                                        </div>
                                    </li>
                                    <li class="clear">
                                        <div class="news_box">
                                            <p><img class="news_img" src="images/demo/gallery/achievements.png" alt="">
                                                <b>A Lokesh, S V L Chandrika,  V Govardhan</b><br>
                                                Placed in Factset</p>
                                        </div>
                                    </li>
                                    <li class="clear">
                                        <div class="news_box">
                                            <p><img class="news_img" src="images/demo/gallery/achievements.png" alt="">
                                                <b>V Surya Kaushik</b><br>
                                                Placed in ZOHO</p>
                                        </div>
                                    </li>
                                    <li class="clear">
                                        <div class="news_box">
                                            <p><img class="news_img" src="images/demo/gallery/achievements.png" alt="">
                                                <b>K Jaya Krishna, T Bharath, M Jaswanth</b><br>
                                                Placed in Tiger Analytics</p><br>
                                        </div>
                                    </li>
                                    <li class="clear">
                                        <div class="news_box">
                                            <p><img class="news_img" src="images/demo/gallery/achievements.png" alt="">
                                                <b>M Eswar, G Chandra Sekhar, M Srikanth, P Ravi Teja</b><br>
                                                Placed in Axiom io</p>
                                        </div>
                                    </li>
                                </ul>
                            </marquee>
                        </div>

                    </div>

                </div>
                <!-- ################################################################################################ -->
                <!-- / main body -->
                <div id="twitter">
                    <h2 class="subhead">Campus Tour</h2>
                </div>
                <div class="ct">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/RZnympq0Y5U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><div class="clear"></div>
                <br>
                <h2 class="subhead">Our Past Recruiters</h2>
                <p >The department has a remarkable placement statistics and almost all B.Tech students are employed in various companies such as Cognizant, Factset, Tata Consultancy Services, Infosys, Wipro, etc.  Many students are part of startups working in the area of data science and machine learning.</p>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="images/demo/past/1.png" alt="" style="height:100px;width:auto;"></div>
                    <div class="item">
                        <img src="images/demo/past/2.png" alt="" style="height:100px;width:auto;"></div>
                    <div class="item">
                        <img src="images/demo/past/3.png" alt="" style="height:100px;width:auto;"></div>
                    <div class="item">
                        <img src="images/demo/past/4.png" alt="" style="height:100px;width:auto;"></div>
                    <div class="item">
                        <img src="images/demo/past/5.png" alt="" style="height:100px;width:auto;"></div>
                    <div class="item">
                        <img src="images/demo/past/6.png" alt="" style="height:100px;width:auto;"></div>
                    <div class="item">
                        <img src="images/demo/past/7.png" alt="" style="height:100px;width:auto;"></div>
                    <div class="item">
                        <img src="images/demo/past/8.png" alt="" style="height:100px;width:auto;"></div>
                    <div class="item">
                        <img src="images/demo/past/9.png" alt="" style="height:100px;width:auto;"></div>
                </div>
            </main>
        </div>




    </div>


@endsection
