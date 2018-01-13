<!DOCTYPE html>
<html>
<head>
    @include('layouts.landing.partials._head')
</head>
<body>
<section class="hero is-info is-fullheight">
    <div class="hero-head">
        @include('layouts.landing.partials._nav')
    </div>

    @yield('content')

</section>
    @include('layouts.landing.partials._footer')
</body>
</html>
