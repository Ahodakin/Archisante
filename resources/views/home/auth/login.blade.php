
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front_end/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-end/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('front_end/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('front_end/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('front_end/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
        @include('partials.home_partials._spinner')
    <!-- Spinner End -->

        <!-- Navbar Start -->
        @include('partials.home_partials._navbar')
    <!-- Navbar End -->

                <!-- Banner Start -->
                <div class="container-fluid d-flex align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="bg-dark d-flex flex-column p-5">

                            <h2 class=" d-flex align-items-center justify-content-center text-white mb-3">Connexion</h2><br>
                            <form action="/login" method="POST">
                                <div class="mb-3">
                                    <div>
                                        @if($errors->any())
                                            <div class="col-10">
                                                @foreach ($errors->all() as $error)
                                                    <div class="alert alert-danger">{{ $error }}</div>
                                                @endforeach
                                            </div>
                                        @endif

                                        @if(session()->has('error'))
                                            <div class="alert alert-danger">{{session('error')}}</div>
                                        @endif

                                        {{--
                                        @if(session()->has('success'))
                                            <div class="alert alert-success">{{session('success')}}</div>
                                        @endif --}}
                                    </div>
                                    @csrf
                                  <label for="exampleInputEmail1" class="form-label">Email</label>
                                  <input type="email" name="email" class="form-control">

                                  {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Password</label>
                                  <input type="password" name="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Connexion</button>
                              </form><br>
                                <p>J'ai pas de comptes <a href="/signup">Je m'inscrire</a></p>
                        </div>
                    </div>
                 </div>

                <!-- Banner Start -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="{{asset('front_end/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('front_end/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('front_end/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('front_end/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front_end/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('front_end/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('front_end/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('front_end/lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('front_end/lib/twentytwenty/jquery.twentytwenty.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('front_end/js/main.js')}}"></script>
</body>

</html>



