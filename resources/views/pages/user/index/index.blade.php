<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(@$title->title != null)
    <title>{{$title->title}}</title>
    @else
    <title>أجهزة ثلاثية الأبعاد</title>
    @endif
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('user/assets/icons/logo.svg') }}" type="image/x-icon" />
    <meta property="og:image" itemprop="image" content="https://zen-boyd.161-97-115-110.plesk.page/3dorgans/public/user/assets/icons/logo.png">
    @if(@$title->discription != null)
    <meta name="description" content="{{$title->discription}}" />
    @else
    <meta name="description" content="شركة إدراك للإستشارات الإدارية والتدريب الإستشاري" />
    @endif

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- StyleSheet -->
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700&display=swap" rel="stylesheet">
    
   <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/fonts.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Responsive Sheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/jquery.pageLoading.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/ahsan.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/css/zahid.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/asim.css') }}">


    <style type="text/css">
        @font-face {
            font-family: JannaRegular;
            src: url("{{ asset('assets/fonts/JannaLTRegular.ttf') }}");
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: JannaBold;
            src: url("{{ asset('assets/fonts/NotoSans-Bold.ttf') }}");
        }

        body {
            font-family: 'JannaRegular';
        }
    </style>
</head>

<body>
    <div class="toggle-overlay"></div>
    <div class="content-wrapper hide-on-load">
        <nav class="navbar navbar-expand-lg navbar-light desktop-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">
                                من نحن
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">ماهي
                                تقنية الـ 3D</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services-section" class="nav-link">الخدمات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#design">مجتمع المصممين</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                        </li>
                        <li class="mobile-menu">
                            <div class="left-side">
                                <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal"><img src="{{ asset('user/assets/icons/avatar.svg') }}" class="profile-img" alt="avatar"></a>
                                @auth
                                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}!</a>
                                @endauth
                                <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>
                                <span>
                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                </span>
                            </div>
                        </li>

                    </ul>
                </div>
                @auth
                <div class="left-side desktop-menu">

                    <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                        {{-- @if (auth()->user()->profile != null)
                                @if (@auth()->user()->profile == null)
                                    <div class="profile-img">
                                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                </div>
                @else
                <div class="profile-img">
                    <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">

                </div>
                @endif
                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>
                --}}
                <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                    {{-- @if (auth()->user()->profile != null) --}}
                    @if (@auth()->user()->profile == null)
                    <div class="profile profile-icon">
                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                    </div>
                    @else
                    <img class="" style="width:30px;height:30px;" alt="" src="{{ asset(Auth::user()->profile) }}">
                    @endif
                   
                    <a href="#membership" class="dot ms-auto border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>
                 
                    <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>


                    <a href="{{route('logout')}}" onclick="return logout(event);" class="ms-auto dot border-bottom" class="dot m-0 border-bottom">
                        تسجيل خروج
                    </a>
                    <script type="text/javascript">
                        function logout(event) {
                            event.preventDefault();
                            var check = confirm("هل تريد حقا الخروج؟");
                            if (check) {
                                document.getElementById('logout-form').submit();
                            }
                        }
                    </script>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button hidden type="submit" class=" sub-slide-item" style=" color:red; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Log
                            Out</button>

                    </form>
                    <span>

                        <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                        <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                    </span>
            </div>
            @else
            <div class="left-side">
                <a href="#login" data-bs-toggle="modal" class="register-icon" data-bs-target="#loginModal">تسجيل دخول</a>
                <a href="#register" class="ms-auto register-icon" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>
                <span>
                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                </span>
            </div>
            @endauth
    </div>
    </nav>

    <div id="wrapper" class="mobile-nav">
        <div id="sidebar-wrapper">
            <div class="area-brand">
                <a class="" href="#">
                    <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="mmnue">
                <ul class="sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ماهي
                            تقنية الـ 3D</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services-section" class="nav-link">الخدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">مجتمع المصممين</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                    </li>
                   @if(Auth::user()) 
                    <li class="nav-item pt-0"> <a href="#requests" class="nav-link ms-auto dot " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a></li>
                    <li class="nav-item pt-0">
                        <a class="nav-link dot" href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>تسجيل الخروج</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">

                        <a href="#login" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#loginModal">تسجيل دخول</a>
                    </li>
                    <li class="nav-item">
                        <a href="#register" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                    </li>
                    @endif
                    <li class="">
                        <div class="mobile-social-icon">

                            <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                            <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-3 mobile-logo">

                        <div class="area-brand">
                            <a class="" href="#">
                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9 mobile-pro-icon">
                        <button class="btn mob-tog-btn" id="menu-toggle"><i class="fa-solid fa-bars"></i></button>

                        <div class="mobile-profile">
                            
                   
                            <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal" ><img src="{{(@Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset(Auth::user()->profile) }}" class="profile-img" alt="avatar"></a>
                            @if(Auth::user())
                            <a href="#" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ Auth::user()->name }}!</a>
                            @endif
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu start here -->

    

    <!-- mobile menu end here -->
    <!-- <section class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="carousel-inner">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                </div>
                <div class="carousel-item active">
                  <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg" alt="banner-bg">
                  <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands move" alt="hands">
                  <div class="row">
                    <div class="col-md-7">
                      <span class="outline dot animate__animated animate__slideInLeft animate__slower d-block">اهلاً
                        وسهلاً</span>
                      <h2 class="title no-border animate__animated animate__slideInRight animate__slower">لنبتكر لمستقبل
                        أفضل !</h2>
                      <p class="description">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                      </p>
                      <button class="btn btn-sky">المزيد</button>
                      <button class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}"
                          alt="arrow-down"></button>
                    </div>
                    <div class="col-md-5">
                      <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg" alt="black-bg">
                      <div class="top boxContainer">
                        <div class="blue-box"></div>
                        <img src="{{ asset('user/assets/images/medical.png') }}" class="img-fluid img-behind" alt="medical">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg" alt="banner-bg">
                  <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands" alt="hands">
                  <div class="row">
                    <div class="col-md-7">
                      <span class="outline dot">اهلاً وسهلاً</span>
                      <h2 class="title no-border">! لنبتكر لمستقبل أفضل</h2>
                      <p class="description">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                      </p>
                      <button class="btn btn-sky">المزيد</button>
                      <button class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}"
                          alt="arrow-down"></button>
                    </div>
                    <div class="col-md-5">
                      <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg" alt="black-bg">
                      <div class="top boxContainer">
                        <div class="blue-box"></div>
                        <img src="{{ asset('user/assets/images/medical.png') }}" class="img-fluid img-behind" alt="medical">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg" alt="banner-bg">
                  <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands" alt="hands">
                  <div class="row">
                    <div class="col-md-7">
                      <span class="outline dot">اهلاً وسهلاً</span>
                      <h2 class="title no-border">! لنبتكر لمستقبل أفضل</h2>
                      <p class="description">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                      </p>
                      <button class="btn btn-sky">المزيد</button>
                      <button class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}"
                          alt="arrow-down"></button>
                    </div>
                    <div class="col-md-5">
                      <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg" alt="black-bg">
                      <div class="top boxContainer">
                        <div class="blue-box"></div>
                        <img src="{{ asset('user/assets/images/medical.png') }}" class="img-fluid img-behind" alt="medical">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg" alt="banner-bg">
                  <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands" alt="hands">
                  <div class="row">
                    <div class="col-md-7">
                      <span class="outline dot">اهلاً وسهلاً</span>
                      <h2 class="title no-border">! لنبتكر لمستقبل أفضل</h2>
                      <p class="description">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                      </p>
                      <button class="btn btn-sky">المزيد</button>
                      <button class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}"
                          alt="arrow-down"></button>
                    </div>
                    <div class="col-md-5">
                      <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg" alt="black-bg">
                      <div class="top boxContainer">
                        <div class="blue-box"></div>
                        <img src="{{ asset('user/assets/images/medical.png') }}" class="img-fluid img-behind" alt="medical">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="row align-items-center" dir="ltr">
          <div class="col-md-4" dir="rtl">
            <div class="text-start">
              <figcaption class="map-cap side">
                <h6>اثناء العمل</h6>
                <p>خارج الصندوق</p>
              </figcaption>
              <div class="bottom boxContainer">
                <div class="blue-box"></div>
                <img src="{{ asset('user/assets/images/side-img.jpg') }}" >
              </div>
            </div>
          </div>
          <div class="col-md-8 padi-top">
            <div class="main-slide">
              <div><img src="{{ asset('user/assets/images/cgc.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/gas.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/sfda.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/mci.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/cgc.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/gas.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/sfda.png') }}"></div>
              <div><img src="{{ asset('user/assets/images/mci.png') }}"></div>
            </div>
            <div class="row pt-5 mt-5 align-items-end" dir="rtl">
              <div class="col-md-6">
                <div class="about-content">
                  <span class="outline dot right-center">+3D</span>
                  <h1 class="modal-title color-blue text-center">من نحن</h1>
                  <div class="description text-center">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                    يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                    التطبيق.
                  </div>
                  <div class="actions">
                    <button class="btn btn-sky invert">
                      المزيد
                      <img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <figcaption class="map-cap">
                  <h6>مقر العمل</h6>
                  <p>الرياض، المونسية، شارع احمد بن حنبل</p>
                </figcaption>
                <div class="map-place boxContainer">
                  <div class="blue-box"></div>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3988.7912337679813!2d103.77780549213008!3d1.3000914839605147!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1645634527875!5m2!1sen!2s"
                    width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="banner sample">
        <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg sample move-blue animate__animated animate__slideInRight animate__slower animate__delay-5s" alt="banner-bg">
        <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg sample move-black animate__animated animate__slideInLeft animate__slower animate__delay-5s" alt="black-bg">
        <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands sample move-hand" alt="hands">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12">
                    <div class="carousel-inner">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            @foreach($profile as $key=>$profiles)
                            @if($key == 0)
                            <div class="carousel-item active" id="{{$key}}">
                                @else
                                <div class="carousel-item" id="{{$key}}">
                                    @endif
                                    <div class="row justify-content-end">
                                        <div class="col-md-4 col-lg-7 first-col">
                                            
                                        <div class="mob-profile-heading">
                                                <span class="outline dot d-block">{{ $profiles->sub_heading }}
                                                </span>


                                                <h2 class="title no-border">
                                                    {{ $profiles->heading }}
                                                    !
                                                </h2>
                                        </div>
                                            <div class="static-text">
                                                <div class="mob-profile-heading-hide">
                                                
                                                <span class="outline dot d-block">{{ $profiles->sub_heading }}
                                                </span>


                                                <h2 class="title no-border">
                                                    {{ $profiles->heading }}
                                                    !
                                                </h2>
                                                </div>
                                                <p class="description">
                                                    {!!$profiles->body_text !!}
                                                </p>


                                                <button class="btn btn-sky">المزيد</button>
                                                <a href="#services-section" class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}" alt="arrow-down"></a href="#services-section">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-5">
                                            <div class="top boxContainer">
                                                <div class="blue-box"></div>
                                                @if (@$profiles->images != null)
                                                <img src="{{ asset($profiles->images) }}" class="img-fluid img-behind" alt="medical">
                                                @else
                                                <img src="{{ asset('user/assets/images/medical.jpg') }}" class="img-fluid img-behind" alt="medical">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="row align-items-center responsive-reverse" dir="ltr">
                        <div class="col-md-4" dir="rtl">
                            <div class="text-start">
                                <figcaption class="map-cap side sample">
                                    @if (@$side->subheading != null)
                                    <h6> {{$side->subheading}}</h6>
                                    @else
                                    <h6>اثناء العمل</h6>
                                    @endif
                                    @if (@$side->heading != null)
                                    <p> {{$side->heading}}</p>
                                    @else
                                    <p>خارج الصندوق</p>
                                    @endif


                                </figcaption>
                                <div class="bottom boxContainer sample heart-img">
                                    <div class="blue-box move-box"></div>
                                    @if (@$side->side_image != null)
                                    <img src="{{ asset('storage/' . $side->side_image) }}" alt="side-img">
                                    @else
                                    <img src="{{ asset('user/assets/images/side-img.jpg') }}" alt="side-img">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 padi-top">
                            <!-- counter -->
                            <div class="row">
                                <div class="col-md-8 tab-counter-width"></div>
                                <div class="col-md-2 task-number">
                                    <div class="counter">
                                        @if(@$counter->start != null)
                                        <span class="client-counter">{{$counter->start}}</span><span class="symbol">+</span>
                                        @else
                                        <span class="client-counter" data-count="12">0</span><span class="symbol">+</span>
                                        @endif
                                        <h5>عميل</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 task-number1">
                                    <div class="counter">
                                        @if(@$counter->end != null)
                                        <span class="client-counter" data-count="{{$counter->end}}">{{$counter->end}}</span><span class="symbol">+</span>

                                        @else
                                        <span class="client-counter" data-count="130">0</span><span class="symbol">+</span>
                                        @endif

                                        <h5>مشروع</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="counter">
                            <div class="counter-innder">
                                <span class="client-counter">30+</span>
                                <h5>counter</h5>
                            </div>

                        </div> -->
                            <div class="main-slide sample">
                                @if (@$logos->logo1 != null)
                                <div class="slide-logos">
                                    <img style="width: 120px;" src="{{ asset('storage/' . $logos->logo1) }}">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo2 != null)
                                <div class="slide-logos">
                                    <img style="width: 120px;" src="{{ asset('storage/' . $logos->logo2) }}">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo3 != null)
                                <div class="slide-logos">
                                    <img style="width: 120px;" src="{{ asset('storage/' . $logos->logo3) }}">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo4 != null)
                                <div class="slide-logos">
                                    <img style="width: 120px;" src="{{ asset('storage/' . $logos->logo4) }}">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo5 != null)
                                <div class="slide-logos">
                                    <img style="width: 120px;" src="{{ asset('storage/' . $logos->logo5) }}">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/mci.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo6 != null)
                                <div class="slide-logos">
                                    <img style="width: 120px;" src="{{ asset('storage/' . $logos->logo6) }}">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo7 != null)
                                <div class="slide-logos">
                                    <img style="width: 120px;" src="{{ asset('storage/' . $logos->logo7) }}">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif

                                @if (@$logos->logo8 != null)
                                <div class="slide-logos">
                                    <img style="width: 120px;" src="{{ asset('storage/' . $logos->logo8) }}">
                                </div>
                                @else
                                <div class="slide-logos">
                                    <img src="{{ asset('user/assets/images/gas.png') }}">
                                </div>
                                @endif
                            </div>
                            <div class="row pt-5 mt-5 align-items-end" dir="rtl">
                                <div class="col-md-9 col-lg-7 res-width-64">
                                    <div class="about-content" id="about-us" data-aos="fade-up">
                                        <span class="outline dot right-center">+3D</span>
                                        @if ($about != null)

                                        <h1 class="modal-title color-blue text-center line-heading">
                                            <span class="btm-line"><span class="inner-line"></span>{{ @$about->heading }}</span>
                                        </h1>
                                        @else
                                        <h1 class="modal-title color-blue text-center line-heading">
                                            <span class="btm-line"><span class="inner-line"></span> من نحن
                                            </span>
                                        </h1>
                                        @endif
                                        @if ($about != null)
                                        <p class="description">
                                            {!! @$about->bodytext !!}
                                            @else
                                        <div class="description text-center">
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                            مولد النص العربى، حيث
                                            يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                                            الحروف
                                            التى يولدها
                                            التطبيق.
                                        </div>
                                        @endif
                                        <div class="actions">
                                            <button class="btn btn-sky invert" data-bs-toggle="modal" data-bs-target="#aboutModal">
                                                المزيد
                                                <img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-5 res-width-36">
                                    <figcaption class="map-cap">
                                        <h6>مقر العمل</h6>
                                        <p>الرياض، المونسية، شارع احمد بن حنبل</p>
                                    </figcaption>
                                    <div class="map-place boxContainer">
                                        <div class="blue-box move-box"></div>
                                        @if (@$map->map_image != null)

                                        <img src="{{ asset('storage/' . $map->map_image) }}" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy"></img>

                                        @else
                                        <img src="{{ asset('user/assets/images/world-map.jpg') }}" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy"></img>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="request section" id="services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main dot-txt-main" data-aos="fade-up">
                        <span class="outline dot center">إختيار نوع الخدمة</span>
                        <h1 class="title"><span class="btm-line"><span class="inner-line"></span>
                                قدم طلبك
                            </span></h1>
                        <div class="description">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                النص العربى، حيث
                                يمكنك
                                أن
                                تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                                التطبيق.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 dot-txt-main">
                    <div class="image-place dot-effect" id="main-effect" data-aos="zoom-in" data-aos-offset="500">
                        <div class="pointer head">
                            <p>الجمجمة</p>
                        </div>
                        <div class="pointer arm">
                            <p>اليدين</p>
                        </div>
                        <div class="pointer chest">
                            <p></p>
                        </div>
                        <div class="pointer foot">
                            <p>الساقين</p>
                        </div>
                        <img src="{{ asset('user/assets/images/man-sitting.png') }}" class="img-fluid mx-auto d-block mt-5 mt-md-0 mt-lg-0 mt-xl-4" alt="man-sitting" width="500">
                    </div>
                    <div class="pt-5 pt-md-1 pt-lg-4 pt-xl-4 pt-xxl-4 medical-animate" data-aos="fade-up" data-aos-offset="200">
                        <span class="outline dot right left-right-h">أكثر من 13 عضو اصطناعي</span>
                        <h1 class="modal-title right-center"><span class="btm-line"><span class="inner-line"></span>

                                الخدمات الطبية
                            </span> </h1>
                        <div class="description">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                النص العربى، حيث
                                يمكنك
                                أن
                                تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                                التطبيق.</p>
                        </div>
                        <div class="actions">
                            @auth
                            <button class="btn btn-grey" data-bs-toggle="modal" data-bs-target="#healthServiesModal"><img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                                طلب
                                الخدمة</button>
                            @else
                            <button class="btn btn-grey authmasg-health"><img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                                طلب
                                الخدمة</button>

                            @endauth

                            <button class="btn btn-video" data-bs-toggle="modal" data-bs-target="#healthVideoModal"><img src="{{ asset('user/assets/icons/video.svg') }}" alt="video"> فيديو
                                تعريفي</button>
                            <p class='koib-health d-none mt-5 nav-link'><span style="color:red"> يتطلب التسجيل </span><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal"> للتسجيل اضغط هنا</a></p>
                        </div>
                        @auth
                        @if(@$orders->count() > 0 )
                        <div class="notification-box">
                            <p><span class="notification">{{count($orders)}}
                                </span>طلبات قائمة</p>
                        </div>
                        @endif
                        @endauth
                    </div>
                </div>
                <div class="col-md-6 dot-txt-main-left">
                    <div class="image-place effect-machine" data-aos="zoom-in" data-aos-offset="500" id="main-macine">
                        <div class="pointer top">
                            <p>مجسمات كبيرة</p>
                        </div>
                        <div class="pointer bottom">
                            <p>مجسمات صغيرة</p>
                        </div>
                        <img src="{{ asset('user/assets/images/machine.png') }}" class="img-fluid" alt="machine">
                    </div>
                    <div class="pt-5 public-animate" data-aos="fade-up" data-aos-offset="200">
                        <span class="outline dot left left-right-h">أكثر 20 خدمة مختلفة</span>
                        <h1 class="modal-title left"><span class="btm-line"><span class="inner-line"></span>
                                الخدمات العامة
                            </span></h1>
                        <div class="description">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                النص العربى، حيث
                                يمكنك
                                أن
                                تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                                التطبيق.</p>
                        </div>
                        <div class="actions">
                            <button class="btn btn-video" data-bs-toggle="modal" data-bs-target="#publicVideoModal"><img src="{{ asset('user/assets/icons/video.svg') }}" alt="video"> فيديو
                                تعريفي</button>
                            @auth
                            <button class="btn btn-grey invert" data-bs-toggle="modal" data-bs-target="#publicServiesModal"><img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                                طلب
                                الخدمة</button>
                            @else
                            <button class="btn btn-grey invert authmasg"><img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                                طلب
                                الخدمة</button>

                            <p class='koib d-none mt-5 nav-link'><span style="color:red"> يتطلب التسجيل </span><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal"> للتسجيل اضغط هنا</a></p>
                            @endauth

                        </div>
                        @auth
                        @if(@$publics->count() >0 )
                        <div class="notification-box mobile">
                            <p><span class="notification">{{count($publics)}}
                                </span>طلبات قائمة</p>
                        </div>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- ahsan html start here -->
