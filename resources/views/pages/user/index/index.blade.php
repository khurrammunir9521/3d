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
    <script src="{{ asset('user/assets/js/jquery.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    <!-- Responsive Sheet -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}">
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

    <div class="content-wrapper hide-on-load">
        <nav class="navbar navbar-expand-lg navbar-light">
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
                            <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
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
                                @if (auth()->user()->profile == null)
                                    <div class="profile-img">
                                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                </div>
                @else
                <div class="profile-img">
                    <img src="{{ asset('storage/' . auth()->user()->profile) }}" style="height:40px; width:40px;">

                </div>
                @endif
                <a href="#membership" class="dot m-0 border-bottom" data-bs-toggle="modal" data-bs-target="#memberModal">{{ auth()->user()->name }}</a>
                --}}
                <a href="#membership" class="m-0" data-bs-toggle="modal" data-bs-target="#memberModal">
                    {{-- @if (auth()->user()->profile != null) --}}
                    @if (auth()->user()->profile == null)
                    <div class="profile profile-icon">
                        <img src="{{ asset('assets/images/dashboard/1.png') }}" alt="">
                    </div>
                    @else
                    <img class="" style="width:30px;height:30px;" alt="" src="{{ asset('storage/' . auth()->user()->profile) }}">
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
        <img src="{{ asset('user/assets/images/banner-bg.png') }}" class="img-fluid banner-bg sample move-blue animate__animated animate__slideInRight animate__slower animate__delay-2s" alt="banner-bg">
        <img src="{{ asset('user/assets/images/black-bg.png') }}" class="black-bg sample move-black animate__animated animate__slideInLeft animate__slower animate__delay-2s" alt="black-bg">
        <img src="{{ asset('user/assets/images/hands.png') }}" class="img-fluid hands sample move-hand" alt="hands">
        <div class="container">
            <div class="row">

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
                                        <div class="col-sm-7 col-md-4 col-lg-7">
                                            <div class="static-text">


                                                <span class="outline dot d-block">{{ $profiles->sub_heading }}
                                                </span>


                                                <h2 class="title no-border">
                                                    {{ $profiles->heading }}
                                                    !
                                                </h2>


                                                <p class="description">
                                                    {!!$profiles->body_text !!}
                                                </p>


                                                <button class="btn btn-sky">المزيد</button>
                                                <a href="#services-section" class="btn btn-grey">قدم طلبك <img src="{{ asset('user/assets/icons/arrow-down.svg') }}" alt="arrow-down"></a href="#services-section">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-md-8 col-lg-5">
                                            <div class="top boxContainer">
                                                <div class="blue-box move-box"></div>
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
                    <div class="row align-items-center" dir="ltr">
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
                                <div class="col-md-8"></div>
                                <div class="col-md-2">
                                    <div class="counter">
                                        @if(@$counter->start != null)
                                        <span class="client-counter">{{$counter->start}}</span><span class="symbol">+</span>
                                        @else
                                        <span class="client-counter">12</span><span class="symbol">+</span>
                                        @endif
                                        <h5>عميل</h5>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="counter">
                                        @if(@$counter->end != null)
                                        <span class="client-counter">{{$counter->end}}</span><span class="symbol">+</span>

                                        @else
                                        <span class="client-counter">130</span><span class="symbol">+</span>
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
                                <div class="col-md-9">
                                    <div class="about-content" id="about-us">
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
                                <div class="col-md-3">
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
                    <div class="main dot-txt-main">
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
                    <div class="image-place dot-effect" id="main-effect">
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
                    <div class="pt-5 pt-md-1 pt-lg-4 pt-xl-4 pt-xxl-4">
                        <span class="outline dot right">أكثر من 13 عضو اصطناعي</span>
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
                            <p class='koib-health d-none mt-2 nav-link'><a href="#navbar" style="color:red"> يتطلب التسجيل </a>للتسجيل اضغط هنا </p>
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
                    <div class="image-place effect-machine" id="main-macine">
                        <div class="pointer top">
                            <p>مجسمات كبيرة</p>
                        </div>
                        <div class="pointer bottom">
                            <p>مجسمات صغيرة</p>
                        </div>
                        <img src="{{ asset('user/assets/images/machine.png') }}" class="img-fluid" alt="machine">
                    </div>
                    <div class="pt-5">
                        <span class="outline dot left">أكثر 20 خدمة مختلفة</span>
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

                            <p class='koib d-none mt-2 nav-link'><a href="#navbar" style="color:red"> يتطلب التسجيل </a>للتسجيل اضغط هنا </p>
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
                            <img src="{{ asset('user/assets/icons/tellers-logo.svg') }}" alt="tellers-logo">
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
                                                <div class="image-place dot-effect">
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
                                                <div class="pt-5 pt-md-1 pt-lg-5 pt-xl-5 pt-xxl-5">
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
                                                <div class="image-place effect-machine">
                                                    <div class="pointer top">
                                                        <p>مجسمات كبيرة</p>
                                                    </div>
                                                    <div class="pointer bottom">
                                                        <p>مجسمات صغيرة</p>
                                                    </div>
                                                    <img src="{{asset('user/assets/images/machine.png')}}" class="img-fluid" alt="machine">
                                                </div>
                                                <div class="pt-5">
                                                    <span class="outline dot left">أكثر 20 خدمة مختلفة</span>
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
        <p class='progress text-center bg-transparent d-block'>0</p>

        <div class="progress-bar bar-load" id="bar"></div>
    </div>
    <!--///////////////////////////////////// services model end here ////////////////////////////////////-->
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
            var scroll = false;
            console.log(scroll)
            $('#main-macine').removeClass('animate-left');
            function animateCounter() {
                var positionTop = $(window).scrollTop();
                var flag = true;
                if (positionTop >= 299) {
                $('.client-counter').each(function() {
                        $(this).prop('Counter', 0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 5000,
                            easing: 'swing',
                            step: function(now) {
                                $(this).text(Math.ceil(now));
                            }

                        });
                    });
                }
            }

            $(window).scroll(function() {
            var positionTop = $(window).scrollTop();
            animateCounter();
                if ((positionTop > 1000)) {
                    $('#main-macine').addClass('animate-left');
                    $('#main-effect').addClass('animate-right');
                }

            });
            // $.fn.scrollEvent = function() {
            // var scroll = $(window).scrollTop();
            //     return this.on("scroll", function() {
            //         console.log(window.innerHeight);
            //         // if ($(window).scrollTop() + $(window).height() == $(document).height()) {
            //         //     console.log(scroll)
            //         //     animateCounter();
            //         // }
            //         if (scroll > 299) {
            //         animateCounter();
            //         }
            //     });
            // };

            // $(window).scrollEvent()
            // function reveal() {
            //     scroll = true;
            // console.log(scroll)

            // var reveals = document.querySelectorAll("#main-macine");

            // for (var i = 0; i < reveals.length; i++) {
            //     var windowHeight = window.innerHeight;
            //     var elementTop = reveals[i].getBoundingClientRect().top;
            //     var elementVisible = 150;

            //     if (elementTop < windowHeight - elementVisible) {
            //     reveals[i].classList.add("animate-left");
            //     } else {
            //     reveals[i].classList.remove("animate-right");
            //     }
            // }
            // }

// window.addEventListener("scroll", reveal);
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
    <script src="{{ asset('user/assets/js/scripts.js') }}"></script>


</body>

</html>