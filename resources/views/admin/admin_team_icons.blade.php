@extends('admin.admin_layout')
@section('admin_main')

<main id="main" class="main">

    <div class="container d-flex flex-column px-0">
        <div class="pagetitle w-100">
            <div class="d-flex mb-1 w-100">
                <div class="w-100">
                    <nav class="d-flex w-100">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="admin_layout">Главная</a></li>
                            <li class="breadcrumb-item active">Иконки для номеров</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- End Page Title -->
        </div>

        <section id="testimonials" class="testimonials section-bg " style="color:black">
            <div class="container">
                <div class="section-title">
                    <h2>Иконка для карты</h2>
                  </div>
                <div class="row row-cols-1 row-cols-lg-3">
                    @foreach($team as $item)
                        <div class="col">
                            <div class="card mt-3">
                                <img src="/storage/AdminTeam/{{$item->img}}" style="height: 300px;object-fit:cover;" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->title}}</h5>
                                    @foreach($icons->where('tab', $item->id) as $icon)
                                        <div class="d-flex my-2 py-2 px-2" style="background-color: #94bd1b;">
                                            <div class="text-dark py-2 fs-5 ">
                                                {!! $icon->icon !!}
                                            </div>
                                            <div class="d-flex ms-auto">
                                                <button class="btn" data-bs-toggle="modal" data-bs-target="#editTeamIcon{{$icon->id}}"><i class="bi bi-pencil text-dark"></i></button>
                                                <button class="btn" data-bs-toggle="modal" data-bs-target="#deleteTeamIcon{{$icon->id}}"><i class="bi bi-trash text-dark"></i></button>
                                            </div>
                                        </div>

                                        <!--Start Modal Delete Team -->
                                        <div class="modal fade" id="deleteTeamIcon{{$icon->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header d-flex border-0">
                                                        <h3 class="modal-title ms-auto" id="addservice">Удаление</h3>
                                                        <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Вы действительно хотите удалить эту карту? Отменить это действие будет невозможно.</p>
                                                        <div class="d-flex">
                                                            <a href="/delete_team_icon/{{$icon->id}}" class="btn btn-danger ms-auto me-2">Да</a>
                                                            <button class="btn btn-info">Нет</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Delete Team -->

                                        <!-- Start Modal Edit Team -->
                                        <div class="modal fade" id="editTeamIcon{{$icon->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header d-flex border-0">
                                                        <h3 class="modal-title ms-auto" id="exitservice">Редактирование иконок</h3>
                                                        <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/edit_team_icon/{{$icon->id}}" method="POST">
                                                        @csrf
                                                            <div class="form-floating mt-2">
                                                                <div class="row">

                                                                    <div class="form-floating mt-2">
                                                                        <input type="text" name="icon" value="{{$icon->icon}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">Название номера</label>
                                                                        @if($errors->has('icon'))
                                                                            {{$errors->first('icon')}}
                                                                        @endif
                                                                    </div>

                                                                    <div class="form-floating mt-2">
                                                                        <input type="text" name="description" value="{{$icon->description}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                        <label for="floatingInput">Описание</label>
                                                                        @if($errors->has('description'))
                                                                            {{$errors->first('description')}}
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
                                    <button class="btn ms-auto btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addTeamIcon{{$item->id}}">Добавить иконку</button>
                                </div>
                            </div>        
                        </div>

                        <!-- Modal Add Carousel -->
                        <div class="modal fade" id="addTeamIcon{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header d-flex border-0">
                                        <h3 class="modal-title ms-auto" id="addservice">Добавление</h3>
                                        <button type="button" class="btn-close fs-4" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/add_team_icon/{{$item->id}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                            <div class="form-floating mt-2">
                                                <input type="text" name="icon" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Иконка</label>
                                                @if($errors->has('icon'))
                                                    {{$errors->first('icon')}}
                                                @endif
                                            </div>

                                            <div class="form-floating mt-2">
                                                <input type="text" name="description" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Описание</label>
                                                @if($errors->has('description'))
                                                    {{$errors->first('description')}}
                                                @endif
                                            </div>

                                            <button class="btn btn-lg btn-info mt-3 w-100">Добавить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    @endforeach
                </div>
          
            </div>
        </section><!-- End Testimonials Section -->
    </div>
         
</main>
<!-- End #main -->
@endsection