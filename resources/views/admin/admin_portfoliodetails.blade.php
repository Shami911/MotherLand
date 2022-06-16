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
            
            @foreach ($portfoliodetails as $item)
            <div class="col" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="storage/portfoliodetails/{{$item->img}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        {{-- <h5 class="card-title"><a href="">{{$item->name}}</a></h5> --}}
                        <p class="card-text">{{$item->slogan}} </p>
                        {{-- <p class="card-text">{{$item->work}} </p> --}}
                        </div>
                        <div class="card-body">
                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit_portfoliodetails{{$item->id}}">Редактировать</a>
                        <a  href="/delete_portfoliodetails/{{$item->id}}" class="btn btn-Danger">Удалить</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>



            @foreach ($portfoliodetails as $item)

                <!-- Modal Edit Carousel -->
                <div class="modal fade" id="edit_portfoliodetails{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header d-flex border-0">
                            <h3 class="modal-title ms-auto" id="exitservice">Редактирование подробнее</h3>
                            <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                    <form action="/edit_portfoliodetails/{{$item->id}}" method="POST" enctype="multipart/form-data">
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
                                                <input type="text" name="slogan" value="{{$item->slogan}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Описание</label>
                                                @if($errors->has('slogan'))
                                                    {{$errors->first('slogan')}}
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
   

</main>
<!-- End #main -->


<!-- Modal Add Carousel -->
 <div class="modal fade" id="addportfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex border-0">
                <h3 class="modal-title ms-auto" id="addservice">Добавление</h3>
                <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/add_portfoliodetails" method="POST" enctype="multipart/form-data">
                @csrf

                    <select name="nomer" class="form-select" aria-label="Default select example">
                        <option selected disabled>Выберите номер</option>
                        @foreach($nomera as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('nomer'))
                        {{$errors->first('nomer')}}
                    @endif

                    <div class="mt-2">
                        <label>Фото номера</label>
                        <input type="file" name="img" class="form-control mt-1">
                        @if($errors->has('img'))
                            {{$errors->first('img')}}
                        @endif
                    </div>


                    
                    <div class="form-floating mt-2">
                        <input type="text" name="slogan" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">описание</label>
                        @if($errors->has('slogan'))
                            {{$errors->first('slogan')}}
                        @endif
                    </div>

                    

                    </div>

                    <button class="btn btn-lg btn-carousel mt-2 w-100" style="background: #94bd1b">Добавить</button>
                </form>
            </div>
    </div>
</div>

@endsection