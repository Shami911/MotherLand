<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/"><span>Mother</span>land</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt=""
                    class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                @foreach ($navbar as $item)
                    <ul>
                        <li><a href="/" class="active">{{ $item->home }}</a></li>
                        <li><a href="#about" id="about"><span>{{ $item->about }}</span></a>
                        <li><a href="#services" id="services">{{ $item->servis }}</a></li>
                        <li><a href="#portfolio" id="portfolio">{{ $item->portfolio }}</a></li>
                        <li><a href="#team" id="team">{{ $item->team }}</a></li>
                        <li><a href="contact" id="Contact">{{ $item->Contact }}</a></li>
                        <li><a href="#pricing" id="Get_Started">{{ $item->Get_Started }}</a></li>
                    </ul>
                @endforeach
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex">
                <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
            </div>

        </div>
    </header>
    <!-- End Header -->

    @yield('content')





    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Mother<span style="color:#94bd1b">land</span> </h3>
                        <p>
                            {{-- A108 Adam Street <br> --}}
                            {{-- New York, NY 535022<br> --}}
                            {{-- United States <br><br> --}}
                            <strong>Номер: <a href="tel:"></strong> +7 999 715 92 52<br></a>
                            <strong>Email:</strong> Motherland@mail.ru<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Наши ссылки</h4>
                        @foreach ($navbar as $item)
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="/">{{ $item->home }}</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#about">{{ $item->about }}</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#services">{{ $item->servis }}</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">{{ $item->portfolio }}</a>
                                </li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#team">{{ $item->team }}</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#contact">{{ $item->Contact }}</a>
                                </li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#pricing">{{ $item->Get_Started }}</a>
                                </li>
                            </ul>
                        @endforeach
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Услуги</h4>
                        @foreach ($servis as $item)
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">{{ $item->title }}</a></li>
                            </ul>
                        @endforeach
                    </div>

                    {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Название гостиницы</h4>
            <p>Запросить обратный звонок</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Заказть звонок">
            </form> 
          </div> --}}
                    <script type="text/javascript" charset="utf-8" async
                                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aad2989ae4bca6e56d4f2f5fd875a4926dddbe645a66f26bc87105afda69d2dc4&amp;width=380&amp;height=300&amp;lang=ru_RU&amp;scroll=true">
                    </script>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy;Сайт разработала студия <span style="color:#94bd1b">ENTER</span>
                </div>
                <div class="credits">
                    <strong>Номер: <a href="tel:+79997159252"></strong> +7 999 715 92 52</a><br>
                    <strong>Email:</strong> Enter@example.com<br></a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- <script>
    window.addEventListener('scroll', function(){
      let posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
      if(posTop >= 10) {
        header.classList.add('bg-white')
        about.classList.remove('text-white')
        portfolio.classList.remove('text-white')
        team.classList.remove('text-white')
        contact.classList.remove('text-white')
        pricing.classList.remove('text-white')

      } else {
        header.classList.remove('bg-white')
        about.classList.add('text-white')
        portfolio.classList.add('text-white')
        team.classList.add('text-white')
        contact.classList.add('text-white')
        pricing.classList.add('text-white')
      }
    }, true)
  </script> --}}



    <!-- Vendor JS Files -->
{{-- <script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script> --}}



<!-- Vendor JS Files -->
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>
<script src="/https://unpkg.com/vue@3"></script>
<script src="/assets/js/booking.js"></script>



</body>

</html>
