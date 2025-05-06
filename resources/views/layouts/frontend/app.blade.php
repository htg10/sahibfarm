<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahib Farm</title>
    @yield('meta')
    @include('layouts.frontend.partials.style')
    @yield('style')
    <style>
        .whatsapp-icon {
            position: fixed;
            bottom: 60px;
            right: 10px;
            background-color: #25d366;
            border-radius: 50%;
            padding: 8px 15px 8px 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
        }

        .whatsapp-icon i {
            color: white;
            font-size: 30px;
        }
    </style>
</head>

<body>
    @include('layouts.frontend.partials.header')

    @yield('content')

    {{-- =====**Successfully Popup Code --}}
    <div style="position:absolute; top:75px; right: 10px; z-index: 9999;">
        @if (session()->has('success'))
            <div class="alert alert-success fade show" role="alert">
                <span class="alert-inner--text"><strong>Success !</strong> {{ session()->get('success') }}</span>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger fade show" role="alert">
                <span class="alert-inner--text"><strong>Error !</strong> {{ session()->get('error') }}</span>
            </div>
        @endif
    </div>

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/+919999314143" target="_blank" class="whatsapp-icon">
        <i class="bi bi-whatsapp"></i>
    </a>

    <script type="text/javascript">
        setTimeout(function() {
            $(".alert").fadeOut();
        }, 3000);
    </script>

    @php
        $statusMessage = '';
        if (session()->get('success')) {
            $statusMessage = session()->get('success');
        } elseif (session()->get('error')) {
            $statusMessage = session()->get('error');
        } elseif (session()->get('failure')) {
            $statusMessage = session()->get('failure');
        }
    @endphp

    @include('layouts.frontend.partials.script')
    @include('layouts.frontend.partials.footer')

    @yield('script')
</body>

</html>
