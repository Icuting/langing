<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='landing.css'>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top bg-light">
        <a class="navbar-brand" href="#">Racks</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#hidd" aria-controls="hidd"
            aria-expanded="false" aria-label="Toggle navigation">
            MENU
        </button>    
        <div class="collapse navbar-collapse justify-content-end" id="hidd">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Solution</a></li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Portfolio
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Portfolio</a>
                            <a class="dropdown-item" href="#">Portfolio single</a>
                        </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
<main>
    <section class="slogan">
        <h1>I love to <span class="swap"></span></h1>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <button typy="button" class="btn">Watch video</button>
    </section>
    <section class="slider">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators bg-primary">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/dashboard_full_1.jpg" alt="Первый слайд">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/dashboard_full_2.jpg" alt="Второй слайд">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/dashboard_full_3.jpg" alt="Третий слайд">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="our-services">
        <div class="title-services">
            <p>OUR SERVICES</p>
            <h2>Racks provides a fully<br> featured text services platform!</h2>
        </div>
        <div class="services">
            <div class="layers platform">
                <div class="cricle-layers cricle"><img src="img/iconfinder-layer-4341302_120568.png"></div>
                <p>
                    <span>Unlimited Features</span><br>
                    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.
                </p> 
            </div>
            <div class="options platform">
                <div class="cricle-options cricle"><img src="img/8_122645.png"></div>
                <p>
                    <span>Multiple Functions</span><br>
                    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.
                </p>
            </div>
            <div class="visualization platform"> 
                <div class="cricle-visualization cricle"><img src="img/32officeicons-15_89722.png"></div>
                <p>
                    <span>Advanced Visualizations</span><br>
                    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.
                </p>
            </div>
            <div class="support platform">
                <div class="cricle-support cricle"><img src="img/Help-80_icon-icons.com_57319.png"></div>
                <p>
                    <span>Community & Supports</span><br>
                    Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.
                </p>
            </div> 
        </div>
    </section>
    <section class="more-detalis"> 
        <div class="bg-blue"></div>
        <div class="detalis">
            <h2>
                Turn every channel into a revenue channel and drive business growth
            </h2>
            <button class="btn" type="submit">
                View more detalis
            </button>
        </div>
    </section>
    <section class="our-works">
        <div class="work-title">
            <p>WORKS</p>
            <h2>Recent Works</h2>
        </div>
        <div class="works">
            <div class="example">
                <img src="img/tgfdfd.jpg"/>
                <div class="example-title">
                    <p>ILLUSTRATION</p>
                    <h3>Even the all-powerful Pointing has no control</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
            </div>
            <div class="example">
                <div class="example-title">
                    <p>APPLICATION</p>
                    <h3>Even the all-powerful Pointing has no control</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
                <img src="img/chto-dolzhen-sdelat-kazhdyj-rukovoditel-pered-otpuskom-1.png">
            </div>
            <div class="example">
                <img src="img/Mellyana-font-Demo_Sizimon_271218_prev06.jpg">
                <div class="example-title">
                    <p>WEB DESIGN</p>
                    <h3>Even the all-powerful Pointing has no control</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="our-customer">
        <div class="customer-title">
            <p>
                CUSTOMER SAYS
            </p>
            <h2>
                Our satisfied customer says
            </h2>
        </div>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block sayAbout">
                        <div class="logo-customers">
                            <img src="img/4043255-beard-hipster-male-man_113243.png">
                        </div>
                        <div class="say">
                            <p>
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </p>
                            <p class="name">
                            Dennis Green
                            </p>
                        </div>    
                    </div>
              </div>
              <div class="carousel-item">
                    <div class="d-block sayAbout">
                        <div class="logo-customers">
                            <img src="img/4043255-beard-hipster-male-man_113243.png">
                        </div>
                        <div class="say">
                            <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </p>
                            <p class="name">
                                    Dennis Green
                            </p>
                        </div>
                    </div> 
              </div>
              <div class="carousel-item">
                    <div class="d-block sayAbout">
                        <div class="logo-customers">
                            <img src="img/4043255-beard-hipster-male-man_113243.png">
                        </div>
                        <div class="say">
                            <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </p>
                            <p class="name">
                                    Dennis Green
                            </p>
                        </div>
                    </div> 
              </div>
              <div class="carousel-item">
                    <div class="d-block sayAbout">
                        <div class="logo-customers">
                            <img src="img/4043255-beard-hipster-male-man_113243.png">
                        </div>
                        <div class="say">
                            <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </p>
                            <p class="name">
                                    Dennis Green
                            </p>
                        </div>
                    </div> 
              </div>
              <div class="carousel-item">
                    <div class="d-block sayAbout">
                        <div class="logo-customers">
                            <img src="img/4043255-beard-hipster-male-man_113243.png">
                        </div>
                        <div class="say">
                            <p>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                            </p>
                            <p class="name">
                                    Dennis Green
                            </p>
                        </div>
                    </div> 
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section class="our-achivements">
        <div class="bg-pink"></div>
        <div class="achivements-title">
            <h2>
                Our achievements
            </h2>
            <div class="achivements">
                <div>
                    <p class="enjoy-customers"></p>
                    <p>Customers are satisfied with our professional support</p>
                </div>
                <div>
                    <p class="mix"></p>
                    <p>Amazing preset options to be mixed and combined</p>
                </div>
                <div>
                    <p class="time"></p>
                    <p>Average response time on live chat support channel</p>
                </div>
            </div>
        </div>   
    </section>
    <section class="blog">
        <div class="blog-title">
            <p>BLOG</p>
            <h2>Recent Blog</h2>
        </div>
        <div class="articles">
            <div class="once">
                <img class="cover" src="img/keep_flowers_fresh_9.jpg">
                <div class="when-Who"> 
                    <p>July 12, 2018</p>
                    <p><a href="#">Admin</a></p>
                    <a href="#"><img class="comment" src="img/bubble_comment_talk_icon-icons.com_49865.png"></a>
                </div>
                <p class="review">
                    <a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
                </p>
            </div>
            <div class="once">
                <img class="cover" src="img/rabochee-mesto-xudozhnika_49.png">
                <div class="when-Who"> 
                    <p>
                        July 12, 2018
                    </p>
                    <p>
                        <a href="#">Admin</a>
                    </p>
                    <a href="#"><img class="comment" src="img/bubble_comment_talk_icon-icons.com_49865.png"></a>
                </div>
                <p class="review">
                    <a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
                </p>
            </div>
            <div class="once">
                    <img class="cover" src="img/mau-1140x715.jpg">
                    <div class="when-Who"> 
                        <p>
                            July 12, 2018
                        </p>
                        <p>
                            <a href="#">Admin</a>
                        </p>
                        <a href="#"><img class="comment" src="img/bubble_comment_talk_icon-icons.com_49865.png"></a>
                    </div>
                    <p class="review">
                        <a href="#">Even the all-powerful Pointing has no control about the blind texts</a>
                    </p>
                </div>
        </div>
    </section>
