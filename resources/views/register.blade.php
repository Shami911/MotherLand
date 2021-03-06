<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <title>Регистрация</title>
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="col-md-10 mx-auto col-lg-5">
            <div class="d-flex justify-content-center">
                <h1 style="font-weight: 700;line-height:56px;font-size: 48px">HOTEL</h1>
            </div>
            <div class="text-center">
                <h3>Регистрация</h3>
            </div>
            <form class="p-4 p-md-5" method="POST" action="/register">
              @csrf
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                    @error('email'){{$message}}@enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Пароль</label>
                    @error('password'){{$message}}@enderror
                </div>
                
                <div class="form-floating mb-3">
                  <input type="password"  name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Повторите пароль</label>
                  @error('password_confirmation'){{$message}}@enderror
              </div>
                <button class="w-100 btn btn-lg" style="background: #00c5db" type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</body>

</html>