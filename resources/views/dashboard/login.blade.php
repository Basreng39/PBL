<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">
</head>
<body>
    <div class="container position-absolute top-50 start-50 translate-middle">

        <div class="row justify-content-center">
            <div class="col-md-5">

                {{-- @if (session()->has("success"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session("success") }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif --}}

                    <main class="form-signin ">
                    <h1 class="h3 mb-3 fw-normal text-center">Please LogIn</h1>
                    <form>

                        <div class="form-floating ">
                        <input type="email" class="mt-4 form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                        <input type="password" class="form-control mb-4" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                </main>
            </div>
        </div>

    </div>
</body>
</html>
