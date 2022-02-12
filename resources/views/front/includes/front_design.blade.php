<!DOCTYPE html>
<html lang="en">
    @include('front.includes.head')
    <body>
        <!-- start preloader area-->
        <div class="preloader-main">
            <div class="loader">
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
            </div>
        </div>
        <!--end preloader area -->

        @include('front.includes.header')

        @yield('content')

        @include('front.includes.footer')

        @include('front.includes.scripts')
    </body>
</html>
