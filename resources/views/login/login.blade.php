<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/signin.css">
    <title>Login</title>
</head>
<body>

<div class="">
    <div class="card justify-content-center" style="width: 23rem;">
        <main class="form-signin w-100 m-auto">
            <form>
            <div class="d-flex no-block card-body align-items-center">
                <img class="mb-4" src="{{ asset('template') }}/assets/img/brand/Logo-Puskesmas.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 fw-normal">Puskesmas</h1>
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Username:</label>
                    <input type="username" class="form-control" id="floatingInput" placeholder="Username">
                </div>
                <div class="form-floating">
                    <label for="floatingPassword">Password:</label>
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                </div>
                <br>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </main>
    </div>
</div>

</body>
</html>
