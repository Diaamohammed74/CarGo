@php
    $controller = DzHelper::controller();
    $page = $action = DzHelper::action();
    $action = $controller.'_'.$action;
@endphp

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
	<!-- Title -->
	<title>{{ config('dz.name') }} | @yield('title', $page_title ?? '')</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Easy-Spelling">
	<meta name="robots" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="bootstrap, courses, education admin template, educational, instructors, learning, learning admin, learning admin theme, learning application, lessons, lms admin template, lms rails, quizzes ui, school admin">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="@yield('page_description', $page_description ?? '')">
	<meta property="og:title" content="Cargo">
	<meta property="og:description" content="{{ config('dz.name') }} | @yield('title', $page_title ?? '')">
	<meta property="og:image" content="">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons Icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo/logo-img.png')}}">

    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    @if(!empty(config('dz.public.pagelevel.css.YashAdminController_uc_toastr')))
    @foreach(config('dz.public.pagelevel.css.YashAdminController_uc_toastr') as $style)
    <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
    @endforeach
    @endif
    @if(!empty(config('dz.public.pagelevel.css.YashAdminController_uc_sweetalert')))
    @foreach(config('dz.public.pagelevel.css.YashAdminController_uc_sweetalert') as $style)
    <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
    @endforeach
    @endif
</head>


<body class="vh-100" style="background-image:url('{{ asset('images/bg.png')}}'); background-position:center;">
    <div class="h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                @yield('content')
            </div>
        </div>
    </div>


    <!-- Required vendors -->
    @if(!empty(config('dz.public.global.js.top')))
    @foreach(config('dz.public.global.js.top') as $script)
        <script src="{{ asset($script) }}" type="text/javascript"></script>
    @endforeach
    @endif
    @if(!empty(config('dz.public.pagelevel.js.'.$action)))
    @foreach(config('dz.public.pagelevel.js.'.$action) as $script)
        <script src="{{ asset($script) }}" type="text/javascript"></script>
    @endforeach
    @endif
    @if(!empty(config('dz.public.global.js.bottom')))
    @foreach(config('dz.public.global.js.bottom') as $script)
        <script src="{{ asset($script) }}" type="text/javascript"></script>
    @endforeach
    @endif
    @if(!empty(config('dz.public.pagelevel.js.YashAdminController_uc_toastr')))
    @foreach(config('dz.public.pagelevel.js.YashAdminController_uc_toastr') as $script)
    <script src="{{ asset($script) }}" type="text/javascript"></script>
    @endforeach
    @endif
    @if(!empty(config('dz.public.pagelevel.js.YashAdminController_uc_sweetalert')))
    @foreach(config('dz.public.pagelevel.js.YashAdminController_uc_sweetalert') as $script)
    <script src="{{ asset($script) }}" type="text/javascript"></script>
    @endforeach
    @endif
    @stack('scripts')
    @if($errors->any())
    @foreach ($errors->all() as $error)
    <script>
         toastr.error("{{ $error }}", "Error !", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                });
    </script>
    @endforeach
    @endif
</body>
</html>
