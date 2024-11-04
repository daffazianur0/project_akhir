<!doctype html>
<html lang="en">

<head>
    @include('Template.head')
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('StyleLogin/css/style.css') }}">

    <style>
        .login-wrap .icon img {
            width: 400%;
            height: 400%;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>


</head>

<body>
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/logo-icon.jpg') }}" alt="Login Icon"
                                style="width: 50px; height: 50px;">
                        </div>
                        <h3 class="text-center mb-4">Lupa Password</h3>
                        <form class="mx-auto" action="{{ route('password.email') }}" method="post">
                            @csrf

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Email"
                                    name="email" required>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="{{ route('login') }}">Kembali</a>
                            </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Kirim Email</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="{{ asset('Login/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Login/js/popper.js') }}"></script>
    <script src="{{ asset('Login/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Login/js/main.js') }}"></script>

</body>

</html>
