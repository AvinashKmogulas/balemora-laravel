<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Admin | Balemora resort' }} </title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('backend/assets/css/core.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('backend/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('backend/assets/css/iconify-icons.css') }}" />
    <script src="{{ URL::asset('backend/assets/js/helpers.js') }}"></script>
    <script src="{{ URL::asset('backend/assets/js/jquery.js') }}"></script>

    <style>
        .swal2-container.swal2-top-end.swal2-backdrop-show {
            z-index: 9999999;
        }

        .swal2-toast h2:where(.swal2-title) {

            margin: 0 !important;
            padding: 0 !important;
            font-size: 1em !important;
            text-align: initial !important;
            line-height: 15px !important;
        }

        .btn-gradient-purple {
            background: linear-gradient(90deg, #a855f7 0%, #7c3aed 100%);
            color: #fff !important;
            border: none;
            border-radius: 9999px;
            padding-left: 18px;
            padding-right: 18px;
        }

        .btn-gradient-purple:hover {
            filter: brightness(1.05);
            color: #fff !important;
        }

        .btn-gradient-purple:focus {
            box-shadow: 0 0 0 0.2rem rgba(124, 58, 237, 0.25);
        }

        /* Show subtle borders for sidebar and header */
        #layout-menu {
            border-right: 1px solid #e4e6eb;
        }

        #layout-navbar {
            border-bottom: 1px solid #e4e6eb;
        }
    </style>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('backend.common.sidebar')
            <div class="layout-page">
                @include('backend.common.header')
                @yield('content')
                @stack('script')
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <script src="{{ URL::asset('backend/assets/js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('backend/assets/js/menu.js') }}"></script>
    <script src="{{ URL::asset('backend/assets/js/propper.js') }}"></script>
    <script src="{{ URL::asset('backend/assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                toast: true,
                icon: 'success',
                title: "{{ session('success') }}",
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        @endif

        @if (session('error'))
            Swal.fire({
                toast: true,
                icon: 'error',
                title: "{{ session('error') }}",
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        @endif

        @if (session('warning'))
            Swal.fire({
                toast: true,
                icon: 'warning',
                title: "{{ session('warning') }}",
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        @endif

        @if (session('info'))
            Swal.fire({
                toast: true,
                icon: 'info',
                title: "{{ session('info') }}",
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        @endif

        @if ($errors->any())
            Swal.fire({
                toast: true,
                icon: 'error',
                title: "{{ $errors->first() }}",
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        @endif
    </script>
</body>

</html>
