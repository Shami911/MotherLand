@extends('layout')
@section('title')Отель@endsection
@section('content')

        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    <div style="display: none">{{ $count = 0 }}</div>
                    @foreach ($home as $item)
                        <!-- Slide 1 -->
                        <div class="carousel-item @if ($count == 0) active @endif"
                            style="background-image: url('storage/AdminHome/{{ $item->img }}');background-size: cover; background-position: center;">
                            <div class="carousel-container">
                                <div class="carousel-content animate__animated animate__fadeInUp">
                                    <h2>{{ $item->title }}</h2>
                                    <p>{{ $item->slogan }}</p>
                                    <div class="text-center"><a href="#about-us" class="btn-get-started">{{ $item->button }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none">{{ $count = ++$count }}</div>
                    @endforeach

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            </div>
        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= About Us Section ======= -->
            <section id="about-us" class="about-us">
                <div class="container" data-aos="fade-up">

                    <div class="row content">
                        @foreach ($about as $item)
                            <div class="col-lg-6" data-aos="fade-right">
                                {{-- <h2>{{$item->title}}</h2>
            <h3>{{$item->slogan}}</h3>
            <p>{{$item->descriptionUp}}</p>
            <li><i class="ri-check-double-line"></i> {{$item->point1}}</li>
            <li><i class="ri-check-double-line"></i> {{$item->point2}}</li>
            <li><i class="ri-check-double-line"></i> {{$item->point3}}</li>
            <p>{{$item->descriptionDown}}</p> --}}
                                <iframe class="youtube" width="100%" height="100%" src="https://www.youtube.com/embed/5dMy_2xIYo0"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        @endforeach

                        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">

                            </div>

                            {{-- <div class="col-md-7 col-lg-8"> --}}
                            <h4 class="mb-3 text-center">БРОНИРОВАНИЕ</h4>
                            <form action="/send_book" method="POST" class="needs-validation" novalidate="">
                            @csrf
                                <div class="row g-3 mt-4">
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">Имя</label>
                                        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Иван"
                                            required="">
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Фамилия</label>
                                        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Иванов"
                                            required="">
                                    </div>

                                    <div class="col-sm-12">
                                        <label for="lastName" class="form-label">Телефон</label>
                                        <input type="tel" name="tel" class="form-control" id="lastName" placeholder="+79280494949"
                                            required="">
                                    </div>

                                    <div class="col-12">
                                        <div class="input-group has-validation">
                                            <span class="input-group-text">С</span>
                                            <input type="date" name="date_start" :min='getMinDate(1)' class="form-control" v-model='dateStart'
                                                placeholder="Выберите дату заезда" required="">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="input-group has-validation">
                                            <span class="input-group-text">До</span>
                                            <input type="date"  name="date_end" :min='getMinDate(0)' class="form-control" v-model='dateEnd'
                                                placeholder="Выберите дату выезда" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <select name="col_people" class="form-select" v-model='selectedPeople' id="country" required="">
                                            <option value="" disabled>Выберите количество людей</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <select name="nomer" class="form-select" v-model='selectedBook' id="room" required="">
                                            <option value="" disabled>Выберите номер</option>
                                          
                                            @foreach ($team as $item)
                                            
                                                <option value="{{ $item->work }}">{{ $item->name }} {{$item->work}}₽</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="d-flex mt-3">
                                        <button class="w-100 btn btn-lg"
                                            style="background: #94bd1b; color:aliceblue">Отправить заявку</button>
                                    {{-- <form action="telegramsecret"> --}}
                                    <button @click='getTripCost' class="w-100 btn btn-lg ms-2"
                                        style="background: #94bd1b; color:aliceblue" data-bs-toggle="modal"
                                        data-bs-target="#book" type="button">Забронировать</button>
                                    {{-- </form> --}}
                                </div>
                            </form>
                        </div>
                  
                    </div>

                </div>


                <div class="modal fade p-3" id="book" tabindex="-1" aria-labelledby="editgallery{{ $item->id }}"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-0 pb-0">
                                <h4 class="modal-title text-center w-100" id="aeditgallery{{ $item->id }}">БРОНИРОВАНИЕ
                                </h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="POST" class="d-flex flex-column">
                                    @csrf

                                    <p>Перейти на страницу оплаты</p>
                                    <p>Количество дней: @{{ selectedDays }}</p>
                                    <p>Количество людей: @{{ selectedPeople }}</p>
                                    <p>Цена: @{{ selectedBookPrice }}</p>
                                 
                                    <button class="btn btn-lg" style="background: #94bd1b; color:aliceblue"><i
                                            class="far fa-edit me-2 mt-5"></i>Оплатить бронь</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </section><!-- End About Us Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title" data-aos="fade-left">
                <h2>Почему мы</h2>
                {{-- <p>Придумать описание</p> --}}
            </div>
            <div class="row g-3">
                @foreach ($servis as $item)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue w-100">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                {!! $item->icon !!}
                            </div>
                            <h4><a href="">{{ $item->title }}</a></h4>
                            <p>{{ $item->descripteon }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->




    <!-- ======= Our Clients Section ======= -->
    {{-- <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Мы сотрудничаем</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
          @foreach ($clietns as $item)
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="storage/AdminClietnsSection/{{$item->img}}" class="img-fluid" alt="">
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section> --}}
    <!-- End Our Clients Section -->




    <section id="portfolio" class="portfolio" style="background: whitesmoke; color:black">
        <div class="container">

            <div class="section-title" data-aos="fade-left">
                <h2>Галерея</h2>
                <p>Дербент - один из древнейших и красивейших городов Северного Кавказа. Поселения на данной территории существовали более 5000 лет назад. Его история теряется во мраке веков, но, выстояв перед безжалостными ураганами времени, вопреки многочисленным разрушениям, Дербент во многом сохранил свой облик до наших дней.</p>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active me-2">Все</li>
                        @foreach ($point as $item)
                            <li data-filter=".filter-{{ $item->id }}">{{ $item->title }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
       


        {{-- start gallery --}}
     
            <div class="row portfolio-container mt-5" data-aos="fade-up" data-aos-delay="200">

                @foreach ($gallery as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->teg }}">
                        <div class="portfolio-wrap">
                            <img src="/storage/gallery/{{ $item->image }}" class="img-fluid"
                                style="height: 300px; object-fit: cover;" alt="">
                            <div class="portfolio-info d-flex">
                                <h4>{{ $item->name }}</h4>
                                <a href="storage/gallery/{{ $item->image }}" 
                                    class="portfolio-lightbox ms-auto " title="{{ $item->name }}">
                                    <i class="bx bx-plus fs-3"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> 


        
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-right">
                <h2>Наши номера</h2>
                <p>Здесь вы можете посмотреть наши номера и цены на них</p>
            </div>
            <div class="row row-cols-1 row-cols-lg-4">
                @foreach ($team as $item)
                <form action="portfoliodetails" method="POST">
                    @csrf
             
                <a href="portfoliodetails" class="details-link" title="More Details">
                    <div class="col" data-aos="fade-up" data-aos-delay="100">
                        <div class="card mt-3">
                            <img src="/storage/AdminTeam/{{ $item->img }}" style="height: 300px;object-fit:cover;"
                            class="card-img-top" alt="...">
                            <div class="d-flex justify-content-end py-2 px-2" style="background-color: #94bd1b;">
                                @foreach ($icons->where('tab', '=', $item->id) as $icon)
                                <button type="button" class="btn py-0 text-white" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="{{ $icon->description }}">
                                        {!! $icon->icon !!}
                                    </button>
                                @endforeach
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-dark">{{ $item->name }}</h5>
                                <p class="fs-4 text-dark">{{ $item->slogan }}</p>
                                <p class="card-text fw-light text-dark">{{ $item->work }}₽</p>
                            </div>
                        </div>
                    </div>
                </a>
            </form>

                @endforeach
            </div>
        </div>

        </div>
    </section><!-- End Testimonials Section -->




    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between">
                <h2>Прайс</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="row">

                @foreach ($pricing as $item)
                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box mt-4">
                            <h3>{{ $item->title }}</h3>
                            <h4>{{ $item->cost }}<span> / {{ $item->time }}</span></h4>
                            <ul>
                                <li>{{ $item->service1 }}</li>
                                <li>{{ $item->service2 }}</li>
                                <li>{{ $item->service3 }}</li>
                                <li>{{ $item->service4 }}</li>
                                <li>{{ $item->service5 }}</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">{{ $item->button }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Часто задаваемые вопросы</h2>
            </div>

            <div class="faq-list">
                @foreach ($faq as $item)
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                class="collapse"
                                data-bs-target="#faq-list-{{ $item->id }}">{{ $item->question }}<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-{{ $item->id }}" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    {{ $item->answer }}
                                </p>
                            </div>
                        </li>

                    </ul>
                @endforeach
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->



    </main><!-- End #main -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
