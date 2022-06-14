@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0">
    <div class="pagetitle">
      <div class="d-flex">
          <div>
              <nav>
                  <ol class="breadcrumb mb-3">
                      <li class="breadcrumb-item mb-3"><a href="index.html">Главная</a></li>
                      <li class="breadcrumb-item active mb-3">Admin Servis (Сервис)</li>
                  </ol>
              </nav>
          </div>
          <button class="btn btn-carousel ms-auto mt-3" style="background: #94bd1b" data-bs-toggle="modal" data-bs-target="#addportfolio">Добавить</button>
      </div>
      <!-- End Page Title -->
  </div>
    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes mt-1">
        
              <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="row g-3">
            @foreach ($servis as $item)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue w-100">
                <div class="icon">
                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                  </svg>
                  {!! $item->icon !!}
                </div>
                <h4><a href="">{{$item->title}}</a></h4>
                <p>{{$item->descripteon}}</p>
                <div class="card-body">
                    <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}"><i class="bi bi-pencil"></i></a>
                    <a  href="/delete_servis/{{$item->id}}" class="btn btn-Danger"><i class="bi bi-archive"></i></a>
                  </div>
              </div>
            </div>
            
     
            @endforeach
          </div>
  
        </div>
      </section><!-- End Services Section -->





      @foreach ($servis as $item)

             <!-- Modal Exit Carousel -->
             <div class="modal fade" id="exitservice{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header d-flex border-0">
                          <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                          <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form action="/edit_servis/{{$item->id}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="form-floating mt-2">
                               <div class="row">

                                <div class="form-floating mt-2">
                                    <input type="text" name="icon" value="{{$item->icon}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Иконка (взять в с Bootstrap 5)</label>
                                    @if($errors->has('icon'))
                                        {{$errors->first('icon')}}
                                    @endif
                                </div>

                                <div class="form-floating mt-2">
                                    <input type="text" name="title" value="{{$item->title}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Название карты</label>
                                    @if($errors->has('title'))
                                        {{$errors->first('title')}}
                                    @endif
                                </div>

                                <div class="form-floating mt-2">
                                    <input type="text" name="descripteon" value="{{$item->descripteon}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Описание краткое</label>
                                    @if($errors->has('descripteon'))
                                        {{$errors->first('descripteon')}}
                                    @endif
                                </div>

                              

                                </div>
                                </div>
                              
                              </div>
                              <button class="btn btn-lg btn-carousel mt-2 w-100" style="background: #94bd1b">Сохранить</button>
                          </form>
                      </div>
                  </div>
              </div>
              @endforeach
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
<div class="modal fade" id="addportfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header d-flex border-0">
              <h3 class="modal-title ms-auto" id="addservice">Добавление</h3>
              <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="/add_servis" method="POST" enctype="multipart/form-data">
                  @csrf


                <div class="form-floating mt-2">
                    <input type="text" name="icon" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Иконка (взять в с Bootstrap 5)</label>
                    @if($errors->has('icon'))
                        {{$errors->first('icon')}}
                    @endif
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Название карты</label>
                    @if($errors->has('title'))
                        {{$errors->first('title')}}
                    @endif
                </div>

                <div class="form-floating mt-2">
                    <input type="text" name="descripteon" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Описание краткое</label>
                    @if($errors->has('descripteon'))
                        {{$errors->first('descripteon')}}
                    @endif
                </div>


                  <button class="btn btn-lg btn-carousel mt-2 w-100" style="background: #94bd1b">Добавить</button>
              </form>
          </div>
      </div>
  </div>

@endsection