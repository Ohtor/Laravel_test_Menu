<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    @csrf
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/">
                    <button type="button" class="btn btn-outline-primary me-2">На главную</button>
                </a>  
            </div>
            <div class="col-md-3 text-end">
                <a href="/registration">    
                    <button type="button" class="btn btn-primary">Регистрация</button>
                </a>
            </div>
        </header>
    </div>
    <div class="container text-center my-5">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <main class="form-signin w-100 m-auto" >
                    <form method="POST" action="/login/submit">
                        @csrf
                      <img class="mb-4" src="Avatar.png" alt="Тут должна быть картинка..." width="72" height="57">
                      <h1 class="h3 mb-3 fw-normal">Who are you?</h1>
                  
                      <div class="form-floating mt-2 mb-2">
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }}   </div>
                        @enderror
                      </div>
                      <div class="form-floating mt-2 mb-2">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                        {{-- @error('password')
                            <div class="alert alert-danger"> {{ $message }}   </div>
                        @enderror --}}
                      </div>
                  
                      <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember me
                        </label>
                      </div>
                      <button class="btn btn-primary w-50 py-2" type="submit">It's me</button>
                      {{-- <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p> --}}
                    </form>
                </main>
            </div>
        </div>        
    </div>    
</body>
</html>