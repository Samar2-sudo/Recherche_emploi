<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Education - List of Meetings</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('home.assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('home.assets/css/templatemo-edu-meeting.css') }}">
    <link rel="stylesheet" href="{{ asset('home.assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('home.assets/css/lightbox.css') }}">
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
                        <a href="/" class="logo">
                            JobFinder
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/" class="active">Home</a></li>
                            <li><a href="/">Offres</a></li>
                            <li class="scroll-to-section"><a href="/">Contact Us</a></li>
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

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>These are </h6>
                    <h2>all the offers</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filters">
                                <ul>
                                    <li data-filter="*" class="active">Informatique</li>
                                    <li data-filter=".soon">Santé</li>
                                    <li data-filter=".imp">Télécommunication</li>
                                    <li data-filter=".att">Sport</li>
                                </ul>
                            </div>
                        </div>
                        <div class="my-5 row justify-content-around">
                            @foreach ($offre as $key => $singleOffre)
                                <div class="col-lg-4 col-md-6 col-sm-12 templatemo-item-col all soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <div class="category">
                                                <span>
                                                    <h4>{{ $singleOffre->category_id }} </h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="down-content">
                                            <div class="date">
                                                <h6>{{ date('M', strtotime($singleOffre->date_de_publication)) }}
                                                    <span>{{ date('d', strtotime($singleOffre->date_de_publication)) }}</span>
                                                </h6>
                                            </div>
                                            <a href="{{ route('offresshow', ['offre_id' => $singleOffre->id]) }}">
                                                <h4 style="font-size: 24px; font-weight: bold; margin-bottom: 10px;">
                                                    {{ $singleOffre->poste }}</h4>
                                            </a>
                                            <p style="margin-bottom: 8px;">
                                                <span style="color: #a12c2f;">Entreprise:</span>
                                                {{ $singleOffre->entreprise->name }}
                                            </p>
                                            <p style="margin-bottom: 8px;">
                                                <span style="color: #a12c2f;">Compétences:</span>
                                                {{ $singleOffre->competences }}
                                            </p>
                                            <p style="margin-bottom: 8px;">
                                                <span style="color: #a12c2f;">Date de clôture:</span>
                                                {{ $singleOffre->date_de_cloture }}
                                            </p>
                                            <a href="{{ route('offresshow', ['offre_id' => $singleOffre->id]) }}"
                                                class="btn btn-red" style="background-color: #a12c2f; color: #ffffff;">
                                                Apply Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>



                        <div class="col-lg-12">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved.
                    <br> Design: <a href="https://templatemo.com" target="_parent"
                        title="free css templates">TemplateMo</a>
                    <br> Distributed By: <a href="https://themewagon.com" target="_blank"
                        title="Build Better UI, Faster">ThemeWagon</a>
                </p>
            </div>
    </section>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('home.assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('home.assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('home.assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('home.assets/js/tabs.js') }}"></script>
    <script src="{{ asset('home.assets/js/isotope.js') }}"></script>
    <script src="{{ asset('home.assets/js/video.js') }}"></script>
    <script src="{{ asset('home.assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('home.assets/js/custom.js') }}"></script>
</body>
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
</body>


</body>

</html>
