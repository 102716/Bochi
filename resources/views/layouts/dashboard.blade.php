<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bochi | Dashboard</title>

    @include('extras.dashboard.head')

</head>

<div class="loader">
    @include('extras.dashboard.preloader')
</div>

<body>

    @include('extras.dashboard.navbar')
    @include('extras.dashboard.sidebar')

    <div class="dashboard-content">
        @yield('content')
    </div>
    
</body>

    @include('extras.dashboard.foot')
    @include('extras.dashboard.footer')

</html>