</main>
<footer>
    <div class="wrapper-footer">
    <div class="about-company">
        <h5>Company</h5>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <div class="social">
            <a href="#"><img src="img/twitter_socialnetwork_20007.png"></a>
            <a href="#"><img src="Img/facebook_icon-icons.com_59205.png"></a>
            <a href="#"><img src="img/Instagram_icon-icons.com_66804.png"></a>
        </div>
    </div>
    <div class="quick-links">
        <h5>Quick Links</h5>
        <p><a href="#">Home</a></p>
        <p><a href="#">About</a></p>
        <p><a href="#">Services</a></p>
        <p><a href="#">Portfolio</a></p>
        <p><a href="#">Contact</a></p>
        <p><a href="#">Privacy</a></p>
    </div>
    <div class="Information">
        <h5>Contact Information</h5>
        <div class="our-contact">
            <p><a href="#">198 West 21th Street, Suite 721 New York NY 10016</a></p>
            <p><a href="#">+ 1235 2355 98</a></p>
            <p><a href="#">info@yoursite.com</a></p>
            <p><a href="#">email@email.com</a></p>
        </div>
    </div>
    <div>
        <h5>Newsletter</h5>
        <p>Far far away, behind the word mountains, far from the countries.</p>
        <input class="subscribe" type="text" placeholder="subscribe"/>
    </div>
</div>
<div class="copyright">
    <p>Copyright ©2019 All rights reserved | This template is made with  by &#10084;<a href="#">Colorlib</a></p>
</div>
</footer>
    <script src='script.js'></script>
</body>
</html>