<section class="mujtmah-almusmamen" id="design">
            <div class="container-m">
                <div class="mujtmah-almusmamen-heading-wrapper">
                    <div class="mujtmah-heading-box">
                        <div class="sub-heading-box">
                            <div class="red-dot"></div>
                            <p class="sub-heading-box__heading">إختيار نوع الخدمة</p>
                        </div>
                        <div class="heading-box">
                            <h1 class="mujtmah-almusmamen__heading">مجتمع المصممين</h1>
                            <div class="heading-box__underline"></div>
                        </div>
                    </div>
                    
                    <p class="mujtmah-almusmamen__para">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                    </p>
                    <!-- <a href="#" class="m-btn mujtmah-almusmamen-btn">تعرف أكثر</a> -->
                    <button type="button" class="m-btn mujtmah-almusmamen-btn" data-bs-toggle="modal" data-bs-target="#designModal">
                        تعرف أكثر
                    </button>
                </div>
                <div class="mujtmah-almusmamen-wrapper wrapper jst-btw">
                    <div class="mujtmah-box">
                        <div class="mujtmah-box__content">
                            <h1 class="mujtmah-box__heading">هل أنت مصمم 3D ؟</h1>
                            <p class="mujtmah-box__para">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                            </p>
                            <div class="mujtmah-box-btn-wrapper wrapper al-center">
                                <a href="#register" class="m-btn mujtmah-box-btn btn-white" data-bs-toggle="modal" data-bs-target="#registerModal">
                                    <img src="{{ asset('user/assets/images/arrow-8.png') }}" class="mujtmah-box-btn__img"> سجل الان
                                </a>
                                <a href="#" class="m-btn mujtmah-box-btn">
                                    <img src="{{ asset('user/assets/images/video.png') }}" class="mujtmah-box-btn__img2"> سجل الان
                                </a>
                            </div>
                        </div>
                        <div class="mujtmah-box__media">
                            <img src="{{ asset('user/assets/images/mujtmah-box__image.png') }}" class="mujtmah-box__image">
                            <div class="mujtmah-box__count">
                                <h1 class="mujtmah-box__count-heading">+50</h1>
                                <p class="mujtmah-box__count-sub-heading">مصمم</p>
                            </div>
                        </div>
                    </div>
                    <div class="mujtmah-box2">
                        <div class="mujtmah-box__media">
                            <div class="mujtmah-box__count2">
                                <h1 class="mujtmah-box__count-heading">+40</h1>
                                <p class="mujtmah-box__count-sub-heading">مصمم</p>
                            </div>
                            <img src="{{ asset('user/assets/images/mujtmah-box__image3.png') }}" class="mujtmah-box__image">
                        </div>
                        <div class="mujtmah-box__content">
                            <h1 class="mujtmah-box__heading">هل تحتاج مصمم 3D ؟</h1>
                            <p class="mujtmah-box__para">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                            </p>
                            <div class="mujtmah-box-btn-wrapper wrapper al-center">
                                <a href="#" class="m-btn mujtmah-box-btn btn-white">
                                    
                                    <img src="{{ asset('user/assets/images/arrow-8.png') }}" class="mujtmah-box-btn__img"> سجل الان
                                </a>
                                <a href="#" class="m-btn mujtmah-box-btn">
                                    <img src="{{ asset('user/assets/images/video.png') }}" class="mujtmah-box-btn__img2"> سجل الان
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- ahsan html end here -->

    <section class="contact section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main footer-white-heading">
                        @if (@$con->subheading != null)
                        <span class="outline dot center"> {{ $con->subheading }} </span>
                        @else
                        <span class="outline dot center">في أي وقت</span>
                        @endif

                        @if (@$con->heading != null)
                        <h1 class="title white"> <span class="btm-line"> <span class="inner-line"> </span>{{ $con->heading }}</span> </h1>
                        @else
                        <h1 class="title white"><span class="btm-line"> <span class="inner-line"> </span>
                                اتصل بنا
                            </span></h1>
                        @endif

                        @if (@$con->heading != null)
                        <div class="description">
                            <p> {!!$con->body_text !!}</p>
                        </div>
                        @else
                        <div class="description">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                النص العربى، حيث
                                يمكنك أن
                                تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                                يولدها التطبيق.</p>
                        </div>
                        @endif

                    </div>
                    <div class="map">
                        <img src="{{ asset('user/assets/images/map.svg') }}" class="img-fluid" alt="map">
                        <button class="btn btn-sky">الخريطة <img src="{{ asset('user/assets/icons/arrow.svg') }}" alt="arrow"></button>
                    </div>
                    <div class="row  justify-content-center">
                        <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="details">
                                <h6 class="title">موقع المكتب</h6>

                                @if (@$con->address != null)
                                <p>{{ $con->location_name }} <br> {{ $con->address }}</p>
                                @else
                                <p>الرياض <br> حي المونسية شارع أحمد بن حنبل</p>
                                @endif

                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="details">
                                <h6 class="title">أرقام التواصل</h6>

                                @if (@$con->phone != null)
                                <p>{{ $con->phone }}</p>
                                <p>{{ $con->email }}</p>
                                @else
                                <p>00966xxxxxxxxx</p>
                                <p>info@info.sa</p>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="footer-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.html">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about-us">
                                        من نحن
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services-section">الخدمات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">مجتمع المصممين</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact-us">اتصل بنا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <footer>
                <div class="row">
                    <div class="col-md-4 col-xl-4">
                        <div class="right">
                            <p>تصميم وتطوير شركة تيلرز</p>
                            <a href="https://tellers.sa/"><img src="{{ asset('user/assets/icons/tellers-logo.svg') }}" alt="tellers-logo"></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-xl-4">
                        <p>جميع الحقوق محفوظة لـ &nbsp;+3D&nbsp; لعام 2022</p>
                    </div>
                    <div class="col-md-3 col-xl-4">
                        <div class="social">
                            <a href="#"><img src="{{ asset('user/assets/icons/twitter-white.svg') }}" alt="twitter"></a>
                            <a href="#"><img src="{{ asset('user/assets/icons/instagram-white.svg') }}" alt="instagram"></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        </div>
        </footer>
        </div>
    </section>
    </div>
    @php
    $request = Session::get('req');
    @endphp
    </div>

    <!-- ///////////////////////////////////// services start here ////////////////////////////////-->
    <div class="modal fade page" id="servicesModal" tabindex="-1" aria-labelledby="servicesLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div>
                                    <span class="outline dot">إختيار نوع الخدمة</span>
                                    <h1 class="modal-title right">
                                        <span class="btm-line"> <span class="inner-line"> </span>
                                            قدم طلبك
                                        </span>
                                    </h1>

                                </div>

                                <div class="profile">
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                </div>
                            </div>
                            <div class="modal-body">
                                <p></p>
                            </div>
                            <div class="modal-body">
                                <section class="request section p-0">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="main dot-txt-main">
                                                    <div class="description mt-0">
                                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                                                            يمكنك
                                                            أن
                                                            تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 dot-txt-main pb-4">
                                                <div class="image-place dot-effect" data-aos="zoom-in" data-aos-offset="500">
                                                    <div class="pointer head">
                                                        <p>الجمجمة</p>
                                                    </div>
                                                    <div class="pointer arm">
                                                        <p>اليدين</p>
                                                    </div>
                                                    <div class="pointer chest">
                                                        <p></p>
                                                    </div>
                                                    <div class="pointer foot">
                                                        <p>الساقين</p>
                                                    </div>
                                                    <img src="{{asset('user/assets/images/man-sitting.png')}}" class="img-fluid mx-auto d-block mt-5 mt-md-0 mt-lg-0 mt-xl-1" alt="man-sitting" width="500">
                                                </div>
                                                <div class="pt-5 pt-md-1 pt-lg-5 pt-xl-5 pt-xxl-5 medical-animate" data-aos="fade-up" data-aos-offset="200">
                                                    <span class="outline dot right">أكثر من 13 عضو اصطناعي</span>
                                                    <h1 class="modal-title right-center">الخدمات الطبية
                                                    </h1>
                                                    <div class="description">
                                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                                                            يمكنك
                                                            أن
                                                            تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="btn btn-grey" data-bs-toggle="modal" data-bs-target="#healthServiesModal"><img src="{{asset('user/assets/icons/arrow-right.svg')}}" alt="arrow-right"> طلب الخدمة</button>
                                                        <button class="btn btn-video" data-bs-toggle="modal" data-bs-target="#healthVideoModal"><img src="{{asset('user/assets/icons/video.svg')}}" alt="video"> فيديو تعريفي</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 dot-txt-main-left pb-4" id="macine">
                                                <div class="image-place effect-machine" data-aos="zoom-in" data-aos-offset="500">
                                                    <div class="pointer top">
                                                        <p>مجسمات كبيرة</p>
                                                    </div>
                                                    <div class="pointer bottom">
                                                        <p>مجسمات صغيرة</p>
                                                    </div>
                                                    <img src="{{asset('user/assets/images/machine.png')}}" class="img-fluid"  alt="machine">
                                                </div>
                                                <div class="pt-5 public-animate" data-aos="fade-up" data-aos-offset="200">
                                                    <span class="outline dot left ">أكثر 20 خدمة مختلفة</span>
                                                    <h1 class="modal-title left"><span class="btm-line"><span class="inner-line"></span>
                                                            الخدمات العامة
                                                        </span> </h1>
                                                    <div class="description">
                                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                                                            يمكنك
                                                            أن
                                                            تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="btn btn-video" data-bs-toggle="modal" data-bs-target="#publicVideoModal"><img src="{{asset('user/assets/icons/video.svg')}}" alt="video"> فيديو تعريفي</button>
                                                        <button class="btn btn-grey invert" data-bs-toggle="modal" data-bs-target="#publicServiesModal"><img src="{{asset('user/assets/icons/arrow-right.svg')}}" alt="arrow-right"> طلب الخدمة</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-progress">
        <img src="{{asset('user/assets/icons/logo.svg')}}" alt="logo">
        <p class='progress text-center bg-transparent d-block'>0</p>

        <div class="progress-bar bar-load" id="bar"></div>
    </div>
 
    <!--///////////////////////////////////// services model end here ////////////////////////////////////-->

    

    <!-- ///////////////////////////////////// cleanshot Modal  start here ////////////////////////////////-->
   
    <div class="modal fade page" id="cleanshotModal" tabindex="-1" aria-labelledby="cleanshotLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                          
                            <div class="modal-body">

              
  <!-- header designer start here -->
  <div class="toggle-overlay"></div>
    <div class="content-wrapper hide-on-load">
        <nav class="navbar navbar-expand-lg navbar-light desktop-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">
                                من نحن
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">ماهي
                                تقنية الـ 3D</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services-section" class="nav-link">الخدمات</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">مجتمع المصممين</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                        </li>
                        <li class="mobile-menu">
                            <div class="left-side">
                                <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal"><img src="{{ asset('user/assets/icons/avatar.svg') }}" class="profile-img" alt="avatar"></a>
                                @auth
                                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}!</a>
                                @endauth
                                <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>
                                <span>
                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                </span>
                            </div>
                        </li>

                    </ul>
                </div>
                @auth
                <div class="left-side desktop-menu">

                    <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                        {{-- @if (auth()->user()->profile != null)
                                @if (@auth()->user()->profile == null)
                                    <div class="profile-img">
                                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                </div>
                @else
                <div class="profile-img">
                    <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">

                </div>
                @endif
                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>
                --}}
                <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                    {{-- @if (auth()->user()->profile != null) --}}
                    @if (@auth()->user()->profile == null)
                    <div class="profile profile-icon">
                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                    </div>
                    @else
                    <img class="" style="width:30px;height:30px;" alt="" src="{{ asset(Auth::user()->profile) }}">
                    @endif
                   
                    <a href="#membership" class="dot ms-auto border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>
                 
                    <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>


                    <a href="{{route('logout')}}" onclick="return logout(event);" class="ms-auto dot border-bottom" class="dot m-0 border-bottom">
                        تسجيل خروج
                    </a>
                    <script type="text/javascript">
                        function logout(event) {
                            event.preventDefault();
                            var check = confirm("هل تريد حقا الخروج؟");
                            if (check) {
                                document.getElementById('logout-form').submit();
                            }
                        }
                    </script>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button hidden type="submit" class=" sub-slide-item" style=" color:red; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Log
                            Out</button>

                    </form>
                    <span>

                        <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                        <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                    </span>
            </div>
            @else
            <div class="left-side">
                <a href="#login" data-bs-toggle="modal" class="register-icon" data-bs-target="#loginModal">تسجيل دخول</a>
                <a href="#register" class="ms-auto register-icon" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>
                <span>
                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                </span>
            </div>
            @endauth
    </div>
    </nav>

    <div id="wrapper" class="mobile-nav">
        <div id="sidebar-wrapper">
            <div class="area-brand">
                <a class="" href="#">
                    <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="mmnue">
                <ul class="sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ماهي
                            تقنية الـ 3D</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services-section" class="nav-link">الخدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">مجتمع المصممين</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                    </li>
                   @if(Auth::user()) 
                    <li class="nav-item pt-0"> <a href="#requests" class="nav-link ms-auto dot " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a></li>
                    <li class="nav-item pt-0">
                        <a class="nav-link dot" href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>تسجيل الخروج</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">

                        <a href="#login" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#loginModal">تسجيل دخول</a>
                    </li>
                    <li class="nav-item">
                        <a href="#register" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                    </li>
                    @endif
                    <li class="">
                        <div class="mobile-social-icon">

                            <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                            <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-3 mobile-logo">

                        <div class="area-brand">
                            <a class="" href="#">
                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9 mobile-pro-icon">
                        <button class="btn mob-tog-btn" id="menu-toggle"><i class="fa-solid fa-bars"></i></button>

                        <div class="mobile-profile">
                            
                   
                            <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal" ><img src="{{(@Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset(Auth::user()->profile) }}" class="profile-img" alt="avatar"></a>
                            @if(Auth::user())
                            <a href="#" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ Auth::user()->name }}!</a>
                            @endif
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

