<!DOCTYPE html>
<html>
<head>
    @include('layouts.forum.partials._head')
</head>
<body>

    @include('layouts.forum.partials._nav')

<section class="container">
    <div class="columns">
        <div class="column is-3">
            <a class="button is-primary is-block is-alt is-large" href="#">New Post</a>
            @include('layouts.forum.partials._sidebar')

        </div>

        <div class="column is-9">
            <div class="box content">
                @yield('forum-content')
                <article class="post">
                    <h4>Bulma: How do you center a button in a box?</h4>
                    <span class="pull-right has-text-grey-light"><i class="fa fa-comments"></i> 1</span>
                    <div class="media">
                        <div class="media-left">
                            <p class="image is-32x32">
                                <img src="http://bulma.io/images/placeholders/128x128.png">
                            </p>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <a href="#">@jsmith</a> replied 34 minutes ago  &nbsp;
                                    <span class="tag">Question</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post">
                    <h4>How can I make a bulma button go full width?</h4>
                    <span class="pull-right has-text-grey-light"><i class="fa fa-comments"></i> 0</span>
                    <div class="media">
                        <div class="media-left">
                            <p class="image is-32x32">
                                <img src="http://bulma.io/images/placeholders/128x128.png">
                            </p>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <a href="#">@red</a> replied 40 minutes ago  &nbsp;
                                    <span class="tag">Question</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post">
                    <h4>TypeError: Data must be a string or a buffer when trying touse vue-bulma-tabs</h4>
                    <span class="pull-right has-text-grey-light"><i class="fa fa-comments"></i> 13</span>
                    <div class="media">
                        <div class="media-left">
                            <p class="image is-32x32">
                                <img src="http://bulma.io/images/placeholders/128x128.png">
                            </p>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <a href="#">@jsmith</a> replied 53 minutes ago  &nbsp;
                                    <span class="tag">Question</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post">
                    <h4>How to vertically center elements in Bulma?</h4>
                    <span class="pull-right has-text-grey-light"><i class="fa fa-comments"></i> 2</span>
                    <div class="media">
                        <div class="media-left">
                            <p class="image is-32x32">
                                <img src="http://bulma.io/images/placeholders/128x128.png">
                            </p>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <a href="#">@brown</a> replied 3 hours ago  &nbsp;
                                    <span class="tag">Question</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post">
                    <h4>I'm trying to use hamburger menu on bulma css, but it doesn't work. What is wrong?</h4>
                    <span class="pull-right has-text-grey-light"><i class="fa fa-comments"></i> 2</span>
                    <div class="media">
                        <div class="media-left">
                            <p class="image is-32x32">
                                <img src="http://bulma.io/images/placeholders/128x128.png">
                            </p>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <a href="#">@hamburgler</a> replied 5 hours ago  &nbsp;
                                    <span class="tag">Question</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post">
                    <h4>How to make tiles wrap with Bulma CSS?</h4>
                    <span class="pull-right has-text-grey-light"><i class="fa fa-comments"></i> 2</span>
                    <div class="media">
                        <div class="media-left">
                            <p class="image is-32x32">
                                <img src="http://bulma.io/images/placeholders/128x128.png">
                            </p>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <a href="#">@rapper</a> replied 3 hours ago  &nbsp;
                                    <span class="tag">Question</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>

    </div>
</section>
    @include('layouts.forum.partials._footer')
</body>
</html>
