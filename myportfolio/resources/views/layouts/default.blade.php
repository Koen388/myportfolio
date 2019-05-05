<!doctype html>
<html>
    
<head>
    @include('includes.head')
</head>

<body>
        

        @include('includes.header')
        @include('includes.navbar')



    <div id="main" class="row">
    <div class="container">
            @yield('content')
    </div>


    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>