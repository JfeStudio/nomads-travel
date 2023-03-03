<!DOCTYPE html>
<html>

<head>
    <!-- General CSS -->
    @include('includes.style')
</head>

<body class="bg-slate-50">
    @yield('content')
    <!-- footer -->
    <footer class="pt-16 pb-8 lg:pt-24">
        @include('includes.footer')
    </footer>
    <!-- end footer -->

    <!-- file js -->
    @include('includes.script')
</body>

</html>
