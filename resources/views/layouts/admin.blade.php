<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>Blank Page &mdash; Nomads</title>

    <!-- General CSS Files -->
    @include('includes.style')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <!-- Navigation -->
            <div class="navbar-bg"></div>
            @include('includes.navigation')

            <!-- Sidebar -->
            <div class="main-sidebar sidebar-style-2">
                @include('includes.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>

            <!-- Footer -->
            <footer class="main-footer">
                @include('includes.footer')
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    @include('includes.script')
</body>

</html>
