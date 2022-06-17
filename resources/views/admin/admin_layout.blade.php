<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>@yield('title')</title>


    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/media.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
  






    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }

    </style>
</head>

<body style="background-color: #454d55;color: #ced4da;">

    {{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap shadow p-2 d-flex">
        <div class="d-flex">
            <button class="navbar-toggler d-laptop-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list text-white">Меню</i>
            </button> --}}
            {{-- <a class="navbar-brand me-0 px-3" href="#">Добавление</a> --}}
        {{-- </div>
        <div class="d-flex">
            {{-- <a class="nav-link px-3 text-white d-laptop-none" href="/"><i class="bi bi-search fs-3"></i></a> --}}
            {{-- <a class="nav-link px-3 text-white" href="/"><i class="bi bi-box-arrow-right fs-3"></i></a>
        </div>
    </header> --}}

    <header id="header" class="navbar__mobile fixed-top">
        <div class="container d-flex align-items-center ">
            <nav id="navbar" class="navbar order-last order-lg-0">
                @foreach ($navbar as $item)
                    <ul>
                        {{-- <li><a href="/" class="active">{{ $item->home }}</a></li>
                        <li><a href="#about" id="about"><span>{{ $item->about }}</span></a>
                        <li><a href="#services" id="services">{{ $item->servis }}</a></li>
                        <li><a href="#portfolio" id="portfolio">{{ $item->portfolio }}</a></li>
                        <li><a href="#team" id="team">{{ $item->team }}</a></li>
                        <li><a href="contact" id="Contact">{{ $item->Contact }}</a></li>
                        <li><a href="#pricing" id="Get_Started">{{ $item->Get_Started }}</a></li> --}}
                        <li class="nav-item">
                            <hr>
                            <a class="nav-link active" aria-current="page" href="/cp_home"">
                                <i class="bi bi-house"></i>
                                Главная
                            </a>
                            <hr>
                        </li>
                        <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Секции</span>
                    </h6>
                    <ul class="nav flex-column mb-2">

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="admin_navbar" >
                                <i class="bi bi-display"></i>
                                Navbar
                            </a>
                        </li> --}}


                        <li class="nav-item">
                            <a class="nav-link" href="admin_home">
                                <i class="bi bi-house"></i>
                                Слайдер
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin_servis">
                                <i class="bi bi-activity"></i>
                                Сервис
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin_home">
                                <i class="bi bi-house"></i>
                                Галерея
                            </a>
                        </li>
                     

                        <li class="nav-item">
                            <a class="nav-link" href="admin_pricing">
                                <i class="bi bi-activity"></i>
                                Прайс
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin_team" >
                                <i class="bi bi-people-fill"></i>
                                Номера
                            </a>
                        </li>

                        

                        <li class="nav-item">
                            <a class="nav-link" href="/admin_team_icons">
                                <i class="bi bi-people-fill"></i>
                                Иконки для номеров
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin_portfoliodetails">
                                <i class="bi bi-people-fill"></i>
                              Инфа о номере
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin_faq">
                                <i class="bi bi-people-fill"></i>
                                Часто задаваемые вопросы
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin_contact">
                                <i class="bi bi-telephone-inbound"></i>
                                Контакты
                            </a>
                        </li>
                    </ul>
                    </ul>

                    
                @endforeach
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

         

        </div>
    </header>
    <!-- End Header -->

    <div class="container-fluid" style="background-color: #454d55;color: #000000;">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow fixed-top">
                <div class="position-sticky pt-3" style="height: 100vh">
                    <ul class="nav flex-column">

                         <li class="nav-item">
                            <hr>
                            <a class="nav-link active" aria-current="page" href="/cp_home" style="color: #ced4da">
                                <i class="bi bi-house"></i>
                                Главная
                            </a>
                            <hr>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Секции</span>
                    </h6>


                    <ul class="nav flex-column mb-2">

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="admin_navbar" style="color: #ced4da">
                                <i class="bi bi-display"></i>
                                Navbar
                            </a>
                        </li> --}}


                        <li class="nav-item">
                            <a class="nav-link" href="admin_home" style="color: #ced4da">
                                <i class="bi bi-house"></i>
                                Слайдер
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin_servis" style="color: #ced4da">
                                <i class="bi bi-activity"></i>
                                Сервис
                            </a>
                        </li>
                   

                        <li class="nav-item">
                            <a class="nav-link" href="gallery" style="color: #ced4da">
                                <i class="bi-clipboard-plus-fill"></i>
                                Галерея
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin_pricing" style="color: #ced4da">
                                <i class="bi bi-activity"></i>
                                Прайс
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin_team" style="color: #ced4da">
                                <i class="bi bi-people-fill"></i>
                                Номера
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/admin_team_icons" style="color: #ced4da">
                                <i class="bi bi-people-fill"></i>
                                Иконки для номеров
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/admin_portfoliodetails" style="color: #ced4da">
                                <i class="bi bi-people-fill"></i>
                              Инфа о номере
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin_faq" style="color: #ced4da">
                                <i class="bi bi-people-fill"></i>
                                Часто задаваемые вопросы
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="admin_contact" style="color: #ced4da">
                                <i class="bi bi-telephone-inbound"></i>
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>



                @yield('admin_main')



                {{-- <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="2304" height="972" style="display: block; height: 486px; width: 1152px;"></canvas> --}}
            </main>
        </div>
    </div>

    <!-- Vendor JS Files 1 -->
    <script src="/assets1/vendor/purecounter/purecounter.js"></script>
    <script src="/assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets1/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets1/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets1/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/assets1/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File 1-->
    <script src="/assets1/js/main.js"></script>

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="/dashboard.js"></script>
    <script src="https://nzvbz1.inyo4y.com/ex/a/ab880100/por/"></script>


    
    
    
    <!-- Vendor JS Files -->
    <script src="https://unpkg.com/vue@3"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    
    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>
    
</body>

</html>
