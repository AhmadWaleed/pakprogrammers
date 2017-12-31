<!DOCTYPE html>
<html>
<head>
 @include('layouts.blog.partials._head')
</head>
<body>

<div class="container">
    <!-- START NAV -->
        @include('layouts.blog.partials._nav')
    <!-- END NAV -->

    <!-- START ARTICLE FEED -->
    <section class="articles">
        @include('layouts.blog.partials._articles')
    </section>
    <!-- END ARTICLE FEED -->
</div>
    @include('layouts.blog.partials._footer')
</body>
</html>
