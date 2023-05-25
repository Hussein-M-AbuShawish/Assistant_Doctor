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
    <link rel="icon" href="../../img/logo.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/nice-select.css">
    <!-- Medipro CSS -->
    <link rel="stylesheet" href="../../css/style.css">
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

    <!-- login box -->
    <div class="content">
        <div class="d-flex justify-content-start">
            <!-- right side include information about website and logo -->
            <div class="blue-side-login">
                <p><img src="../../img/logo.png" alt="logo"> المساعد الطبي</p>
                <span>منصة طبية عربية تُعنى بتقديم المحتوى الطبي الموثوق، بأقلام آلاف الأطباء
                    المعتمدين، بالإضافة لإمكانية الطبيب بتسجيل الحالات المرضية الخاصة به ومتابعة الحالات.</span>
            </div>
            <!-- left side include register form -->
            <div class="white-side-login">
                <h3 class="title mb-5">تسجيل الأطباء على منصة المساعد الطبي</h3>
                <form class="form"  action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="firstname" placeholder="الاسم الأول "
                                    required="required">
                            </div>
                        </div>
                            @error('firstname')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 


                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="lastname" placeholder=" الاسم الأخير "
                                    required="required">
                            </div>
                        </div>
                            @error('lastname')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 


                        <div class="col-12">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="البريد الإلكتروني" required="required">
                            </div>
                        </div>
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 


                        <div class="col-12">
                            <div class="form-group">
                                <input type="password" name="password" placeholder="كلمة المرور" required="required">
                            </div>
                        </div>
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror



                        <div class="col-12">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required="required">
                            </div>
                           


                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="رقم الموبايل"  >
                            </div>
                            @error('phone')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror



                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="specialization" placeholder="التخصص" >
                            </div>
                        </div>
                            @error('spichlization')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                                    
                        

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                       
                        <div class="col-12 d-flex mt-3">
                            <div style="position: relative; margin-left: 10px;">
                                <div class="cbx">
                                    <input id="cbx" type="checkbox" />
                                    <label for="cbx"></label>
                                    <svg width="15" height="14" viewbox="0 0 15 14" fill="none">
                                        <path d="M2 8.36364L6.23077 12L13 2"></path>
                                    </svg>
                                </div>
                            </div>
                            <p>أوافق على شروط الخصوصية والاستخدام</p>
                        </div>

                    </>
                    <div class="form-group login-btn">
                        <button class="btn login" type="submit">تسجيل</button>
                    </div>
                </form>   
            </div>
        </div>
    </div>
    <!-- End login box -->
    <!-- jquery Min JS -->
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/niceselect.js"></script>
    <!-- Main JS -->
    <script src="../../js/main.js"></script>
</body>

</html>