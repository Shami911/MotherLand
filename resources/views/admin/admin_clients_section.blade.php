@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0">
    <div class="pagetitle">
      <div class="d-flex">
          <div>
              <h1>Admin Clients Section</h1>
              <nav>
                  <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                      <li class="breadcrumb-item active">Clients Section (Раздел клиентов)</li>
                  </ol>
              </nav>
          </div>
          <button class="btn btn-carousel ms-auto btn-primary " data-bs-toggle="modal" data-bs-target="#addportfolio">Добавить</button>
      </div>
      <!-- End Page Title -->
  </div>
    <!-- ======= About Boxes Section ======= -->
    {{-- <section id="about-boxes" class="about-boxes mt-5"> --}}
        {{-- <div class="container" data-aos="fade-up"> --}}
          {{-- <div class="row row-cols-3">
             --}}
            {{-- @foreach ($clietns as $item) --}}
            {{-- <div class="col" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <img id="img_clients{{$item->id}}" src="storage/AdminClietnsSection/{{$item->img}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}">Редактировать</a>
                  <a  href="/delete_clients_section/{{$item->id}}" class="btn btn-Danger">Удалить</a>
                </div>
              </div>
            </div> --}}


            {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <img id="img_clients{{$item->id}}" src="storage/AdminClietnsSection/{{$item->img}}" class="card-img-top" alt="...">
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <a href="#" class="btn btn-info m-1" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}"><i class="bi bi-three-dots"></i></a>
                    <a  href="/delete_clients_section/{{$item->id}}" class="btn btn-Danger m-1"><i class="bi bi-archive"></i></a>
                  </div>
                </div>
              </nav> --}}


                <!-- ======= Our Clients Section ======= -->
              <section id="clients" class="clients">
                <div class="container" data-aos="fade-up">

                  <div class="section-title">
                    <h2>Мы сотрудничаем</h2>
                  </div>

                  <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
                    @foreach ($clietns as $item)
                    <div class="col-lg-3 col-md-4 col-6">
                      <a href="#" class="btn btn-info"data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}"><i class="bi bi-pencil-fill"></i></a> {{--Редактирование --}}
                      <a  href="/delete_clients_section/{{$item->id}}" class="btn btn-Danger"><i class="bi bi-archive-fill"></i></a>{{-- Удаление --}}
                      <div class="client-logo">
                        <img src="storage/AdminClietnsSection/{{$item->img}}" class="img-fluid" alt="">
                      </div>
                    </div>
                    @endforeach
                  </div>

                </div>
              </section><!-- End Our Clients Section -->


             <!-- Modal Exit Carousel -->
             @foreach ($clietns as $item)
             <div class="modal fade" id="exitservice{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header d-flex border-0">
                          <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                          <button id="close_clients{{$item->id}}" type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                            <form action="/edit_clients_section/{{$item->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                              <div class="form-floating mt-2">
                               <div class="row">

                                  <div>
                                      <label>Фото для карты</label>
                                      <input type="file" name="img" class="form-control mt-1">
                                      @if($errors->has('img'))
                                          {{$errors->first('img')}}
                                      @endif
                                  </div>

                                </div>
                                </div>
                              
                              </div>
                              <button class="btn btn-lg btn-carousel mt-2 w-100">Сохранить</button>
                          </form>
                      </div>
                  </div>
              </div>
              @endforeach


            

              {{-- @endforeach --}}
          </div>
         
      </div>
      <!-- End Left side columns -->
  </section>
</div>

</main>
<!-- End #main -->
          </div>
  
        </div>
      </section><!-- End About Boxes Section -->

  </div>

<!-- Modal Add Carousel -->
{{-- <div class="modal fade" id="addportfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header d-flex border-0">
              <h3 class="modal-title ms-auto" id="addservice">Добавление</h3>
              <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="/add_clients_section" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div>
                      <label>Фото</label>
                      <input type="file" name="img" class="form-control mt-1">
                      @if($errors->has('img'))
                          {{$errors->first('img')}}
                      @endif
                  </div>

              </div>

                  <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
              </form>
          </div>
      </div>
  </div> --}}

@endsection