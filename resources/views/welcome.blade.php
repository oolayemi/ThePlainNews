<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Plain News - News &amp; Lifestyle Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>

<body>
<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/"><img src="{{asset('img/core-img/logo.png')}}" alt=""></a>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Login -->
                            <div class="login d-flex">

                                @auth

                                @else
                                    @if(Route::has('login'))
                                    <a href="{{ route('login') }}">Login</a>
                                    @endif
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth

                            </div>
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" class="form-control" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <div class="login d-flex">

                                @auth
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endauth

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="newspaper-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newspaperNav">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="{{asset('img/core-img/logo.png')}}" alt=""></a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="catagories-post.html">Catagories</a></li>
                                        <li><a href="single-post.html">Single Articles</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="#">Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="/">Home</a></li>
                                                <li><a href="catagories-post.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Articles</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Mega Menu</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Catagories</li>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Catagories</li>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Catagories</li>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <div class="single-mega cn-col-4">
                                            <!-- Single Featured Post -->
                                            <div class="single-blog-post small-featured-post d-flex">
                                                <div class="post-thumb">
                                                    <a href="#"><img src="{{asset('img/bg-img/23.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="post-data">
                                                    <a href="#" class="post-catagory">Travel</a>
                                                    <div class="post-meta">
                                                        <a href="#" class="post-title">
                                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                                        </a>
                                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Featured Post -->
                                            <div class="single-blog-post small-featured-post d-flex">
                                                <div class="post-thumb">
                                                    <a href="#"><img src="{{asset('img/bg-img/24.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="post-data">
                                                    <a href="#" class="post-catagory">Politics</a>
                                                    <div class="post-meta">
                                                        <a href="#" class="post-title">
                                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                                        </a>
                                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                {{--<li><a href="#">Politics</a></li>--}}
                                <li><a href="#">Breaking News</a></li>
                                {{--<li><a href="#">Business</a></li>--}}
                                {{--<li><a href="#">Technology</a></li>--}}
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Travel</a></li>
                                {{--<li><a href="#">Sports</a></li>--}}
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center">
                    <div class="news-title">
                        <p>Breaking News</p>
                    </div>
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            @foreach($posts as $post)
                                @if(strtolower($post->category) == 'breaking')
                                    <li><a href="{{route('post.show', $post->id)}}">{{$post->title}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center mt-15">
                    <div class="news-title title2">
                        <p>International</p>
                    </div>
                    <div id="internationalTicker" class="ticker">
                        <ul>
                            @foreach($posts as $post)
                                @if(strtolower($post->category) == 'international')
                                    <li><a href="{{route('post.show', $post->id)}}">{{$post->title}}</a></li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Hero Add -->
            <div class="col-12 col-lg-4">
                <div class="hero-add">
                    <a href="#"><img src="{{asset('img/bg-img/hero-add.gif')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Featured Post Area Start ##### -->
<div class="featured-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <div class="row">

                    @foreach($posts as $post)
                        @if(strtolower($post->category) == 'finance')
                        <!-- Single Featured Post -->
                        <div class="col-12 col-lg-7">
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('img/bg-img/16.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">{{$post->category}}</a>
                                    <a href="{{route('post.show', $post->id)}}" class="post-title">
                                        <h6>{{$post->title}}</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Christinne Williams</a></p>
                                        <h6 class="post-excerp">{{Str::limit($post->content, '326', '....')}}</h6>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="{{asset('img/core-img/like.png')}}" alt=""> <span>{{$post->likes}}</span></a>
                                            <a href="#" class="post-comment"><img src="{{asset('img/core-img/chat.png')}}" alt=""> <span>{{count($post->comments)}}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach

                    <div class="col-12 col-lg-5">
                        <!-- Single Featured Post -->
                        @foreach($posts as $post)
                            @if(strtolower($post->category) == 'breaking')
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{asset('img/bg-img/17.jpg')}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">{{$post->category}}</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>{{Str::limit($post->title, '30', '...')}}</h6>
                                        </a>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>{{$post->likes}}</span></a>
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>{{count($post->comments)}}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-catagory">Finance</a>
                        <div class="post-meta">
                            <a href="#" class="post-title">
                                <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                            </a>
                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-catagory">Politics</a>
                        <div class="post-meta">
                            <a href="#" class="post-title">
                                <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                            </a>
                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-catagory">Health</a>
                        <div class="post-meta">
                            <a href="#" class="post-title">
                                <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                            </a>
                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/22.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-catagory">Finance</a>
                        <div class="post-meta">
                            <a href="#" class="post-title">
                                <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                            </a>
                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-catagory">Travel</a>
                        <div class="post-meta">
                            <a href="#" class="post-title">
                                <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                            </a>
                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Post -->
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-catagory">Politics</a>
                        <div class="post-meta">
                            <a href="#" class="post-title">
                                <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                            </a>
                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Featured Post Area End ##### -->

<!-- ##### Popular News Area Start ##### -->
<div class="popular-news-area section-padding-80-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="section-heading">
                    <h6>Popular News</h6>
                </div>

                <div class="row">

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/12.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <a href="#" class="post-title">
                                    <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                    <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/13.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <a href="#" class="post-title">
                                    <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                    <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/14.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <a href="#" class="post-title">
                                    <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                    <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/15.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <a href="#" class="post-title">
                                    <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                    <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="section-heading">
                    <h6>Info</h6>
                </div>
                <!-- Popular News Widget -->
                <div class="popular-news-widget mb-30">
                    <h3>4 Most Popular News</h3>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>
                </div>

                <!-- Newsletter Widget -->
                <div class="newsletter-widget">
                    <h4>Newsletter</h4>
                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <form action="#" method="post">
                        <input type="text" name="text" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <button type="submit" class="btn w-100">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Popular News Area End ##### -->

<!-- ##### Video Post Area Start ##### -->
<div class="video-post-area bg-img bg-overlay" style="background-image: url({{asset('img/bg-img/bg1.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Video Post -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single-video-post">
                    <img src="{{asset('img/bg-img/video1.jpg')}}" alt="">
                    <!-- Video Button -->
                    <div class="videobtn">
                        <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Video Post -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single-video-post">
                    <img src="img/bg-img/video2.jpg" alt="">
                    <!-- Video Button -->
                    <div class="videobtn">
                        <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Video Post -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single-video-post">
                    <img src="img/bg-img/video3.jpg" alt="">
                    <!-- Video Button -->
                    <div class="videobtn">
                        <a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Video Post Area End ##### -->

<!-- ##### Editorial Post Area Start ##### -->
<div class="editors-pick-post-area section-padding-80-50">
    <div class="container">
        <div class="row">
            <!-- Editors Pick -->
            <div class="col-12 col-md-7 col-lg-9">
                <div class="section-heading">
                    <h6>Editor’s Pick</h6>
                </div>

                <div class="row">

                    <!-- Single Post -->
                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/1.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                </a>
                                <div class="post-meta">
                                    <div class="post-date"><a href="#">February 11, 2018</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/2.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                </a>
                                <div class="post-meta">
                                    <div class="post-date"><a href="#">February 11, 2018</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/3.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                </a>
                                <div class="post-meta">
                                    <div class="post-date"><a href="#">February 11, 2018</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/4.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                </a>
                                <div class="post-meta">
                                    <div class="post-date"><a href="#">February 11, 2018</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/5.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                </a>
                                <div class="post-meta">
                                    <div class="post-date"><a href="#">February 11, 2018</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-lg-4">
                        <div class="single-blog-post">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/6.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                    <h6>Orci varius natoque penatibus et magnis dis parturient montes.</h6>
                                </a>
                                <div class="post-meta">
                                    <div class="post-date"><a href="#">February 11, 2018</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- World News -->
            <div class="col-12 col-md-5 col-lg-3">
                <div class="section-heading">
                    <h6>World News</h6>
                </div>

                <!-- Single Post -->
                <div class="single-blog-post style-2">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/7.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-title">
                            <h6>Orci varius natoque penatibus et magnis</h6>
                        </a>
                        <div class="post-meta">
                            <div class="post-date"><a href="#">February 11, 2018</a></div>
                        </div>
                    </div>
                </div>

                <!-- Single Post -->
                <div class="single-blog-post style-2">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/8.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-title">
                            <h6>Orci varius natoque penatibus et magnis</h6>
                        </a>
                        <div class="post-meta">
                            <div class="post-date"><a href="#">February 11, 2018</a></div>
                        </div>
                    </div>
                </div>

                <!-- Single Post -->
                <div class="single-blog-post style-2">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/9.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-title">
                            <h6>Orci varius natoque penatibus et magnis</h6>
                        </a>
                        <div class="post-meta">
                            <div class="post-date"><a href="#">February 11, 2018</a></div>
                        </div>
                    </div>
                </div>

                <!-- Single Post -->
                <div class="single-blog-post style-2">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/10.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-title">
                            <h6>Orci varius natoque penatibus et magnis</h6>
                        </a>
                        <div class="post-meta">
                            <div class="post-date"><a href="#">February 11, 2018</a></div>
                        </div>
                    </div>
                </div>

                <!-- Single Post -->
                <div class="single-blog-post style-2">
                    <div class="post-thumb">
                        <a href="#"><img src="img/bg-img/11.jpg" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="#" class="post-title">
                            <h6>Orci varius natoque penatibus et magnis</h6>
                        </a>
                        <div class="post-meta">
                            <div class="post-date"><a href="#">February 11, 2018</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ##### Editorial Post Area End ##### -->

<!-- ##### Footer Add Area Start ##### -->
<div class="footer-add-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-add">
                    <a href="#"><img src="img/bg-img/footer-add.gif" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Footer Add Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">

    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="/"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="mailto:contact@youremail.com">contact@youremail.com</a></li>
                            <li><a href="tel:+4352782883884">+43 5278 2883 884</a></li>
                            <li><a href="http://yoursitename.com">www.yoursitename.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Politics</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Markets</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Featured</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Football</a></li>
                            <li><a href="#">Golf</a></li>
                            <li><a href="#">Tennis</a></li>
                            <li><a href="#">Motorsport</a></li>
                            <li><a href="#">Horseracing</a></li>
                            <li><a href="#">Equestrian</a></li>
                            <li><a href="#">Sailing</a></li>
                            <li><a href="#">Skiing</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">FAQ</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Aviation</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Traveller</a></li>
                            <li><a href="#">Destinations</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Food/Drink</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Partner Hotels</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">+More</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Arts</a></li>
                            <li><a href="#">Autos</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Copywrite -->
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>
</body>

</html>












{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
--}}
