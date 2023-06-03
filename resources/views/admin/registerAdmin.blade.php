<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/pelanggan.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="login">
        <div class="login-wrapper shadow-5-strong">
            <div class="row g-0">
                <div class="col-md-6 img-login">
                </div>
                <div class="col-md-6">
                    <div class="login-form">
                        <h3 class="text-center mb-4 mt-1">Register admin</h3>
                        <form method="POST" action="{{ route('admin.register') }}">
                            @csrf
                            <div class="form-outline mb-4">
                                <input type="text" id="form2Example1" name="name" class="form-control" />
                                <label class="form-label" for="form2Example1">Nama</label>
                            </div>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example1" name="email" class="form-control" />
                                <label class="form-label" for="form2Example1">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example2" name="password" class="form-control" />
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example2" name="password_confirmation" class="form-control" />
                                <label class="form-label" for="form2Example2">Konfirmasi Password</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>