<!-- zahid page modal start here -->

 
<section class="cleanshot">
        <div class="container">
            <div class="row">
                <div class="col-md-12 cleanshot-close-btn">
                 <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="row cleanshot-row align-items-end">
             
                <div class="col-md-8">
                    <div class="small-card">
                         <img class="designer-8" src="{{ asset('user/assets/images/design-8.png') }}" alt="">
                        <img src="{{ asset('user/assets/images/cleancard.png') }}"alt="">
                        <img src="{{ asset('user/assets/images/cleancard2.png') }}"alt="">
                        <img src="{{ asset('user/assets/images/cleancard3.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="adobe-icon">
                        <h6>البرمج المستخدمة</h6>
                        <img src="{{ asset('user/assets/images/ai.png') }}" alt="">
                        <img src="{{ asset('user/assets/images/dn.png') }}"alt="">
                        <img src="{{ asset('user/assets/images/in.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container head-clean">
        <div class="row">
            <div class="col-md-6 ">
                <div class="profile tag-profile">
                <a href="#profile">
                    <!-- <img src="{{ asset('user/assets/icon/avatar.svg')}}" alt="avatar"> -->
                <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                <div class="star-profile-txt">
                    <span>مصمم</span>
                    <h4> أسم المصمم</h4>
                    <div class="star-reating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    </div>
                </div>
               
                </div>
            </div>
            <div class="col-md-6">
                <button class="btn btn-sky invert personal-pro">
                    الملف الشخصي
                   
                  </button>
            </div>
            
            
        </div>
        <div class="row clean-headings">
            <div class="col-md-12">
                <h3>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h3>
                <h6>27 ديسمبر 2021</h6>
            
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
        </div>
        </div>
        
            <div class="form form-clean">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                        <label class="form-label dot">اختيار اللون</label>
                        <div class="color-circle-main">
                            
                        
                        <div  class="color-circle">
                           
                        </div>
                        <div  class="color-circle orange">
                           
                        </div>
                        <div  class="color-circle yellow">
                           
                        </div>
                        <div  class="color-circle">
                           
                        </div>
                    </div>
                       
                    </div>

                 
                        
                    
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                    <label class="form-label dot">الكمية</label>
                    <select class="form-select gender" required name="gender" aria-label="Default select example">
                        <option selected>1</option>
                       
                    </select>                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                    <label class="form-label dot">المقاسات</label>
                    <select class="form-select gender" required name="gender" aria-label="Default select example">
                        <option selected>اختيار المقاس</option>
                       
                    </select>                </div>
            
                    <div class="row circle-bottom">                <div class="col-md-6">
                    <label class="form-label dot">شكل الطباعة</label>
                                                                                <select class="form-select gender" required name="gender" aria-label="Default select example">
                                                                  <option selected>الاشكال هنا</option>
                                                                 
                                                              </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label dot">تقنية الطباعة</label>
                                                                                <select class="form-select gender" required name="gender" aria-label="Default select example">
                                                                  <option selected>  التقنية الأولي</option>
                                                                 
                                                              </select>
                </div>
            </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <label class="form-label dot">الملاحظات</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>

                </div>  
            </div>
            <div class="modal-footer footer-clean">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-action requests">
                            <button class="btn-form designer-btn clean-btn" data-bs-toggle="modal" data-bs-target="#designerPublicServiesModal">
                                 تقديم طلب </button>
                            <p>يتطلب تسجيل للتسجيل اضغط هنا </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            
        </div>

    </section>

