@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

    <div class="container d-flex flex-column px-0">
        <div class="pagetitle">
            <div class="d-flex">
                <div>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active">Navbar(Шапка)</li>
                        </ol>
                    </nav>
                    
                </div>
            </div>
            
            <!-- End Page Title -->
        </div>


        <section class="section dashboard mt-2">
              @foreach ($navbar as $item)

                  <header id="header" class="">
                    
                    <div class="card-body">
                        <a href="#" class="btn w-100" style="background: #1bbd36" data-bs-toggle="modal" data-bs-target="#exitservice">Редактировать</a>
                    </div>
                    <div class="container d-flex align-items-center">
                      <h1 class="logo me-auto"><a href="/"><span>Com</span>pany</a></h1>
                      <!-- Uncomment below if you prefer to use an image logo -->
                      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                
                      <nav id="navbar" class="navbar order-last order-lg-0">
                        @foreach ($navbar as $item)
                        <ul>
                          <li><a href="/" class="active">{{$item->home}}</a></li>
                          <li><a href="#"><span>{{$item->about}}</span></a>
                          <li><a href="#services">{{$item->servis}}</a></li>
                          <li><a href="#portfolio">{{$item->portfolio}}</a></li>
                          <li><a href="#team">{{$item->team}}</a></li>
                          <li><a href="contact">{{$item->Contact}}</a></li>
                          <li><a href="#">{{$item->Get_Started}}</a></li>
                        </ul>
                        @endforeach
                        {{-- <i class="bi bi-list mobile-nav-toggle"></i> --}}
                      </nav><!-- .navbar -->
                
                      {{-- <div class="header-social-links d-flex">
                        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
                      </div> --}}
                
                    </div>
                  </header><!-- End Header -->




                </section>
                

                <!-- Modal Exit Carousel -->
                <div class="modal fade" id="exitservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-flex border-0">
                                <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/edit_navbar" method="POST">
                                    @csrf
                                    <div class="form-floating mt-2">

    
                                        <div class="form-floating mt-2">
                                            <input type="text" name="home" value="{{$item->home}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="home">home</label>
                                            @if($errors->has('home'))
                                                {{$errors->first('home')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="about"  value="{{$item->about}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="about">about</label>
                                            @if($errors->has('about'))
                                                {{$errors->first('about')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="servis" value="{{$item->servis}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="servis">servis</label>
                                            @if($errors->has('servis'))
                                                {{$errors->first('servis')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="portfolio"  value="{{$item->portfolio}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="portfolio">portfolio</label>
                                            @if($errors->has('portfolio'))
                                                {{$errors->first('portfolio')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="team"  value="{{$item->team}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="team">team</label>
                                            @if($errors->has('team'))
                                                {{$errors->first('team')}}
                                            @endif
                                        </div>


                                        <div class="form-floating mt-2">
                                            <input type="text" name="Contact"  value="{{$item->Contact}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="Contact">Contact</label>
                                            @if($errors->has('Contact'))
                                                {{$errors->first('Contact')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="Get_Started"  value="{{$item->Get_Started}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="Get_Started">Get Started</label>
                                            @if($errors->has('Get_Started'))
                                                {{$errors->first('Get_Started')}}
                                            @endif
                                        </div>
                                        

                                    </div>
                                    <button class="btn btn-lg btn-carousel mt-2 w-100">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            <!-- End Left side columns -->
        </section>
    </div>

</main>
<!-- End #main -->

@endsection
