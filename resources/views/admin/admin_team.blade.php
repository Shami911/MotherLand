@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0">
    <div class="pagetitle">
      <div class="d-flex">
          <div>
              <nav>
                  <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="admin_layout">Главная</a></li>
                      <li class="breadcrumb-item active">Admin Team(Номера)</li>
                  </ol>
              </nav>
          </div>
          <button class="btn btn-carousel ms-auto" style="background: #94bd1b" data-bs-toggle="modal" data-bs-target="#addportfolio">Добавить</button>
      </div>
      <!-- End Page Title -->
  </div>
    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row row-cols-3 g-2">
            
            @foreach ($team as $item)
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="storage/AdminTeam/{{$item->img}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><a href="">{{$item->name}}</a></h5>
                    <p class="card-text">{{$item->slogan}} </p>
                    <p class="card-text">{{$item->work}} </p>
                    </div>
                    <div class="card-body">
                    <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}">Редактировать</a>
                    <a  href="/delete_team/{{$item->id}}" class="btn btn-Danger">Удалить</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>



            @foreach ($team as $item)

                <!-- Modal Edit Carousel -->
                <div class="modal fade" id="exitservice{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header d-flex border-0">
                            <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                            <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                    <form action="/edit_team/{{$item->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating mt-2">
                                        <div class="row">

                                            <div>
                                                <label>Фото</label>
                                                <input type="file" name="img" value="{{$item->img}}"  class="form-control mt-1">
                                                @if($errors->has('img'))
                                                    {{$errors->first('img')}}
                                                @endif
                                            </div>


                                            <div class="form-floating mt-2">
                                                <input type="text" name="name" value="{{$item->name}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Название</label>
                                                @if($errors->has('name'))
                                                    {{$errors->first('name')}}
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
                                                <input type="text" name="work" value="{{$item->work}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">цена</label>
                                                @if($errors->has('work'))
                                                    {{$errors->first('work')}}
                                                @endif
                                            </div>


                                            </div>
                                        </div>
                                    
                                        <button class="btn btn-lg btn-carousel mt-2 w-100" style="background: #94bd1b">Сохранить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
         
      </div>
      <!-- End Left side columns -->
</div>

</main>
<!-- End #main -->

</div>

<!-- Modal Add Carousel -->
<div class="modal fade" id="addportfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex border-0">
                <h3 class="modal-title ms-auto" id="addservice">Добавление</h3>
                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/add_team" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label>Фото номера</label>
                        <input type="file" name="img" class="form-control mt-1">
                        @if($errors->has('img'))
                            {{$errors->first('img')}}
                        @endif
                    </div>


                    <div class="form-floating mt-2">
                        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Название</label>
                        @if($errors->has('name'))
                            {{$errors->first('name')}}
                        @endif
                    </div>
                    
                    <div class="form-floating mt-2">
                        <input type="text" name="slogan" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">описание</label>
                        @if($errors->has('slogan'))
                        {{$errors->first('slogan')}}
                        @endif
                    </div>

                    <div class="form-floating mt-2">
                        <input type="text" name="work" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">цена</label>
                        @if($errors->has('work'))
                            {{$errors->first('work')}}
                        @endif
                    </div>
                    

                    </div>

                    <button class="btn btn-lg btn-carousel mt-2 w-100" style="background: #94bd1b">Добавить</button>
                </form>
            </div>
    </div>
</div>

@endsection