<!-- zahid page modal end here -->
    
<!-- design footer start here -->
<section class="contact design-footer design-1-footer">
<div class="container">
<div class="row">
   <div class="col-md-12">
       <div class="row">
           <div class="col-md-12">
               <ul class="footer-nav">
                   <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="index.html">الرئيسية</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#about-us">
                           من نحن
                       </a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#services-section">الخدمات</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">مجتمع المصممين</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#contact-us">اتصل بنا</a>
                   </li>
               </ul>
           </div>
       </div>
   </div>
</div>
</div>
<div class="container-fluid">
<footer>
   <div class="row">
       <div class="col-md-4 col-xl-4">
           <div class="right">
               <p>تصميم وتطوير شركة تيلرز</p>
               <a href="https://tellers.sa/"><img src="{{ asset('user/assets/icons/tellers-logo.png') }}"
                       alt="tellers-logo"></a>
           </div>
       </div>
       <div class="col-md-5 col-xl-4">
           <p>جميع الحقوق محفوظة لـ &nbsp;+3D&nbsp; لعام 2022</p>
       </div>
       <div class="col-md-3 col-xl-4">
           <div class="social">
               <a href="#"><img src="{{ asset('user/assets/icons/twitter.png') }}" alt="twitter"></a>
               <a href="#"><img src="{{ asset('user/assets/icons/instagram.png') }}" alt="instagram"></a>
           </div>
       </div>
   </div>
</footer>
</div>
</div>
</footer>
</div>
</section>

   
<!-- design footer end here -->




<!-- disign section end here -->  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
                               <!-- header cleanshot end here ///////////////////////////////////////////////////-->

    






    <!-- ///////////////////////////////////// cleanshot Modal end here ////////////////////////////////-->
<!-- zahid-page2 start -->

<div class="modal fade page form animate__animated animate__fadeInLeft animate__fast" id="designerPublicServiesModal" tabindex="-1" aria-labelledby="designerPublicServiesLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div>
                                <span class="outline dot">أكثر 20 خدمة مختلفة</span>
                                <h1 class="modal-title right"><span class="btm-line"><span class="inner-line"></span>الخدمات العامة
                                    </span></h1>
                            </div>
                            <div class="profile">
                                <button class="btn btn-sky profile-btn invert">
                                    مستخدم
                         </button>
                                @if(@auth()->user()->profile == null)
                                <a href="#profile">
                                    <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                </a>
                                @else
                                <a href="#profile">
                                    <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="modal-body">
                            <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">

                                <div class="carousel-inner">
                                    
                                   <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="submitted-data">
                                            <h6>رقم الطلب</h6>
                                            @auth
                                            <h1>{{@$public->id +1}}</h1>
                                            @else
                                            <h1>406</h1>
                                            @endauth
                                            <p><img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle"> رفع الطلب</p>
                                            <p><img src="{{asset('user/assets/icons/red-circle.png')}}" alt="red-circle">تقديم عرض سعر من قبل المصمم</p>
                                            <p><img src="{{asset('user/assets/icons/red-circle.png')}}" alt="red-circle"> الدفع</p>
                                            <!-- <span>سيتم تحديث حالة الطلب من قبل الإدارة</span> -->
                                        </div>
                                    </div>
                                       <div class="col-md-7">
                                        <img src="{{ asset('user/assets/images/mujtmah-box__image.png') }}" class="mujtmah-box__image">

                                       </div>
                                       <div class="col-md-12">
                                        <div class="form-action designer-btn">
                                            <!-- data-bs-toggle="modal" data-bs-target="#publicServiesFinalModal"  / carousel-next-icon-show-->
                                            <button class="btn btn-form mx-3 with-arrow carousel-next-icon-show" type="submit">تفاصيل الطلب</button>
                                            <button class="btn-form designer-btn clean-btn" data-bs-toggle="modal" data-bs-target="#designer-order">
                                 تقديم طلب </button>
                                            <button class="btn-form designer-btn clean-btn" data-bs-toggle="modal" data-bs-target="#designer-order-upload">
                                 تقديم طلب </button>
                                           <p>تم رفع الطلب بنجاح</p>
                                        </div>
                                    </div>
                                       
                                   </div>
                                </div>
<!-- 
                                <button class="carousel-control-prev " type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next carousel-next-icon-hide" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button> -->
                                <!-- <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- zahid-page2  end-->
<!-- zahid-designer order  start-->
<div class="modal page result" id="designer-order">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-header border-0">
                                <a href="{{route('home')}}" type="button" class="btn-close" aria-label="Close"></a>

                                <div style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>

                                </div>
                                <div class="profile">
                                <button class="btn btn-sky profile-btn invert">
                             المصمم
                            </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
                                <div class="payment d-none" id="payment">
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <img src="{{asset('user/assets/images/mada-logo.svg')}}" alt="">
                                            <p>مدى</p>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </label>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <img src="{{asset('user/assets/images/masterCard.svg')}}" alt="">
                                            <p>فيزا وماستر كارد</p>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            <img src="{{asset('user/assets/images/apple-pay.svg')}}" alt="">
                                            <p>آبل باي</p>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        </label>
                                    </div>
                                </div>
                                <div class="reject-reason d-none" id="reject-reason">
                                    <div class="row mt-1 justify-content-center">
                                        <div class="col-md-8">
                                            <label class="form-label dot">سبب الرفض</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف هنا"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-top">
                                            <span>رقم الطلب :</span>
                                            <span class="id">{{@$public->id}}</span>
                                            <div class="dateTime">{{@$public->created_at}}</div>
                                            <!-- <div class="dateTime small">11/01/2022 - 03:00PM</div> -->
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small">{{@$public->created_at}}</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}</div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="green-circle">
                                                    @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <div class="row">
            <div class="col-md-12 ">
                <div class="profile tag-profile designer-order">
                <a href="#profile">
                    <!-- <img src="{{ asset('user/assets/icon/avatar.svg')}}" alt="avatar"> -->
                <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                <div class="star-profile-txt">
                    <span>مصمم</span>
                    <h4> أسم المصمم</h4>
                    <div class="star-reating rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    </div>
                </div>
               
                </div>
            </div>
            </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="row p-xs-0 p-3 justify-content-between conditional-blur">
                                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                        <label class="form-label dot">اختيار اللون</label>
                        <div class="color-circle-main">
                            
                        
                        <div  class="color-circle blue-border">
                           
                        </div>
                        <div  class="color-circle  gray-bg">
                           
                        </div>
                        <div  class="color-circle  gray-bg">
                           
                        </div>
                        <div  class="color-circle gray-bg">
                           
                        </div>
                         </div>
                       
                            </div>

                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">الكمية</label>
                                                        <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly value="{{@$public->phone_num}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">المقاسات</label>
                                                        <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly value="{{@$public->email}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">شكل الطباعة</label>
                                                        <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly value="{{@$public->specialization}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">تقنية الطباعة</label>
                                                        <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly value="{{@$public->gender}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label"> </label>

                                                    <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                            </button>
                                                </div>
                                                    <!-- <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">صور المجسم</label>
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn btn-upload"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></button>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

<div class="col-md-12">
    <div class="designer-text">
        
    
    <label class="form-label dot">الملاحظات</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
    </div>
</div>  
</div>
                                        <div class="row">

                                            <h1 class="title text-center mt-5 no-border conditional-blur">تقديم عرض سعر</h1>
                                            <div class="col-md-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12">
                                                        <div class="row mb-2 justify-content-between conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                            </div>

                                                        </div>
                                                        <!-- <div class="row conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                                <label class="form-label">رفع ملف المجسم</label>
                                                                <div class="upload-btn-wrapper">
                                                                    <a class="btn btn-upload" href="{{ asset('storage/' . @$public->print_img) }}" download=" {{ @$public->print_img }}"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></a>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <h1 class="title text-center mt-5 no-border conditional-blur">

                                                            <div class="">
                                                                <a href="{{route('payment')}}" class="btn btn-form mx-3 with-arrow mt-10">ارسال</a>
                                                                <a href="{{route('payment')}}" class="btn btn-form mx-3 with-arrow mt-10 red-btn">رفض</a>
                                                                <p class="mt-3">سيتم ارسال تفاصيل تنفيذ المهمة الى المستخدم للقبول او الرفض</p>
                                                            </div>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- zahid-designer order  end-->
