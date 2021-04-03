<!doctype html>
<html class="no-js" lang="en">

@include('includes.header')

<body class="materialdesign">
    <!-- Header top area start-->
    <div class="wrapper-pro">
        @include('includes.sidebar')
        <!-- Header top area start-->
        <div class="content-inner-all">
            @include('includes.navbar')
            <!-- Header top area end-->
            <!-- Breadcome start-->
            @include('includes.breadcome')
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            @include('includes.mobile-menu')
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            @include('includes.breadcome-mobile')
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
            @yield('content')
        </div>
    </div>

    @include('includes.footer')
</body>

</html>
