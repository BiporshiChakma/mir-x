<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}" />
        <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin />
        <link href="{{asset('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap')}}" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="{{asset('js/axios.min.js')}}"></script>
    </head>
    <body class="d-flex flex-column h-100">

        
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container px-5">
            <a class="navbar-brand" href="{{url('/')}}"><span class="fw-bolder text-primary">Start Bootstrap</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/resume')}}">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/projects')}}">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
        @include('components.loader')
        <div class="" id="content-div">
            @yield('content')
        </div>
        @include('components.footer')

       
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        
    
</body>
</html>