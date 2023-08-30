
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quizz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('landingpage/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('landingpage/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('landingpage/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('landingpage/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('landingpage/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-5 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0 text-dark">Quizz</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                    </div>
                    <a href="/" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3 my-2">Back</a>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-white mb-5">
                <div class="container my-3 py-3 col-lg-8">
                    <form action="/quiz/{{$quiz->code}}" method="POST">
                        @csrf
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="text-center">{{$quiz->quizTitle}}</h3>
                            <p class="text-dark text-justify">{{$quiz->desc}}</p>
                        </div>
                    </div>

                    {{-- question div --}}
                    @foreach ($questions as $question)
                    <div>
                            @if ($question->type == "short")
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h6 class="mb-3 text-dark">{{$question->questionTitle}}</h6>
                                        <input type="text" class="form-control text-dark" id="" placeholder="" name="{{$question->id}}">
                                      </div>
                                </div>
                            </div>
                            @elseif ($question->type == "long")
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h6 class="mb-3 text-dark">{{$question->questionTitle}}</h6>
                                        <div class="mb-3">
                                        <textarea class="form-control text-dark" id="" name="{{$question->id}}"></textarea>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            @elseif ($question->type == "single")
                            
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h6 class="mb-3 text-dark">{{$question->questionTitle}}</h6>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label text-dark" for="flexRadioDefault1">
                                                  test
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label text-dark" for="flexRadioDefault1">
                                                  Default radio
                                                </label>
                                              </div>
                                        </div>
                                      </div>
                                </div>
                            </div>

                            @elseif ($question->type == "multiple")
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <h6 class="mb-3 text-dark">{{$question->questionTitle}}</h6>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label text-dark" for="flexCheckDefault">
                                                  Default checkbox
                                                </label>
                                              </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label text-dark" for="flexCheckDefault">
                                                  Default checkbox
                                                </label>
                                              </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label text-dark" for="flexCheckDefault">
                                                  Default checkbox
                                                </label>
                                              </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label text-dark" for="flexCheckDefault">
                                                  Default checkbox
                                                </label>
                                              </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            @endif
                    </div> 
                    @endforeach
                    <div class="">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Sleman,Yogyakarta</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+62 89753580</p>
                        <p><i class="fa fa-envelope me-3"></i>quizz@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>If you have any comment ro suggestion please contact us!</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('landingpage/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('landingpage/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('landingpage/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('landingpage/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('landingpage/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('landingpage/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('landingpage/js/main.js')}}"></script>
</body>

</html>