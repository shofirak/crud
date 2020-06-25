<!DOCTYPE html>
<html lang="en">
<head>
    @include('master.headMaster')
</head>
<body>
    <!-- wrapper -->
    <div id="wrapper">
        <!-- container -->
        <div class="container">
            @yield('content')
        </div>
        <!-- end container -->
    </div>
    <!--end wrapper  -->
    
    @include('master.jsMaster')
</body>
</html>