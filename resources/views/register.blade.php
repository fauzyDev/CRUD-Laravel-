<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Toko Online | Register</title>
</head>

<body class="bg-black">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card border-primary card shadow">
                    <div class="mt-4">
                        <h5 class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                fill="currentColor" class="bi bi-send-plus-fill" viewBox="0 0 16 16">
                                <path
                                    d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                                <path
                                    d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
                            </svg> Create an <span class="font-weight-bold text-primary">Account!</span></h5>
                    </div>
                    <div class="card-body">
                        <form action="/register" method="POST">
                            @csrf

                            @if (session()->has('informasi'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('informasi') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="close"></button>
                                </div>
                            @endif

                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name"
                                    autocomplete="off" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" name="email" class="form-control" placeholder="Email"
                                    autocomplete="off" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    autocomplete="off" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" name="phone" class="form-control" placeholder="Phone"
                                    autocomplete="off" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea name="alamat" class="form-control" placeholder="Alamat" autocomplete="off" required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" name="" value="SigIn"
                                    class="rounded-pill form-control btn btn-primary btn-block">
                            </div>
                            <div class="text-center mt-3" mb-4>
                                <a href="/">Please Login!</a>
                                <p class="mt-2"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/boostrap.min.js"></script>
</body>

</html>
