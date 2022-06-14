@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

    <div class="container d-flex flex-column px-0">
        <div class="pagetitle">
            <div class="d-flex">
                <div>
                    <h1>Admin About</h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                            <li class="breadcrumb-item active">About(О нас)</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- End Page Title -->
        </div> 
      </div>



           <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us pt-5" style="background: rgba(255, 255, 255, 0.805); color:black" >
        <a href="#" class="btn mb-5 w-100" style="background: #1bbd36" data-bs-toggle="modal" data-bs-target="#exitservice">Редактировать</a>
        <div class="container" data-aos="fade-up">
          {{-- <div class="row content">
            @foreach ($about as $item)
            <div class="col-lg-6" data-aos="fade-right">
              <h2>{{$item->title}}</h2>
              <h3>{{$item->slogan}}</h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p>
                {{$item->descriptionUp}}
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> {{$item->point1}}</li>
                <li><i class="ri-check-double-line"></i> {{$item->point2}}</li>
                <li><i class="ri-check-double-line"></i> {{$item->point3}}</li>
              </ul>
              <p class="fst-italic">
                {{$item->descriptionDown}}
              </p>
            </div>
            @endforeach
          </div>
   --}}

   <div class="row content">
    @foreach ($about as $item)
    <div class="col-lg-6" data-aos="fade-right">
      <iframe width="560" height="465" src="{{$item->title}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    @endforeach
        </div>
      </section><!-- End About Us Section -->

                 
                <!-- End Sales Card -->

                <!-- Modal Exit Carousel -->
                <div class="modal fade" id="exitservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-flex border-0">
                                <h3 class="modal-title ms-auto" id="exitservice">Редактирование</h3>
                                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/edit_about" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating mt-2">



                                        <div class="form-floating mt-2">
                                            <input type="text" name="title" value="{{$item->title}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Ссылка для видео</label>
                                            @if($errors->has('title'))
                                                {{$errors->first('title')}}
                                            @endif
                                        </div>
    
                                        {{-- <div class="form-floating mt-2">
                                            <input type="text" name="slogan" value="{{$item->slogan}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Краткое описание</label>
                                            @if($errors->has('slogan'))
                                                {{$errors->first('slogan')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="descriptionUp" value="{{$item->descriptionUp}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Пункты с двумя галочками</label>
                                            @if($errors->has('descriptionUp'))
                                                {{$errors->first('descriptionUp')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="point1" value="{{$item->point1}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Пункты с двумя галочками</label>
                                            @if($errors->has('point1'))
                                                {{$errors->first('point1')}}
                                            @endif
                                        </div>
    
                                        <div class="form-floating mt-2">
                                            <input type="text" name="point2" value="{{$item->point2}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Пункты с двумя галочками</label>
                                            @if($errors->has('point2'))
                                                {{$errors->first('point2')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="point3" value="{{$item->point3}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Пункты с двумя галочками</label>
                                            @if($errors->has('point3'))
                                                {{$errors->first('point3')}}
                                            @endif
                                        </div>
    

                                        <div class="form-floating mt-2">
                                            <input type="text" name="descriptionDown" value="{{$item->descriptionDown}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Описание</label>
                                            @if($errors->has('descriptionDown'))
                                                {{$errors->first('descriptionDown')}}
                                            @endif
                                        </div> --}}

                                    </div>
                                    <button class="btn btn-lg btn-carousel mt-2 w-100">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- End Left side columns -->
        </section>
    </div>

</main>
<!-- End #main -->
    @endsection
