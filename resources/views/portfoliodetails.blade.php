@extends('layout')
@section('title')Отель@endsection
@section('content')



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Подробнее</h2>
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

        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="/storage/AdminTeam/{{$team->img}}" alt="">
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
                  <li><strong>Категория</strong>:{{$team->name}} </li>
                  <li><strong>Телефон</strong>: <a href="tel:">89280494949</a></li>
              </ul>
            </div>
           
            <div class="portfolio-description">
              <h2>{{$team->name}}: полное описание</h2>
                <p>
                  Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                </p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Portfolio Details Section -->

</main><!-- End #main -->



@endsection