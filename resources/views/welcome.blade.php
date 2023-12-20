<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="home.assets/css/fontawesome.css">
    <link rel="stylesheet" href="home.assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="home.assets/css/owl.css">
    <link rel="stylesheet" href="home.assets/css/lightbox.css">
    <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>


<body>

    <!-- Sub Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="left-content">

                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="right-icons">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            JobFinder
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li><a href="offres/show">Offres</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                            <li class="nav-item">
                                <form action="/" method="GET" class="d-flex">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for offers"
                                            name="keywords">
                                        <button class="btn btn-outline-secondary btn-red" type="submit"
                                            style="background-color: #a12c2f; color: #ffffff;">Search</button>
                                    </div>
                                </form>
                            </li>

                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">Register</a>
                                </li>
                            @endguest
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="/"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endauth

                        </ul>



                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="home.assets/images/course-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h2>Welcome to JobFinder</h2>
                            <p>JobFinder is a user-friendly web application designed to streamline the job search
                                and application
                                process, providing a seamless experience for both job seekers and employers. The
                                platform leverages
                                modern technologies to match qualified candidates with relevant job opportunities while
                                offering a
                                range of features to facilitate the application process.</p>
                            <div class="main-button-red">
                                <a href="offres/show">Find a job !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="upcoming-meetings" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Offers</h2>
                    </div>
                </div>
                <div class="col-lg-4 clearfix">
                    <div class="categories">
                        <h4> Categories</h4>
                        <ul style="display: flex; flex-direction: column;">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('offres.category', ['categorie_id' => $category->id]) }}" class="category-link">
                                        {{ $category->domaine }}
                                    </a>

                                </li>
                            @endforeach
                        </ul>


                        <div class="main-button-red">
                            <a href="">All categories</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$22.00</span>
                                    </div>
                                    <a href="offres/show"><img src="home.assets/images/meeting-01.jpg"
                                            alt="New Lecturer Meeting"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>10</span></h6>
                                    </div>
                                    <a href="offres/show">
                                        <h4>New Lecturers Meeting</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$36.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg"
                                            alt="Online Teaching"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>24</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Online Teaching Techniques</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$14.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg"
                                            alt="Higher Education"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>26</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Higher Education Conference</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>$48.00</span>
                                    </div>
                                    <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg"
                                            alt="Student Training"></a>
                                </div>
                                <div class="down-content">
                                    <div class="date">
                                        <h6>Nov <span>30</span></h6>
                                    </div>
                                    <a href="meeting-details.html">
                                        <h4>Student Training Meetup</h4>
                                    </a>
                                    <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name"
                                                placeholder="YOURNAME...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="text" id="email"
                                                pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject"
                                                placeholder="SUBJECT...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..."
                                                required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">SEND MESSAGE
                                                NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>010-020-0340</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>info@meeting.edu</span>
                            </li>
                            <li>
                                <h6>Street Address</h6>
                                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
                            </li>
                            <li>
                                <h6>Website URL</h6>
                                <span>www.meeting.edu</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
                <br>
                Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>
                <br>
                Distibuted By: <a href="https://themewagon.com" target="_blank"
                    title="Build Better UI, Faster">ThemeWagon</a>
            </p>
        </div>
    </section>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Écoutez les clics sur les liens de catégorie
            document.querySelectorAll('.category-link').forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();

                    // Récupérez l'URL de destination depuis l'attribut href du lien
                    var destinationUrl = link.getAttribute('href');

                    // Redirigez vers l'URL de destination
                    window.location.href = destinationUrl;
                });
            });
        });
    </script>

</body>



</html>
