<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>{{ config('app.name', 'Waseka - UK  ') }}</title>

        @include('backend.partials.meta')

    <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Web font -->

        @include('backend.partials.styles')

        @stack('styles')
    </head>

    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">

        @include('backend.partials.nav')
        <div class="m-grid__item m-grid__item--fluid m-grid m-body">
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <div class="m-content">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('backend.partials.footer')
        @include('backend.partials.scripts')
        @stack('scripts')
    </body>
</html>
