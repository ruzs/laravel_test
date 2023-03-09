<!-- resources/views/layouts/app.blade.php -->
<html>

<head>
    <title>App Name - @yield('title')</title>
</head>

<body>
    <h1><a href="{{ route('students.index') }}">Index</a></h1>

    @section('sidebar')
        This is the master sidebar.
    @show

    <div class="container">

        @yield('content')

    </div>

</body>

</html>
