<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Quizz</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/dist/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/simple-datatables/style.css')}}">

    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/dist/assets/css/app.css')}}">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/dashboard">Quizz</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-item  ">
                            <a href="/dashboard/quiz/create" class='btn btn-primary'>
                                <span>&plus; Create Quiz</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/dashboard/quiz" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        @if ( Auth::user()->role == "admin")
                        <li class="sidebar-item">
                            <a href="/dashboard/user" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>User</span>
                            </a>
                        </li>  
                        @endif

                        <li class="sidebar-item">
                            <a href="/dashboard/result" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Result</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                                            <p class="mb-0 text-sm text-gray-600">{{ Auth::user()->role }}</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="../../admin/dist/assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello,{{ Auth::user()->name }}</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="/profile"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                        <hr class="dropdown-divider">
                                    </li>

          
                                    <li><button class="dropdown-item"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i>
                                                <form method="POST" class="d-inline" action="{{ route('logout') }}">
                                                    @csrf
                        
                                                    <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                        </button>
                                            
                                            
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        <div id="main-content">
@yield('mainContent')
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Quizz</p>
                    </div>
                </div>
            </footer>
            </div>
        </div>
    </div>
    <script src=""{{asset('admin/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src=""{{asset('admin/dist/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src=""{{asset('admin/dist/assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src=""{{asset('admin/dist/assets/js/pages/dashboard.js')}}"></script>
    @yield('script')

    <script src=""{{asset('admin/dist/assets/js/main.js')}}"></script>
</body>

</html>