<!-- zahid-designer order upload  start-->
<div class="modal page result" id="designer-order-upload">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-header border-0">
                                <a href="{{route('home')}}" type="button" class="btn-close" aria-label="Close"></a>

                                <div style="margin-top: 1%;">
                                    <span class="outline dot">اهلاً وسهلاً بكم</span>
                                    <h1 class="modal-title right"><span class="btm-line d-flex">طلباتي<span class="inner-line"></span></span></h1>

                                </div>
                                <div class="profile">
                                <button class="btn btn-sky profile-btn invert">
                             المصمم
                            </button>
                                    @if(@auth()->user()->profile == null)
                                    <a href="#profile">
                                        <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                    </a>
                                    @else
                                    <a href="#profile">
                                        <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-body designer-bdy">
                                <div class="payment d-none" id="payment">
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <img src="{{asset('user/assets/images/mada-logo.svg')}}" alt="">
                                            <p>مدى</p>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </label>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            <img src="{{asset('user/assets/images/masterCard.svg')}}" alt="">
                                            <p>فيزا وماستر كارد</p>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            <img src="{{asset('user/assets/images/apple-pay.svg')}}" alt="">
                                            <p>آبل باي</p>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        </label>
                                    </div>
                                </div>
                                <div class="reject-reason d-none" id="reject-reason">
                                    <div class="row mt-1 justify-content-center">
                                        <div class="col-md-8">
                                            <label class="form-label dot">سبب الرفض</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف هنا"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-top">
                                            <span>رقم الطلب :</span>
                                            <span class="id">{{@$public->id}}</span>
                                            <div class="dateTime">{{@$public->created_at}}</div>
                                            <!-- <div class="dateTime small">11/01/2022 - 03:00PM</div> -->
                                        </div>
                                        <div class="">
                                            <div class="row final two justify-content-center text-center">
                                                <div class="col-auto">
                                                    <div class="dateTime small">{{@$public->created_at}}</div>
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    <div>
                                                        <p>رفع الطلب</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('user/assets/icons/redline.svg')}}" class="single" alt="">
                                                <div class="col-auto">
                                                    <div class="dateTime small text-white">{{@$public->created_at}}</div>
                                                    @if(@$public->status == 2)
                                                    <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                                    @else
                                                    <img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">
                                                    @endif
                                                    <div>
                                                        <p>الدفع</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="title text-center no-border conditional-blur">معلومات الطلب</h1>
                                        <div class="row">
            <div class="col-md-12 ">
                <div class="profile tag-profile designer-order">
                <a href="#profile">
                    <!-- <img src="{{ asset('user/assets/icon/avatar.svg')}}" alt="avatar"> -->
                <img src="{{ asset('/user/assets/icons/avatar.svg')}}" alt="avatar"> </a>
                <div class="star-profile-txt">
                    <span>مصمم</span>
                    <h4> أسم المصمم</h4>
                    <div class="star-reating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    </div>
                </div>
               
                </div>
            </div>
            </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="row p-xs-0 p-3 justify-content-between conditional-blur">
                                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                        <label class="form-label dot">اختيار اللون</label>
                        <div class="color-circle-main">
                            
                        
                        <div  class="color-circle blue-border">
                           
                        </div>
                        <div  class="color-circle  gray-bg">
                           
                        </div>
                        <div  class="color-circle  gray-bg">
                           
                        </div>
                        <div  class="color-circle gray-bg">
                           
                        </div>
                         </div>
                       
                            </div>

                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">الكمية</label>
                                                        <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" readonly value="{{@$public->phone_num}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">المقاسات</label>
                                                        <input type="text" class="form-control" placeholder=".. الايميل هنا" readonly value="{{@$public->email}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">شكل الطباعة</label>
                                                        <input type="text" class="form-control" placeholder=".. التخصص هنا" readonly value="{{@$public->specialization}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">تقنية الطباعة</label>
                                                        <input type="text" class="form-control" placeholder=".. الجنس هنا" readonly value="{{@$public->gender}}">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                    <label class="form-label"> </label>

                                                    <button class="btn btn-sky invert">
                                                    زيارة المنتج <img src="{{ asset('user/assets/icons/arrow-right.svg') }}" alt="arrow-right">
                            </button>
                                                </div>
                                                    <!-- <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                        <label class="form-label">صور المجسم</label>
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn btn-upload"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></button>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

<div class="col-md-12">
    <div class="designer-text">
        
    
    <label class="form-label dot">الملاحظات</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="   الملاحظات .."></textarea>
    </div>
</div>  
</div>
                                        <div class="row">

                                            <h1 class="title text-center mt-5 no-border conditional-blur">تقديم عرض سعر</h1>
                                            <div class="col-md-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12">
                                                        <div class="row mb-2 justify-content-between conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تكلفة تنفيذ الخدمة</label>
                                                                <input type="text" class="form-control" placeholder="كتابة القيمة هنا .." readonly value="{{@$public->print_type}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ البداية</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .." readonly value="{{@$public->print_color}}">
                                                            </div>
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                                                                <label class="form-label">تاريخ التسليم</label>
                                                                <input type="text" class="form-control" placeholder="تحديد التاريخ هنا .. " readonly value="{{@$public->print_resolution}}">
                                                            </div>
                                                           <div class="col-md-12 pro-bar ">
                                                            <progress id="file" value="32" max="100"> 32% </progress>

                                                               
                                                           </div>
                                                        </div>
                                                      

                                                      
                                                        <!-- <div class="row conditional-blur">
                                                            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                                <label class="form-label">رفع ملف المجسم</label>
                                                                <div class="upload-btn-wrapper">
                                                                    <a class="btn btn-upload" href="{{ asset('storage/' . @$public->print_img) }}" download=" {{ @$public->print_img }}"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></a>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                            <label class="form-label dot">عموم الحاله الصحية</label>
                                                            </div>
                                                      
                                                            <div class="col-md-6">
                                                           
                                                   <textarea class="form-control designer-text-area" id="exampleFormControlTextarea1" rows="4" placeholder="  ..الوصف هنا" readonly>{{@$ss->discription}}</textarea>
                                              
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="upload-btn-wrapper designer-upload">
                                                                <button class="btn btn-upload-designer health"><img src="{{asset('user/assets/icons/upload-img.svg')}}" alt="upload-img"></button>
                                                                <input type="file" id="health-file" required name="myfile" />
                                                            </div>

                                                            </div>
                                                            <p class="mt-3" style="    text-align: center;
">متبقي على تسليم الطلب 24 يوم 35 دقيقة 13 ثانية</p>
                                                        </div>
                                                        <h1 class="title text-center mt-5 no-border conditional-blur">

                                                            <div class="">
                                                                <a href="{{route('payment')}}" class="btn btn-form mx-3 with-arrow mt-10">ارسال</a>
                                                                <a href="{{route('payment')}}" class="btn btn-form mx-3 with-arrow btn-uplod mt-10">الفاتورة</a>
                                                                <a href="{{route('payment')}}" class="btn btn-form mx-3 with-arrow mt-10 red-btn">رفض</a>
                                                               
                                                                <p class="mt-3">الرجاء التأكد من ارسال كافة الملفات لتجنب تقديم بلاغ عليك</p>
                                                            </div>
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- zahid-designer order  upload end-->


    <!-- ///////////////////////////////////// design modal start here ////////////////////////////////-->

   
    <div class="modal fade page" id="designModal" tabindex="-1" aria-labelledby="designLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                          
                            <div class="modal-body">
                             


  <!-- header designer start here -->
  <div class="toggle-overlay"></div>
    <div class="content-wrapper hide-on-load">
        <nav class="navbar navbar-expand-lg navbar-light desktop-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">
                                من نحن
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">ماهي
                                تقنية الـ 3D</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services-section" class="nav-link">الخدمات</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">مجتمع المصممين</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                        </li>
                        <li class="mobile-menu">
                            <div class="left-side">
                                <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal"><img src="{{ asset('user/assets/icons/avatar.svg') }}" class="profile-img" alt="avatar"></a>
                                @auth
                                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}!</a>
                                @endauth
                                <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>
                                <span>
                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                </span>
                            </div>
                        </li>

                    </ul>
                </div>
                @auth
                <div class="left-side desktop-menu">

                    <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                        {{-- @if (auth()->user()->profile != null)
                                @if (@auth()->user()->profile == null)
                                    <div class="profile-img">
                                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                </div>
                @else
                <div class="profile-img">
                    <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">

                </div>
                @endif
                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>
                --}}
                <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                    {{-- @if (auth()->user()->profile != null) --}}
                    @if (@auth()->user()->profile == null)
                    <div class="profile profile-icon">
                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                    </div>
                    @else
                    <img class="" style="width:30px;height:30px;" alt="" src="{{ asset(Auth::user()->profile) }}">
                    @endif
                   
                    <a href="#membership" class="dot ms-auto border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>
                 
                    <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>


                    <a href="{{route('logout')}}" onclick="return logout(event);" class="ms-auto dot border-bottom" class="dot m-0 border-bottom">
                        تسجيل خروج
                    </a>
                    <script type="text/javascript">
                        function logout(event) {
                            event.preventDefault();
                            var check = confirm("هل تريد حقا الخروج؟");
                            if (check) {
                                document.getElementById('logout-form').submit();
                            }
                        }
                    </script>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button hidden type="submit" class=" sub-slide-item" style=" color:red; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Log
                            Out</button>

                    </form>
                    <span>

                        <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                        <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                    </span>
            </div>
            @else
            <div class="left-side">
                <a href="#login" data-bs-toggle="modal" class="register-icon" data-bs-target="#loginModal">تسجيل دخول</a>
                <a href="#register" class="ms-auto register-icon" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>
                <span>
                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                </span>
            </div>
            @endauth
    </div>
    </nav>

    <div id="wrapper" class="mobile-nav">
        <div id="sidebar-wrapper">
            <div class="area-brand">
                <a class="" href="#">
                    <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="mmnue">
                <ul class="sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ماهي
                            تقنية الـ 3D</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services-section" class="nav-link">الخدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">مجتمع المصممين</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                    </li>
                   @if(Auth::user()) 
                    <li class="nav-item pt-0"> <a href="#requests" class="nav-link ms-auto dot " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a></li>
                    <li class="nav-item pt-0">
                        <a class="nav-link dot" href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>تسجيل الخروج</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">

                        <a href="#login" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#loginModal">تسجيل دخول</a>
                    </li>
                    <li class="nav-item">
                        <a href="#register" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                    </li>
                    @endif
                    <li class="">
                        <div class="mobile-social-icon">

                            <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                            <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-3 mobile-logo">

                        <div class="area-brand">
                            <a class="" href="#">
                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9 mobile-pro-icon">
                        <button class="btn mob-tog-btn" id="menu-toggle"><i class="fa-solid fa-bars"></i></button>

                        <div class="mobile-profile">
                            
                   
                            <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal" ><img src="{{(@Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset(Auth::user()->profile) }}" class="profile-img" alt="avatar"></a>
                            @if(Auth::user())
                            <a href="#" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ Auth::user()->name }}!</a>
                            @endif
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu start here -->

    
                               <!-- header designer end here -->



  <section class="designer-sec" id="">
   
   <!-- <img src="./user/assets/images/design.png" class="design-bg" class="img-fluid" alt=""> -->

<div class="container">
<div class="row">
   <div class="col-md-12">

       <div class="design-txt">
           <h1 class="designer-title">
               مجتمع المصممين
           </h1>
           <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
               حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
               التطبيق.</p>
       </div>

   </div>
   <div class="col-md-12">
       <div class="designer-search-form">

       </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
       <div class="search-form">
           <form action="#" method="">
               <div class="row">
                   <div class="col-md-3 col-lg-2">
                       <div class="sort-btn">
                           <button class="btn"> الترتيب حسب <i class="fa-solid fa-arrow-down"></i></button>
                       </div>
                   </div>
                   <div class="col-md-3 col-lg-2">

                       <div class="sort-btn">
                           <button class="btn"> تقنية الطباعة <i class="fa-solid fa-arrow-down"></i></button>

                       </div>
                   </div>
                   <div class="col-md-6 col-lg-7 ps-0">

                       <div class="search-input">
                           <input type="text" class="form-control" id="search" placeholder="البحث">
                           <i class="fa-solid fa-magnifying-glass"></i>
                       </div>
                   </div>

               </div>
           </form>

       </div>

       <div class="btn-list">
           <button class="btn btn-white ">الكل</button>
           <button class="btn btn-trans">نوع البرنامج</button>
           <button class="btn btn-trans">نوع البرنامج</button>
           <button class="btn btn-trans">نوع البرنامج</button>
           <button class="btn btn-trans">نوع البرنامج</button>
           <button class="btn btn-trans">نوع البرنامج</button>
       </div>
   </div>
</div>

