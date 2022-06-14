@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

    <div class="container d-flex flex-column px-0">
        <div class="pagetitle">
            <div class="d-flex">
                <div>
                    <h1></h1>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                            <li class="breadcrumb-item active">Home(Главное окно)</li>
                        </ol>
                    </nav>
                </div>
                <button class="btn btn-carousel ms-auto text-white mt-2"  data-bs-toggle="modal" data-bs-target="#addcount" style="background: #94bd1b">Добавить cлайдер</button>
            </div>
            <!-- End Page Title -->
        </div>
    </div>

            <section id="about-boxes" class="about-boxes mt-5">
                <div class="container" data-aos="fade-up">
                    <div class="row row-cols-3 row-cols-1 g-2">
                    
                    @foreach ($home as $item)
                        <div class="col" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="storage/AdminHome/{{$item->img}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title"><a href="">{{$item->title}}</a></h5>
                            <p class="card-text">{{$item->slogan}} </p>
                            {{-- <p class="card-text btn btn-primary">{{$item->id}} </p> --}}
                            </div>
                            <div class="card-body">
                            <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}">Редактировать</a>
                            <a  href="/delete_team/{{$item->id}}" class="btn btn-Danger">Удалить</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
        
            </section>
            @foreach ($home as $item)



                <!-- Modal Exit Carousel -->
                <div class="modal fade" id="exitservice{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-flex border-0">
                                <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                                <button type="button" class="btn-close fs-4" id="close_home" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/edit_home/{{$item->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating mt-2">

                                        <div>
                                            <label>Фото главной страницы</label>
                                            <input type="file" name="img" value="{{$item->img}}"  class="form-control mt-1 w-75">
                                            @if($errors->has('img'))
                                                {{$errors->first('img')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="title" value="{{$item->title}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Название</label>
                                            @if($errors->has('title'))
                                                {{$errors->first('title')}}
                                            @endif
                                        </div>
    
                                        <div class="form-floating mt-2">
                                            <input type="text" name="slogan" value="{{$item->slogan}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Описание</label>
                                            @if($errors->has('slogan'))
                                                {{$errors->first('slogan')}}
                                            @endif
                                        </div>

                                        <div class="form-floating mt-2">
                                            <input type="text" name="button" value="{{$item->button}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Кнопка</label>
                                            @if($errors->has('button'))
                                                {{$errors->first('button')}}
                                            @endif
                                        </div>
    

                                    </div>
                                    <button class="btn btn-lg btn-carousel mt-2 w-100 text-white" style="background: #94bd1b">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    @endforeach
    
</main>
<!-- End #main -->


{{-- Modul start  --}}
 <div class="modal fade" id="addcount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header d-flex border-0">
            <h3 class="modal-title ms-auto" id="exampleModalLabel">Добавление</h3>
            <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/add_home" method="POST" enctype="multipart/form-data">
            @csrf
    
                <div>
                    <label>Добавить слайдер</label>
                    <input type="file" name="img" class="form-control mt-1 w-75">
                    @if($errors->has('img'))
                        {{$errors->first('img')}}
                    @endif
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Название</label>
                    @if($errors->has('title'))
                        {{$errors->first('title')}}
                    @endif
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="slogan"  class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Описание</label>
                    @if($errors->has('slogan'))
                        {{$errors->first('slogan')}}
                    @endif
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="button" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Кнопка</label>
                    @if($errors->has('button'))
                        {{$errors->first('button')}}
                    @endif
                </div>


                <button class="btn btn-lg btn-carousel mt-2 w-100 text-white" style="background: #94bd1b">Добавить</button>
            </form>
          </div>
        </div>
      </div>
    </div>

@endsection
