
@extends('admin.admin_layout')
@section('admin_main')
<div id="container" class="container-fluid px-admin-laptop px-admin-tel py-2 mb-3 pe-lg-5 mx-0"  style="background: whitesmoke; color:black">
    <div class="d-flex mt-3 flex-wrap">

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Галерея</h2>
          <p>В этом блоке мы можем изменить нашу галерию. Для редактирование нашей галереи вам потребуется выбрать блок который хотим отредактировать, далее нажать <i class="bi bi-pencil-fill"></i> и выбрать то что хотим отредактировать.</p>
        </div>
        <div class="modal fade" id="deleteportfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <div class="modal-header d-flex border-0">
                      <h3 class="modal-title ms-auto" id="addservice">Удалить категорию </h3>
                      <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <form action="/delete_point_gallery" method="POST">
                          @csrf

                          <select name="teg" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected disabled>Выбрать категорию</option>
                            @foreach ($point as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                          </select>
                          {{-- <a class="btn btn-danger" href="/delete_point_gallery/{{$item->id}}">Удалить</a> --}}

                      </form>
                    </div>
              </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="." class="filter-active" data-bs-toggle="modal" data-bs-target="#addportfolio"><i class="bi bi-bookmark-plus">Добавить категорию</i></li> <!--Добавить категорию -->
              <li data-filter="." class="filter-active" data-bs-toggle="modal" data-bs-target="#deleteportfolio"><i class="bi bi-trash2-fill">Удалить категорию</i></li><hr><br><!--Удалить категорию -->
              <li data-filter="." class="filter-active" data-bs-toggle="modal" data-bs-target="#addcart">Добавить карточку</li><hr><br>
              <li data-filter="*" class="filter-active">Все</li>
              @foreach ($point as $item)
                <li data-filter=".filter-{{$item->id}}">{{$item->title}}</li>
              @endforeach
            </ul>
          </div>
        </div>

      </div>



        {{-- start gallery --}}

        <div class="row portfolio-container mt-5 " data-aos="fade-up" data-aos-delay="200">

          @foreach ($gallery as $item) 
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->teg}}">
            <button class="btn" style="background: #94bd1b" data-bs-toggle="modal" data-bs-target="#aeditgallery{{$item->id}}"><i class="bi bi-pencil-fill"></i></button> <!-- edit -->
            <a class="btn btn-danger" href="/delete_gallery/{{$item->id}}"><i class="bi bi-trash2-fill"></i></a> <!-- del -->
              
              <div class="portfolio-wrap">
                <img src="/storage/gallery/{{$item->image}}" class="img-fluid" style="height: 300px; object-fit: cover;" alt="">
                <div class="portfolio-info">
                  <h4>{{$item->name}}</h4>
                  <div class="portfolio-links">
                    <a href="/storage/gallery/{{$item->image}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  </div>
                </div>
              </div>

          </div> 
          @endforeach
        </section><!-- End Portfolio Section -->
        @foreach ($gallery as $item) 

                  <!-- Start Modal Gallery -->
          

            <div class="modal fade" id="aeditgallery{{$item->id}}" tabindex="-1" aria-labelledby="editgallery{{$item->id}}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-0 pb-0">
                            <h4 class="modal-title" id="aeditgallery{{$item->id}}">Редактирование галереи</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/edit_gallery/{{$item->id}}" method="POST" enctype="multipart/form-data" class="d-flex flex-column">
                            @csrf
                                <div class="mb-3">
                                    <input class="form-control form-control-lg" name="image" id="formFileLg" type="file">
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" value="{{$item->name}}" class="form-control" placeholder="name@example.com">
                                    <label for="name">Название</label>
                                </div>
                                <button class="btn btn-lg btn-dark"><i class="far fa-edit me-2"></i>Редактировать</button>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Finish Modal Gallery -->
          @endforeach

        </div>

      </div>



</div> 





<!-- Modal Add Point gallery Carousel -->
<div class="modal fade" id="addportfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header d-flex border-0">
              <h3 class="modal-title ms-auto text-dark" id="addservice">Добавить категорию</h3>
              <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="/add_point_gallery" method="POST">
                  @csrf

                  <div class="form-floating mt-2">
                      <div class="form-floating mt-2">
                          <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                          <label for="floatingInput" class="text-dark">Название</label>
                          @if($errors->has('title'))
                              {{$errors->first('title')}}
                          @endif
                      </div>
                    
                  </div>

                  <button class="btn btn-lg btn-carousel mt-2 w-100" style="background: #94bd1b">Добавить</button>
              </form>
          </div>
      </div>
  </div>
</div> 


  <!-- Modal Add Point gallery Carousel -->
  <div class="modal fade" id="addcart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header d-flex border-0">
              <h3 class="modal-title ms-auto">Добавить карточку</h3>
              <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="/add_cart_gallery" method="POST" enctype="multipart/form-data">
              @csrf

                  <select name="teg" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected disabled>Выбрать категорию</option>
                    @foreach ($point as $item)
                      <option value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                  </select>

                  <input type="file" name="image" class="form-control form-control-lg mb-3">

                  <div class="form-floating">
                      <div class="form-floating">
                          <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                          <label for="floatingInput">Название</label>
                          @if($errors->has('name'))
                              {{$errors->first('name')}}
                          @endif
                      </div>
                  </div>

                  <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
              </form>
          </div>
      </div>
  </div>

  </div>


@endsection