<div class="design-card-main">
   <div class="row">
       <div class="col-md-6 col-lg-4">
           <div class="design-card-inner">
           <div class="row">
               <div class="col-md-6">
                   <div class="star-profile">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#">
                           <div class="star-profile-icon">
                               <img src="./assets/images/dashboard/1.png" alt="">
                           </div>
                       </a>
                       <div class="star-profile-txt">
                           <span>مصمم</span>
                           <h3>أسم المصمم</h3>
                       </div>

                   </div>

               </div>
               <div class="col-md-6 m-auto">
                   <div class="star-reating">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   </div>
               </div>
           </div>
           <div class="design-card-body">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
       <div class="col-md-6 col-lg-4">
           <div class="design-card-inner">
           <div class="row">
               <div class="col-md-6">
                   <div class="star-profile">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#">
                           <div class="star-profile-icon">
                               <img src="./assets/images/dashboard/1.png" alt="">
                           </div>
                       </a>
                       <div class="star-profile-txt">
                           <span>مصمم</span>
                           <h3>أسم المصمم</h3>
                       </div>

                   </div>

               </div>
               <div class="col-md-6 m-auto">
                   <div class="star-reating">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   </div>
               </div>
           </div>
           <div class="design-card-body design-2">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
       <div class="col-md-6 col-lg-4">
           <div class="design-card-inner">
           <div class="row">
               <div class="col-md-6">
                   <div class="star-profile">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#">
                           <div class="star-profile-icon">
                               <img src="./assets/images/dashboard/1.png" alt="">
                           </div>
                       </a>
                       <div class="star-profile-txt">
                           <span>مصمم</span>
                           <h3>أسم المصمم</h3>
                       </div>

                   </div>

               </div>
               <div class="col-md-6 m-auto">
                   <div class="star-reating">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   </div>
               </div>
           </div>
           <div class="design-card-body design-3">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
  
   
       <div class="col-md-6 col-lg-4">
           <div class="design-card-inner">
           <div class="row">
               <div class="col-md-6">
                   <div class="star-profile">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#">
                           <div class="star-profile-icon">
                               <img src="./assets/images/dashboard/1.png" alt="">
                           </div>
                       </a>
                       <div class="star-profile-txt">
                           <span>مصمم</span>
                           <h3>أسم المصمم</h3>
                       </div>

                   </div>

               </div>
               <div class="col-md-6 m-auto">
                   <div class="star-reating">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   </div>
               </div>
           </div>
           <div class="design-card-body design-4">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
       <div class="col-md-6 col-lg-4">
           <div class="design-card-inner">
           <div class="row">
               <div class="col-md-6">
                   <div class="star-profile">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#">
                           <div class="star-profile-icon">
                               <img src="./assets/images/dashboard/1.png" alt="">
                           </div>
                       </a>
                       <div class="star-profile-txt">
                           <span>مصمم</span>
                           <h3>أسم المصمم</h3>
                       </div>

                   </div>

               </div>
               <div class="col-md-6 m-auto">
                   <div class="star-reating">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   </div>
               </div>
           </div>
           <div class="design-card-body design-5">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
       <div class="col-md-6 col-lg-4">
           <div class="design-card-inner">
           <div class="row">
               <div class="col-md-6">
                   <div class="star-profile">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#">
                           <div class="star-profile-icon">
                               <img src="./assets/images/dashboard/1.png" alt="">
                           </div>
                       </a>
                       <div class="star-profile-txt">
                           <span>مصمم</span>
                           <h3>أسم المصمم</h3>
                       </div>

                   </div>

               </div>
               <div class="col-md-6 m-auto">
                   <div class="star-reating">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   </div>
               </div>
           </div>
           <div class="design-card-body design-6">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>

       <div class="col-md-6 col-lg-4">
           <div class="design-card-inner">
           <div class="row">
               <div class="col-md-6">
                   <div class="star-profile">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#">
                           <div class="star-profile-icon">
                               <img src="./assets/images/dashboard/1.png" alt="">
                           </div>
                       </a>
                       <div class="star-profile-txt">
                           <span>مصمم</span>
                           <h3>أسم المصمم</h3>
                       </div>

                   </div>

               </div>
               <div class="col-md-6 m-auto">
                   <div class="star-reating">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   </div>
               </div>
           </div>
           <div class="design-card-body design-7">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
       <div class="col-md-6 col-lg-4">
           <div class="design-card-inner">
           <div class="row">
               <div class="col-md-6">
                   <div class="star-profile">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#">
                           <div class="star-profile-icon">
                               <img src="./assets/images/dashboard/1.png" alt="">
                           </div>
                       </a>
                       <div class="star-profile-txt">
                           <span>مصمم</span>
                           <h3>أسم المصمم</h3>
                       </div>

                   </div>

               </div>
               <div class="col-md-6 m-auto">
                   <div class="star-reating">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   </div>
               </div>
           </div>
           <a href="javascript:void(0);" class="" data-bs-toggle="modal" data-bs-target="#cleanshotModal">

                <div class="design-card-body design-8">

                    <div class="design-card-left-top">
                        <p>تقنية الطباعة</p>
                    </div>
                    <div class="design-card-left-bottom">
                        <div class="card-icons">
                            <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                        </div>
                    </div>
                </div>
                    </a>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
       <div class="col-md-6 col-lg-4">
           <div class="design-card-inner">
           <div class="row">
               <div class="col-md-6">
                   <div class="star-profile">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#">
                           <div class="star-profile-icon">
                               <img src="./assets/images/dashboard/1.png" alt="">
                           </div>
                       </a>
                       <div class="star-profile-txt">
                           <span>مصمم</span>
                           <h3>أسم المصمم</h3>
                       </div>

                   </div>

               </div>
               <div class="col-md-6 m-auto">
                   <div class="star-reating">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   </div>
               </div>
           </div>
           <div class="design-card-body design-9">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
    </div>
</div>

<!-- <div class="design-bottom-btn">
<button class="btn">المزيد</button>
</div> -->
<div class="design-bottom-btn">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#designinnerModal">
    المزيد  
    </button>
</div>

</section>

<!-- design footer start here -->
<section class="contact design-footer">
<div class="container">
<div class="row">
   <div class="col-md-12">
       <div class="row">
           <div class="col-md-12">
               <ul class="footer-nav">
                   <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="index.html">الرئيسية</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#about-us">
                           من نحن
                       </a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#services-section">الخدمات</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">مجتمع المصممين</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#contact-us">اتصل بنا</a>
                   </li>
               </ul>
           </div>
       </div>
   </div>
</div>
</div>
<div class="container-fluid">
<footer>
   <div class="row">
       <div class="col-md-4 col-xl-4">
           <div class="right">
               <p>تصميم وتطوير شركة تيلرز</p>
               <a href="https://tellers.sa/"><img src="{{ asset('user/assets/icons/tellers-logo.svg') }}"
                       alt="tellers-logo"></a>
           </div>
       </div>
       <div class="col-md-5 col-xl-4">
           <p>جميع الحقوق محفوظة لـ &nbsp;+3D&nbsp; لعام 2022</p>
       </div>
       <div class="col-md-3 col-xl-4">
           <div class="social">
               <a href="#"><img src="{{ asset('user/assets/icons/twitter-white.svg') }}" alt="twitter"></a>
               <a href="#"><img src="{{ asset('user/assets/icons/instagram-white.svg') }}" alt="instagram"></a>
           </div>
       </div>
   </div>
</footer>
</div>
</div>
</footer>
</div>
</section>
   
<!-- design footer end here -->


<!-- disign section end here -->  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ///////////////////////////////////// design modal end here ////////////////////////////////-->



<!-- ///////////////////////////////////////////////////////// design-view-inner designinnerModal start here /////////////////////////////////////////////// -->

   
<div class="modal fade page" id="designinnerModal" tabindex="-1" aria-labelledby="designinnerLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                          
                            <div class="modal-body">
                             


  <!-- header designer start here -->
  <div class="toggle-overlay"></div>
    <div class="content-wrapper hide-on-load">
        <nav class="navbar navbar-expand-lg navbar-light desktop-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">
                                من نحن
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">ماهي
                                تقنية الـ 3D</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services-section" class="nav-link">الخدمات</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">مجتمع المصممين</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                        </li>
                        <li class="mobile-menu">
                            <div class="left-side">
                                <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal"><img src="{{ asset('user/assets/icons/avatar.svg') }}" class="profile-img" alt="avatar"></a>
                                @auth
                                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}!</a>
                                @endauth
                                <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>
                                <span>
                                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                                </span>
                            </div>
                        </li>

                    </ul>
                </div>
                @auth
                <div class="left-side desktop-menu">

                    <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                        {{-- @if (auth()->user()->profile != null)
                                @if (@auth()->user()->profile == null)
                                    <div class="profile-img">
                                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                </div>
                @else
                <div class="profile-img">
                    <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px; border-radius: 50%">

                </div>
                @endif
                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>
                --}}
                <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                    {{-- @if (auth()->user()->profile != null) --}}
                    @if (@auth()->user()->profile == null)
                    <div class="profile profile-icon">
                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                    </div>
                    @else
                    <img class="" style="width:30px;height:30px;" alt="" src="{{ asset(Auth::user()->profile) }}">
                    @endif
                   
                    <a href="#membership" class="dot ms-auto border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>
                 
                    <a href="#requests" class="ms-auto dot border-bottom " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a>


                    <a href="{{route('logout')}}" onclick="return logout(event);" class="ms-auto dot border-bottom" class="dot m-0 border-bottom">
                        تسجيل خروج
                    </a>
                    <script type="text/javascript">
                        function logout(event) {
                            event.preventDefault();
                            var check = confirm("هل تريد حقا الخروج؟");
                            if (check) {
                                document.getElementById('logout-form').submit();
                            }
                        }
                    </script>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button hidden type="submit" class=" sub-slide-item" style=" color:red; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Log
                            Out</button>

                    </form>
                    <span>

                        <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                        <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                    </span>
            </div>
            @else
            <div class="left-side">
                <a href="#login" data-bs-toggle="modal" class="register-icon" data-bs-target="#loginModal">تسجيل دخول</a>
                <a href="#register" class="ms-auto register-icon" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>
                <span>
                    <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                    <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>
                </span>
            </div>
            @endauth
    </div>
    </nav>

    <div id="wrapper" class="mobile-nav">
        <div id="sidebar-wrapper">
            <div class="area-brand">
                <a class="" href="#">
                    <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="mmnue">
                <ul class="sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">
                            من نحن
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">ماهي
                            تقنية الـ 3D</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services-section" class="nav-link">الخدمات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">مجتمع المصممين</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link close-modal" href="#contact-us">اتصل بنا</a>
                    </li>
                   @if(Auth::user()) 
                    <li class="nav-item pt-0"> <a href="#requests" class="nav-link ms-auto dot " data-bs-toggle="modal" data-bs-target="#requestsModal">طلباتي</a></li>
                    <li class="nav-item pt-0">
                        <a class="nav-link dot" href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>تسجيل الخروج</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">

                        <a href="#login" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#loginModal">تسجيل دخول</a>
                    </li>
                    <li class="nav-item">
                        <a href="#register" class="nav-link dot" data-bs-toggle="modal" data-bs-target="#registerModal">التسجيل</a>

                    </li>
                    @endif
                    <li class="">
                        <div class="mobile-social-icon">

                            <a href="#"><img src="{{ asset('user/assets/icons/twitter.svg') }}" alt="twitter"></a>
                            <a href="#"><img src="{{ asset('user/assets/icons/instagram.svg') }}" alt="instagram"></a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-3 mobile-logo">

                        <div class="area-brand">
                            <a class="" href="#">
                                <img src="{{ asset('user/assets/icons/logo.svg') }}" alt="3dOrgans-logo" width="150" class="d-inline-block align-text-top">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-9 mobile-pro-icon">
                        <button class="btn mob-tog-btn" id="menu-toggle"><i class="fa-solid fa-bars"></i></button>

                        <div class="mobile-profile">
                            
                   
                            <a href="#" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal" ><img src="{{(@Auth::user()->profile == null) ?  asset('user/assets/icons/avatar.svg'): asset(Auth::user()->profile) }}" class="profile-img" alt="avatar"></a>
                            @if(Auth::user())
                            <a href="#" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ Auth::user()->name }}!</a>
                            @endif
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu start here -->

    
                               <!-- header designer end here -->


                               <div class="modal-header border-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>


<section class="designer-sec designer-sec-1" id="">

<div class="container">
<div class="row">
   <div class="col-md-12">

    <div class="designer-profile">
                <img id="blah" src="http://127.0.0.1:8000/user/assets/icons/edit-avatar.svg" class="mx-auto d-block imageupload"
                    width="100" alt="avatar" style="clip-path: circle() !important;">
                <input id="imgInp" type="file" class="chose" name="profile" accept="image/*" style="display: none;">
                <button class="btn btn-blue">مصمم</button>
                    <div class="star-reating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="design-txt">
                        <h1 class="designer-title">
                        أسم المصمم
                        </h1>
                    </div>
    </div>
      

   </div>
   <div class="col-md-12">
       <div class="designer-search-form">

       </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
       <div class="search-form">
           <form action="#" method="">
               <div class="row">
                   <div class="col-md-2">
                       <div class="sort-btn">
                           <button class="btn"> الترتيب حسب <i class="fa-solid fa-arrow-down"></i></button>
                       </div>
                   </div>
                   <div class="col-md-2">

                       <div class="sort-btn">
                           <button class="btn"> تقنية الطباعة <i class="fa-solid fa-arrow-down"></i></button>

                       </div>
                   </div>
                   <div class="col-md-6">

                       <div class="search-input">
                           <input type="text" class="form-control" id="search" placeholder="البحث">
                           <i class="fa-solid fa-magnifying-glass"></i>
                       </div>
                   </div>

               </div>
           </form>

       </div>

       <div class="btn-list">
           <button class="btn btn-blue">الكل</button>
           <button class="btn btn-trans">نوع البرنامج</button>
           <button class="btn btn-trans">نوع البرنامج</button>
           <button class="btn btn-trans">نوع البرنامج</button>
           <button class="btn btn-trans">نوع البرنامج</button>
           <button class="btn btn-trans">نوع البرنامج</button>
       </div>
   </div>
