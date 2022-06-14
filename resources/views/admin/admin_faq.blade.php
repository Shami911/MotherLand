@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

  <div class="container d-flex flex-column px-0">
    <div class="pagetitle">
      <div class="d-flex">
    
      </div>
      <!-- End Page Title -->
  </div>
   
             
<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg text-dark" >
    <div class="container" data-aos="fade-up">
  
      <div class="section-title">
        <button class="btn btn-carousel ms-auto btn-primary p-2 m-3" style="background: #1bbd36" data-bs-toggle="modal" data-bs-target="#addportfolio">Добавить вопрос</button>

        <h2>Часто задаваемые вопросы</h2>
      </div>
  
      <div class="faq-list">
          
        @foreach ($faq as $item)
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{$item->id}}">{{$item->question}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-{{$item->id}}" class="collapse show" data-bs-parent=".faq-list">
              <p>
                {{$item->answer}}
              </p>

              <div class="card-body">
                <a href="#" class="btn btn-info p-2" data-bs-toggle="modal" data-bs-target="#exitservice{{$item->id}}">Редактировать <i class="bi bi-pencil ms-2"></i></a>
                <a  href="/delete_faq/{{$item->id}}" class="btn btn-Danger p-2 mt-2">Удалить <i class="bi bi-archive ms-2"></i></a>
              </div>
            </div>
          </li>
  
        </ul>
        @endforeach
      </div>
  
    </div>
  </section><!-- End Frequently Asked Questions Section -->
  


             <!-- Modal Exit Carousel -->
             @foreach ($faq as $item)
             <div class="modal fade" id="exitservice{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header d-flex border-0">
                          <h3 class="modal-title ms-auto" id="exitservice">Редактирование сервиса</h3>
                          <button id="close_clients{{$item->id}}" type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                            <form action="/edit_faq/{{$item->id}}" method="POST">
                            @csrf
                              <div class="form-floating mt-2">
                               <div class="row">

                                  <div>
                                      <label>Вопрос</label>
                                      <input type="text" name="question" value="{{$item->question}}" class="form-control mt-1">
                                      @if($errors->has('question'))
                                          {{$errors->first('question')}}
                                      @endif
                                  </div>

                                  <div>
                                    <label>Ответ</label>
                                    <input type="text" name="answer" value="{{$item->answer}}" class="form-control mt-1">
                                    @if($errors->has('answer'))
                                        {{$errors->first('answer')}}
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



<!-- Modal Add Carousel -->
<div class="modal fade" id="addportfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header d-flex border-0">
              <h3 class="modal-title ms-auto" id="addservice">Добавление</h3>
              <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="/add_faq" method="POST">
                  @csrf

                  <div>
                    <label>Вопрос</label>
                    <input type="text" name="question" class="form-control mt-1">
                    @if($errors->has('question'))
                        {{$errors->first('question')}}
                    @endif
                </div>

                <div>
                  <label>Ответ</label>
                  <input type="text" name="answer" class="form-control mt-1">
                  @if($errors->has('answer'))
                      {{$errors->first('answer')}}
                  @endif
              </div>

              </div>

                  <button class="btn btn-lg btn-carousel mt-2 w-100">Добавить</button>
              </form>
          </div>
      </div>
  </div>

@endsection