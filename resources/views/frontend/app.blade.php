<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>news portal</title>
    {{-- link css --}}
    <link rel="stylesheet" href=" {{ asset('css/custom.css') }} ">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- for icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


</head>

<body>
    {{-- start topbar --}}
    <div class="bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-light">
                    thursday,26,2023
                </div>
                <div class="col-md-6 d-flex-end">
                    <i class="bi bi-facebook text-light"></i>
                    <i class="bi bi-twitter text-light"></i>
                    <i class="bi bi-instagram text-light"></i>
                    <i class="bi bi-linkedin text-light"></i>

                </div>
            </div>
        </div>
    </div>
    {{-- end topbar --}}

    {{-- start logo and top ads --}}
    <div>
        <div class="topbarad container py-2">

            <div class="row">
                {{-- for logo --}}
                <div class="col-lg-3">
                    <div class="container">
                        <img src="https://s3.amazonaws.com/images.seroundtable.com/google-sunset-1529582903.jpg"
                            class="img-fluid" alt="">
                    </div>
                </div>
                {{-- for ads --}}
                <div class="col-md-6">
                    <img src="https://visme.co/blog/wp-content/uploads/how-to-create-winnig-visual-for-your-fb-ad-header-2.gif"
                        class="img-fluid" alt="">
                </div>


            </div>

        </div>
    </div>
    {{-- end logo and top ads --}}


    {{-- start navbar --}}
    @include('frontend.components.navbar')
    {{-- end nav bar --}}

    @yield('content')


    {{-- start footer --}}
    @include('frontend.components.footer')
    {{-- end footer --}}

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