</div>

<div class="design-card-main">
   
   <div class="row padd-30">
       <div class="col-md-4">
           <div class="design-card-inner">
            
           <a href="javascript:void(0);" type="button" class="" data-bs-toggle="modal" data-bs-target="#productdesignModal">  
                <div class="design-card-body product-1">
                    <div class="design-card-left-top">
                        <p>تقنية الطباعة</p>
                    </div>
                    <div class="design-card-left-bottom">
                        <div class="card-icons">
                            <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                        </div>
                    </div>
                </div>
            </a>

           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
       <div class="col-md-4">
           <div class="design-card-inner">
        
           <div class="design-card-body product-2">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
       <div class="col-md-4">
           <div class="design-card-inner">
          
           <div class="design-card-body product-3">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
   </div>

   <div class="row padd-30">
       <div class="col-md-4">
           <div class="design-card-inner">
           
           <div class="design-card-body product-4">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
       <div class="col-md-4">
           <div class="design-card-inner">
         
           <a href="javascript:void(0);" type="button" class="" data-bs-toggle="modal" data-bs-target="#productdesignModal">

                <div class="design-card-body product-5">

                    <div class="design-card-left-top">
                        <p>تقنية الطباعة</p>
                    </div>
                    <div class="design-card-left-bottom">
                        <div class="card-icons">
                            <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                        </div>
                    </div>
                </div>
                    </a>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
       <div class="col-md-4">
           <div class="design-card-inner">
         
           <div class="design-card-body product-1">
               <div class="design-card-left-top">
                   <p>تقنية الطباعة</p>
               </div>
               <div class="design-card-left-bottom">
                   <div class="card-icons">
                       <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                       <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                   </div>
               </div>
           </div>
           <div class="design-card-footer">
               <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
           </div>
           </div>
         
       </div>
   </div>

</div>


</section> 

<section class="contact design-footer design-1-footer">
<div class="container">
<div class="row">
   <div class="col-md-12">
       <div class="row">
           <div class="col-md-12">
               <ul class="footer-nav">
                   <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="index.html">الرئيسية</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#about-us">
                           من نحن
                       </a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#services-section">الخدمات</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">مجتمع المصممين</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#contact-us">اتصل بنا</a>
                   </li>
               </ul>
           </div>
       </div>
   </div>
</div>
</div>
<div class="container-fluid">
<footer>
   <div class="row">
       <div class="col-md-4 col-xl-4">
           <div class="right">
               <p>تصميم وتطوير شركة تيلرز</p>
               <a href="https://tellers.sa/"><img src="{{ asset('user/assets/icons/tellers-logo.png') }}"
                       alt="tellers-logo"></a>
           </div>
       </div>
       <div class="col-md-5 col-xl-4">
           <p>جميع الحقوق محفوظة لـ &nbsp;+3D&nbsp; لعام 2022</p>
       </div>
       <div class="col-md-3 col-xl-4">
           <div class="social">
               <a href="#"><img src="{{ asset('user/assets/icons/twitter.png') }}" alt="twitter"></a>
               <a href="#"><img src="{{ asset('user/assets/icons/instagram.png') }}" alt="instagram"></a>
           </div>
       </div>
   </div>
</footer>
</div>
</div>
</footer>
</div>
</section>

<!-- design footer end here -->


<!-- disign section end here -->  
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- ///////////////////////////////////////////////////////// design-view designinnerModal end here /////////////////////////////////////////////// -->

<!-- ///////////////////////////////////////////////////////// product design productdesignModal end here /////////////////////////////////////////////// -->

<div class="modal fade page" id="productdesignModal" tabindex="-1" aria-labelledby="productdesignLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                          
                            <div class="modal-body">
                            <div class="container">
                                <div class="modal-header border-0">

                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div>
                                        <span class="outline dot">اهلاً وسهلاً بكم</span>
                                        <h1 class="modal-title right"><span class="btm-line d-flex">المنتجات<span class="inner-line"></span></span></h1>
                                    </div>
                                
                                    <div class="add-btn">
                                        <button type="button" class="btn-add"  data-bs-toggle="modal" data-bs-target="#productaddModal">
                                        <i class="fa-solid fa-plus"></i>
                                        </button>
                                     
                                        <span>
                                            المصمم  
                                        </span>
                                    </div>
                                </div>
                                </div>

                    <!-- product design body  start here-->

                    <section class="designer-sec designer-sec-1 pt-0" id="">

<div class="container">
<div class="row">
   <div class="col-md-12">
                    <div class="design-card-main">
                    
                    <div class="row padd-30">
                       
                        <div class="col-md-4">
                            <div class="design-card-inner">

                                <div class="design-card-body product-1">
                                    <div class="design-card-right-top">
                                        <p class="txt-green">مفعل</p>
                                    </div>
                                    <div class="design-card-left-top">
                                        <p>تقنية الطباعة</p>
                                    </div>
                                    <div class="design-card-left-bottom">
                                        <div class="card-icons">
                                            <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                                            <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                                            <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                                        </div>
                                    </div>
                                </div>
                            <div class="design-card-footer">
                                <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
                            </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="design-card-inner">
                            
                            <div class="design-card-body product-2">
                                <div class="design-card-right-top">
                                    <p class="txt-green">مفعل</p>
                                </div>
                                <div class="design-card-left-top">
                                    <p>تقنية الطباعة</p>
                                </div>
                                <div class="design-card-left-bottom">
                                    <div class="card-icons">
                                        <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="design-card-footer">
                                <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
                            </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="design-card-inner">
                            
                            <div class="design-card-body product-3">
                                <div class="design-card-right-top">
                                    <p class="txt-green">مفعل</p>
                                </div>
                                <div class="design-card-left-top">
                                    <p>تقنية الطباعة</p>
                                </div>
                                <div class="design-card-left-bottom">
                                    <div class="card-icons">
                                        <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="design-card-footer">
                                <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
                            </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row padd-30">
                    <div class="col-md-4">
                            <div class="design-card-inner">
                            
                            <div class="design-card-body product-4">
                            <div class="design-card-right-top">
                                    <p class="txt-red">مفعل</p>
                                </div>
                                <div class="design-card-left-top">
                                    <p>تقنية الطباعة</p>
                                </div>
                                <div class="design-card-left-bottom">
                                    <div class="card-icons">
                                        <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="design-card-footer">
                                <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
                            </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="design-card-inner">
                            
                            <div class="design-card-body product-5">
                            <div class="design-card-right-top">
                                    <p class="txt-green">مفعل</p>
                                </div>
                                <div class="design-card-left-top">
                                    <p>تقنية الطباعة</p>
                                </div>
                                <div class="design-card-left-bottom">
                                    <div class="card-icons">
                                        <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="design-card-footer">
                                <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
                            </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="design-card-inner">
                            
                            <div class="design-card-body product-1">
                            <div class="design-card-right-top">
                                    <p class="txt-red">مفعل</p>
                                </div>
                                <div class="design-card-left-top">
                                    <p>تقنية الطباعة</p>
                                </div>
                                <div class="design-card-left-bottom">
                                    <div class="card-icons">
                                        <img src="{{ asset('user/assets/images/ai.png') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('user/assets/images/dn.png') }}" class="img-fluid" alt="">
                                        <img src="{{ asset('user/assets/images/in.png') }}" class="img-fluid" alt="">

                                    </div>
                                </div>
                            </div>
                            <div class="design-card-footer">
                                <h4>عنوان التصميم يكتب هنا ويستوعب سطرين كحد اقصى ..</h4>
                            </div>
                            </div>
                            
                        </div>
                    </div>

                    </div>
                    </div>
                    </div>
                    </div>
                    </section> 
    <!-- product design body  end here-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ///////////////////////////////////////////////////////// product design productdesignModal end here /////////////////////////////////////////////// -->


<!-- ///////////////////////////////////////////////////////// product design productaddModal start here /////////////////////////////////////////////// -->
    <div class="wrapper al-center">
        <div class="modal fade page register" id="productaddModal" tabindex="-1" aria-labelledby="productaddLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="modal-body">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div>
                                                <span class="outline dot">اهلاً وسهلاً بكم</span>
                                                <h1 class="modal-title right">المنتجات </h1>
                                            </div>
                                            <button class="ahs-profile-plus-btn ">
                                                <i class="fa fa-plus-circle fa-lg ahs-profile-plus"></i>
                                                إضافة منتج
                                            </button>
                                        </div>
                                        <form action="" class="almuntjat-form">
                                            <div class="almuntjat-form__input-wrapper">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot"></div>
                                                    <p class="sub-heading-box__heading b2 sub-heading-box__heading--b">إختيار نوع الخدمة</p>
                                                </div>
                                                <!-- <label for="almuntjat-form__img" class="almuntjat-form__img-label">
                                                    <p class="almuntjat-form__img-label-text">إضافة</p>
                                                </label> -->
                                                <div class="col-md-2">
                                                    <div class="product-add-upload">
                                                        <p class="">إضافة</p>
                                                        <span class="camera-icon"><i class="fa fa-camera"></i></span>
                                                    </div>
                                                </div>

                                                <!-- <input type="file" name="almuntjat-form__img" id="almuntjat-form__img" class="almuntjat-form__img-input"> -->
                                            </div>
                                            <!-- img input end -->
                                            <div class="almuntjat-form__input-wrapper">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">العنوان</p>
                                                </div>
                                                <input type="text" class="almuntjat-form__input" placeholder="الاسم هنا ..">
                                            </div>
                                            <!-- alunwan end -->
                                            <div class="almuntjat-form__input-wrapper">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">الوصف</p>
                                                </div>
                                                <label for="almuntjat-form__wasaf" class="almuntjat-form__wasaf-label"></label>
                                                <textarea placeholder="الوصف هنا .." name="almuntjat-form__wasaf" id="almuntjat-form__wasaf" class="almuntjat-form__wasaf-input">
                                                </textarea>
                                            </div>
                                            <div class="form-inner-wrapper wrapper jst-btw">
                                                <div class="almuntjat-form__box ">
                                                    <div class="sub-heading-box">
                                                        <div class="red-dot"></div>
                                                        <p class="sub-heading-box__heading sub-heading-box__heading--b">تقنية الطباعة</p>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input type="text" placeholder="كلمة المرور هنا .." class="almuntjat-form__input">
                                                        <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                                    </div>
                                                </div>
                                                <div class="almuntjat-form__box">
                                                    <div class="sub-heading-box">
                                                        <div class="red-dot"></div>
                                                        <p class="sub-heading-box__heading sub-heading-box__heading--b">البرامج المستخدم</p>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input type="text" placeholder="اختيار التقنية" class="almuntjat-form__input">
                                                        <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                                    </div>
                                                </div>
                                                <div class="almuntjat-form__box">
                                                    <div class="sub-heading-box">
                                                        <div class="red-dot"></div>
                                                        <p class="sub-heading-box__heading sub-heading-box__heading--b">الألوان</p>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input type="text" placeholder="اختاير البرامج المستخدمة" class="almuntjat-form__input">
                                                        <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                                    </div>
                                                </div>
                                                <div class="almuntjat-form__box">
                                                    <div class="sub-heading-box">
                                                        <div class="red-dot"></div>
                                                        <p class="sub-heading-box__heading sub-heading-box__heading--b">المقاسات</p>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input type="text" placeholder="اختاير البرامج المستخدمة" class="almuntjat-form__input">
                                                        <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="almuntjat-form-error">
                                            <i class="fa-solid fa-triangle-exclamation"></i> بعد إضافة المنتج سيذهب الى الإدارة للمراجعة للقبول أو الرفض
                                            </div>
                                            <button type="button" class="almuntjat-form__btn m-btn" data-bs-toggle="modal" data-bs-target="#productaddformModal">
                                                إضافة
                                            </button>
                                            <p class="almuntjat-form__text">
                                                إضافة منتج جديد
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<!-- ///////////////////////////////////////////////////////// product design productaddModal end here /////////////////////////////////////////////// -->


