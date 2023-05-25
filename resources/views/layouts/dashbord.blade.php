<!doctype html>
<html lang="ar">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>المساعد الطبي</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('../img/logo.png')}}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('../css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('../css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('../css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('../css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('../css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('../css/about.css')}}">
    <link rel="stylesheet" href="{{asset('../css/all.min.css')}}">
    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- Header Area -->
    <header class="header">
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="logo d-flex align-items-center justify-content-start">
                <div class="logo-img">
                    <img src="../img/logo.png" alt="">
                </div>
                <p class="mb-0">
                    المساعد الطبي
                </p>
            </div>
            <div class="main-menu">
                <ul class="nav menu">
                    <li><a href="../index.html">الصفحة الرئيسية</a></li>
                    <li><a href="#"><i class="icofont-ui-user ml-3"></i> حسابي <i
                                class="icofont-rounded-down mr-2"></i></a>
                        <ul class="dropdown">
                            <li><a href="profile">الملف الشخصي</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            تسجيل الخروج
                            </a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </ul>
                    </li>

                    <li class="notification-list">
                        <a href="#"><i class="icofont-notification"></i></a>
                        <ul class="dropdown">
                            <p>لا توجد اشعارات</p>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->
    <!-- page content -->
    <div class="page-content">
        <!-- right side include menu for move between website pages -->
        <div class="right-side">
            <div class="avatar d-flex justify-content-start align-items-center">
                <div class="img ml-3">
                    <img src="{{asset( Auth::user()->profile_img)}} " width="80px" height="80px">
                </div>
                <div class="name">
                    <span>{{ Auth::user()->firstname}} </span>
                </div>
            </div>
            <div class="list">
                <ul>
                    <li><a href="profile"> <i class="icofont-doctor"></i>الملف الشخصي</a></li>
                    <li><a href="{{route('home.index')}}"><i class="icofont-file-alt"></i>مدوناتي</a></li>
                    <li><a href="{{route('operation.index')}}"><i class="icofont-calendar"></i>جدول العمليات</a></li>
                    <li><a href="./patient.html"><i class="icofont-patient-bed"></i>تشخيص المريض</a></li>
                    <li><a href="{{route('addcase.index')}}" ><i class="icofont-prescription"></i>حالات المتابعة</a>
                    </li>
                    <li><a href="{{route('contact.index')}}"><i class="icofont-gears"></i>الدعم الفني</a></li>
                </ul>
            </div>
        </div>



        @yield('content')





    </div>
    <!-- End page content  -->
    <!-- jquery Min JS -->
    <script src="{{asset('../js/jquery.min.js')}}"></script>
    <script src="{{asset('../js/bootstrap.min.js')}}"></script>
    <script src="{{asset('../js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('../js/niceselect.js')}}"></script>
    <script src="{{asset('../js/aos.js')}}"></script>
    <script src="{{asset('../js/popper.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('../js/main.js')}}"></script>
</body>

</html>