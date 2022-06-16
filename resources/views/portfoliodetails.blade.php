@extends('layout')
@section('title')Отель@endsection
@section('content')



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-center align-items-center">
          <h2>Подробнее о номере</h2>
          {{-- <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol> --}}
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        @if($portfoliodetails_count != 0)

          <div class="row gy-4">
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">

                  <div class="swiper-slide">
                    <img src="/storage/portfoliodetails/{{$portfoliodetails->img}}" alt="">
                  </div>

                  {{-- <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-details-2.jpg" alt="">
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-details-3.jpg" alt="">
                  </div> --}}

                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

          
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>О номере</h3>
                <ul>
                    <li><strong></strong> </li>
                    <li class="text-dark"><strong>Категория</strong>:{{$team->name}} </li>
                    <li><strong>Телефон</strong>: <a href="tel:">89280494949</a></li>
                </ul>
              </div>
            
              <div class="portfolio-description">
                <h2>{{$team->name}}: полное описание</h2>
                  <p>
                      {{$portfoliodetails->slogan}}
                  </p>
              </div>
            </div>
          </div>
        @else
          <div class="d-flex flex-column">
            <span class="text-center fs-5">Подробнее об этом номере нет</span>
            <button class="btn mx-auto text-white mt-3" style="background: #1bbd36;">На главную</button>
          </div>
        @endif

      </div>
    </section>
    <!-- End Portfolio Details Section -->

</main><!-- End #main -->



@endsection