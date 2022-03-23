<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon"> -->
    @if(@$title->title != null)
    <title>{{$title->title}}</title>
    @else
    <title>أجهزة ثلاثية الأبعاد</title>
    @endif
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('user/assets/icons/logo.svg') }}" type="image/x-icon" />
    @if(@$title->discription != null)
    <meta name="description" content={{$title->discription}}>
    @else
    <meta name="description" content="شركة إدراك للإستشارات الإدارية والتدريب الإستشاري">
    @endif
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css"> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
    <!-- Themify icon-->


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather-icon.css') }}">


    <!-- Plugins css start-->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vector-map.css') }}">
    <!-- Plugins css Ends-->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
    <!-- Bootstrap css-->

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}"> -->

    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">


    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}"> -->

    <!-- ckeditor -->
    <link rel="stylesheet" href="{{asset('/assets/ckeditor/contents.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')}}" /> -->
    <script src="{{asset('user/assets/js/jquery.min.js')}}"></script>
    <!-- <script src="{{asset('user/assets/js/scripts.js')}}"></script> -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- StyleSheet -->
    <!-- <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}"> -->
    <!-- Responsive Sheet -->


    <style>
        .page-wrapper.compact-wrapper .page-body-wrapper .page-body {
            padding-top: 30px;
            margin-right: 290px !important;
            margin-left: 0px !important;

        }

        html {
            direction: rtl !important;
        }

        .file-drop-area {
            position: relative;
            display: flex;
            align-items: center;
            width: 450px;
            max-width: 100%;
            padding: 25px;
            border: 1px dashed rgba(255, 255, 255, 0.4);
            border-radius: 3px;
            transition: 0.2s
        }

        .choose-file-button {
            flex-shrink: 0;
            background-color: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 3px;
            padding: 8px 15px;
            margin-right: 10px;
            font-size: 12px;
            text-transform: uppercase
        }

        .file-message {
            font-size: small;
            font-weight: 300;
            line-height: 1.4;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .file-input {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            cursor: pointer;
            opacity: 0
        }

        .mt-100 {
            margin-top: 100px
        }
    </style>
    <!-- <link rel="stylesheet" href="{{asset('user/assets/css/responsive.css')}}"> -->
    <!-- App css-->
</head>