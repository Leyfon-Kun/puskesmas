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

    <div class="container card " style="width: 23rem;">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="/">
                @csrf
                <div class="d-flex no-block card-body ">
                <img class="mb-10" src="{{ asset('template') }}/assets/img/brand/unknown.png" alt="">
                </div>
                <div class="form-floating">
                    <label for="floatingInput">Username:</label>
                    <input type="username" class="form-control" name="username" id="floatingInput" placeholder="Username">
                </div>
                <div class="form-floating">
                    <label for="floatingPassword">Password:</label>
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                </div>
                <br>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </main>
    </div>

</body>
</html>
