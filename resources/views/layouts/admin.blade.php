<!DOCTYPE html>
<html lang="en">

<head>
    <!-- General CSS Files -->
    @include('includes.admin.style')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <!-- Navigation -->
            <div class="navbar-bg"></div>
            @include('includes.admin.navigation')

            <!-- Sidebar -->
            <div class="main-sidebar sidebar-style-2">
                @include('includes.admin.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>

            <!-- Footer -->
            <footer class="main-footer">
                @include('includes.admin.footer')
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    @include('sweetalert::alert')
    @include('includes.admin.script')
</body>

</html>