<!-- ///////////////////////////////////////////////////////// product design productaddformModal start here /////////////////////////////////////////////// -->
<div class="wrapper al-center">
        <div class="modal fade page register" id="productaddformModal" tabindex="-1" aria-labelledby="productaddformLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="modal-body">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div>
                                                <span class="outline dot">اهلاً وسهلاً بكم</span>
                                                <h1 class="modal-title right">المنتجات </h1>
                                            </div>
                                            <button class="ahs-profile-plus-btn productadd-top-btn">
                                            إضافة منتج
                                            </button>
                                           
                                        </div>
                                        <div class="almuntjat-form-error error-red-bg">
                                            <i class="fa-solid fa-triangle-exclamation"></i> بعد إضافة المنتج سيذهب الى الإدارة للمراجعة للقبول أو الرفض
                                        </div>
                                        <form action="" class="almuntjat-form">
                                            <div class="almuntjat-form__input-wrapper">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot"></div>
                                                    <p class="sub-heading-box__heading b2 sub-heading-box__heading--b">إختيار نوع الخدمة</p>
                                                </div>
                                                <!-- <label for="almuntjat-form__img" class="almuntjat-form__img-label">
                                                    <p class="almuntjat-form__img-label-text">إضافة</p>
                                                </label> -->
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="product-add-upload uplod-img-active">
                                                        <img src="{{ asset('user/assets/images/design-8.png') }}" class="img-fluid" alt="">
                                                            <p class="">إضافة</p>
                                                            <span class="camera-icon upload-cross-red"><i class="fa-solid fa-xmark"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="product-add-upload">
                                                        <img src="{{ asset('user/assets/images/cleancard.png') }}" class="img-fluid" alt="">
                                                            <p class="">إضافة</p>
                                                            <span class="camera-icon upload-cross-red"><i class="fa-solid fa-xmark"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="product-add-upload">
                                                        <img src="{{ asset('user/assets/images/cleancard2.png') }}" class="img-fluid" alt="">
                                                            <p class="">إضافة</p>
                                                            <span class="camera-icon upload-cross-red"><i class="fa-solid fa-xmark"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="product-add-upload">
                                                        <img src="{{ asset('user/assets/images/cleancard2.png') }}" class="img-fluid" alt="">
                                                            <p class="">إضافة</p>
                                                            <span class="camera-icon upload-cross-red"><i class="fa-solid fa-xmark"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="product-add-upload">
                                                            <!-- <img src="{{ asset('user/assets/images/cleancard3.png') }}" class="img-fluid" alt=""> -->
                                                            <p class="">إضافة</p>
                                                            <span class="camera-icon"><i class="fa fa-camera"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                 
                                                <!-- <input type="file" name="almuntjat-form__img" id="almuntjat-form__img" class="almuntjat-form__img-input"> -->

                                            </div>
                                            <!-- img input end -->
                                            <div class="almuntjat-form__input-wrapper">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">العنوان</p>
                                                </div>
                                                <input type="text" class="almuntjat-form__input" placeholder="الاسم هنا ..">
                                            </div>
                                            <!-- alunwan end -->
                                            <div class="almuntjat-form__input-wrapper">
                                                <div class="sub-heading-box">
                                                    <div class="red-dot"></div>
                                                    <p class="sub-heading-box__heading sub-heading-box__heading--b">الوصف</p>
                                                </div>
                                                <label for="almuntjat-form__wasaf" class="almuntjat-form__wasaf-label"></label>
                                                <textarea placeholder="الوصف هنا .." name="almuntjat-form__wasaf" id="almuntjat-form__wasaf" class="almuntjat-form__wasaf-input">
                                                </textarea>
                                            </div>
                                            <div class="form-inner-wrapper wrapper jst-btw">
                                                <div class="almuntjat-form__box ">
                                                    <div class="sub-heading-box">
                                                        <div class="red-dot"></div>
                                                        <p class="sub-heading-box__heading sub-heading-box__heading--b">تقنية الطباعة</p>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input type="text" placeholder="كلمة المرور هنا .." class="almuntjat-form__input">
                                                        <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                                    </div>
                                                </div>
                                                <div class="almuntjat-form__box">
                                                    <div class="sub-heading-box">
                                                        <div class="red-dot"></div>
                                                        <p class="sub-heading-box__heading sub-heading-box__heading--b">البرامج المستخدم</p>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input type="text" placeholder="اختيار التقنية" class="almuntjat-form__input">
                                                        <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                                    </div>
                                                </div>
                                                <div class="almuntjat-form__box">
                                                    <div class="sub-heading-box">
                                                        <div class="red-dot"></div>
                                                        <p class="sub-heading-box__heading sub-heading-box__heading--b">الألوان</p>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input type="text" placeholder="اختاير البرامج المستخدمة" class="almuntjat-form__input">
                                                        <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                                    </div>
                                                </div>
                                                <div class="almuntjat-form__box">
                                                    <div class="sub-heading-box">
                                                        <div class="red-dot"></div>
                                                        <p class="sub-heading-box__heading sub-heading-box__heading--b">المقاسات</p>
                                                    </div>
                                                    <div class="input-holder">
                                                        <input type="text" placeholder="اختاير البرامج المستخدمة" class="almuntjat-form__input">
                                                        <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                                    </div>
                                                </div>

                                                <div class="almuntjat-form__box switch">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">تفعيل المنتج</label>
                                                    </div>
                                                    <div class="sub-heading-box">
                                                        <p>تفعيل أو تعطيل ظهور المنتج لا يتطلب موافقة من الإدارة</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="almuntjat-form-error">
                                            <i class="fa-solid fa-triangle-exclamation"></i> بعد إضافة المنتج سيذهب الى الإدارة للمراجعة للقبول أو الرفض
                                            </div>
                                            <button type="button" class="almuntjat-form__btn m-btn" data-bs-toggle="modal" data-bs-target="#productaddform1Modal">
                                            حفظ 
                                            </button>
                                            <p class="almuntjat-form__text">
                                            تعديل بيانات المنتج
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


<!-- ///////////////////////////////////////////////////////// product design productaddformModal end here /////////////////////////////////////////////// -->


    <!-- About US -->

    @include('pages.user.aboutModal')
    <!-- 3D Technology -->
    @include('pages.user.tdModal')
    <!-- Login -->
    @include('pages.user.loginModal')
    <!-- Register -->

    @include('pages.user.registerModal')
    <!-- Membership Information -->

    @include('pages.user.memberModal')
    <!-- Public Services Form -->

    @include('pages.user.publicServiesModal')
    <!-- Public Services Form result -->

    @include('pages.user.publicServiesFinalModal')
    <!-- Public Submitted modal -->

    @include('pages.user.publicSubmittedModal')
    <!-- publicPayment -->

    @include('pages.user.publicPaymentModal')
    <!-- Public FullSubmitted modal -->

    @include('pages.user.publicFullSubmittedModal')
    <!-- Public FullReadable modal -->

    @include('pages.user.publicFullReadableModal')
    <!-- Public Rejected Result modal -->

    @include('pages.user.publicRejectedResultModal')
    <!-- Public RejectedReadable modal -->

    @include('pages.user.publicRejectedReadableModal')
    <!-- Health Services Form -->

    @include('pages.user.healthServiesModal')
    <!-- Health Services Form result -->

    @include('pages.user.healthServicesFinalModal')
    <!-- Requests Modal -->

    @include('pages.user.requestsModal')
    <!-- All requests Modal -->

    @include('pages.user.allRequestsModal')
    <!-- Health Payment After -->

    @include('pages.user.healthPaymentAfterModal')
    <!-- All requests result -->

    @include('pages.user.allRequestsResultModal')
    <!-- healthPaymentResult -->

    @include('pages.user.healthPaymentResultModal')
    <!-- Health Rejected result Modal -->

    @include('pages.user.healthRejectedResultModal')
    <!-- Health Rejected readable Modal -->

    @include('pages.user.healthRejectedReadableModal')
    <!-- Other Stage One -->

    @include('pages.user.otherStageOneModal')
    <!-- Stage one final -->

    @include('pages.user.stageOneFinalModal')
    <!-- Other Stage Two -->

    @include('pages.user.otherStageTwoModal')
    <!-- Stage two final -->

    @include('pages.user.stageTwoFinalModal')
    <!-- Other Stage Three -->

    @include('pages.user.otherStageThreeModal')
    <!-- Stage three final -->

    @include('pages.user.stageThreeFinalModal')
    <!-- Loader Modal -->

    @include('pages.user.loaderModal')
    <!-- Other Stages Loader Modal -->

    @include('pages.user.otherLoaderModal')
    <!-- Register Loader Modal -->

    @include('pages.user.registerLoaderModal')
    <!-- Health Video Modal -->

    @include('pages.user.healthVideoModal')
    <!-- Public Video Modal -->

    @include('pages.user.publicVideoModal')
    <!-- Bootstrap js -->
    @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
    <script>
        $(function() {
            $('#healthServicesFinalModal').modal('show');
        });
    </script>
    @endif
    @if(!empty(Session::get('error_code')) && Session::get('error_code') == 4)
    <script>
        $(function() {
            $('#publicPaymentModal').modal('show');
        });
    </script>
    @endif
    @if(!empty(Session::get('error_code')) && Session::get('error_code') == 6)
    <script>
        $(function() {
            $('#publicServiesFinalModal').modal('show');
        });
    </script>
    @endif
    <script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>
    <!-- JQuery -->
    <script src="{{asset('user/assets/js/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            var a = 0;
            $(window).scroll(function() {
                var oTop = $('.counter').offset().top - window.innerHeight;
                if (a == 0 && $(window).scrollTop() > 300) {
                    $('.client-counter').each(function() {
                        var $this = $(this),
                            countTo = $this.attr('data-count');
                        $({
                            countNum: $this.text()
                        }).animate({
                                countNum: countTo
                            },

                            {

                                duration: 2000,
                                easing: 'swing',
                                step: function() {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function() {
                                    $this.text(this.countNum);
                                    //alert('finished');
                                }

                            });
                    });
                    a = 1;
                }

                // if (($(window).scrollTop() > 600)) {
                //     $('.about-content').addClass('animate__animated animate__fadeIn animate_slowest');
                // }
            });
        })
    </script>
    <script>
        $(document).on('click', '.editProduct', function(e) {
            const btn = $(e.currentTarget);
            rowid = btn.attr('data-id');
            var url = '{{ route("vieworder", ":id") }}';
            url = url.replace(':id', rowid);
            $.ajax({
                url: url,
                type: "GET",
                success: function(response) {

                    console.log(response);
                    const modal = $('#allRequestsResultModal');
                    modal.find('#procedure').val(response.procedure);
                    modal.find('#parts').val(response.parts);
                    modal.find('#pa_age').val(response.pa_age);
                    modal.find('#pa_id').val(response.pa_id);
                    modal.find('#pa_name').val(response.pa_name);
                    modal.find('#hospital').val(response.hospital);
                    modal.find('#dr_phone').val(response.dr_phone);
                    modal.find('#dr_email').val(response.dr_email);
                    modal.find('#dr_name').val(response.dr_name);
                    modal.find('#dr_spec').val(response.dr_spec);
                    modal.find('#myfile').attr(response.myfile);
                    modal.find('#exampleFormControlTextarea1').val(response.discription);
                    modal.find('.dateTime').text(response.created_at);
                    modal.find('.id').text(response.id);
                    modal.find('#status').val(response.status);
                    $('#allRequestsResultModal').modal('show');

                    $('#requestsModal').modal('hide');
                    // $('.modal-backdrop').remove();
                },
                error: function(errorThrown, errResponse) {
                    console.log(errorThrown, errResponse);
                }
            });

        });
    </script>
    <!-- Slick -->
    <script src="{{ asset('user/assets/js/slick.min.js') }}"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('user/assets/js/scripts.js') }}"></script>
</body>

</html>