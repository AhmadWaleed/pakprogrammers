<!DOCTYPE html>
<html>
<head>
    @include('layouts.admin.partials._head')
</head>
<body>

<!-- START NAV -->
    @include('layouts.admin.partials._nav')
<!-- END NAV -->
<div class="container">
    <div class="columns">
        <div class="column is-3">
            @include('layouts.admin.partials._sidebar')
        </div>
        <div class="column is-9">
            @include('layouts.admin.partials._content')
        </div>
        @yield('page-content')
    </div>
</div>
    @include('layouts.admin.partials._footer')
</body>
</html>
e