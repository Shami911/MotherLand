@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0" style="background: white; color:black">
    <div class="pagetitle">
      <div class="d-flex">
          <div>
              <nav>
                  <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                      <li class="breadcrumb-item active">Clients Contact (Связь с нами)</li>
                  </ol>
              </nav>
          </div>
          {{-- <button class="btn btn-carousel ms-auto btn-primary " data-bs-toggle="modal" data-bs-target="#addportfolio">Добавить</button> --}}
      </div>
      <!-- End Page Title -->
  </div>
  
  <section id="contact" class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Cвязь с нами</h2>
          </div>
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="card-body w-100 text-center">
            <a href="#" class="btn" style="background: #1bbd36" data-bs-toggle="modal" data-bs-target="#exitservice{{$contact->id}}">Редактировать</a>
        </div>
        <div class="col-lg-10 mt-3">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="bi bi-geo-alt"></i>
                <h4>Мы находимся:</h4>
                <p>{{$contact->address}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{$contact->email}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-phone"></i>
                <h4>Телефон:</h4>
                <p>{{$contact->tel}}</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->



         
         
    
  </section>
</div>

</main>

     <!-- Modal Exit Carousel -->
     <div class="modal fade" id="exitservice{{$contact->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex border-0">
                    <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                    <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/edit_contact/{{$contact->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mt-2">
                            <div class="row">


                                <div class="form-floating mt-2">
                                    <input type="text" name="address" value="{{$contact->address}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Aдрес</label>
                                    @if($errors->has('address'))
                                        {{$errors->first('address')}}
                                    @endif
                                </div>

                                <div class="form-floating mt-2">
                                    <input type="email" name="email" value="{{$contact->email}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Введите email</label>
                                    @if($errors->has('email'))
                                        {{$errors->first('email')}}
                                    @endif
                                </div>

            
                                <div class="form-floating mt-2">
                                    <input type="tel" name="tel" value="{{$contact->tel}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Пункты с двумя галочками</label>
                                    @if($errors->has('tel'))
                                        {{$errors->first('tel')}}
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
<!-- End #main -->
@endsection