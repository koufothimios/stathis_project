<!DOCTYPE html>
<html>
    <head>
        @include('includes.header')
    </head>
    <body>
        @include('includes.nav')

        @yield('main')

        @include('includes.footer')
        @include('includes.js_default')
        @yield('js')
    </body>
</html>
