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
                            <a href="/"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            {{--<!-- Login -->
                            <div class="login d-flex">
                                <a href="#">Login</a>
                                <a href="#">Register</a>
                            </div>--}}
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" class="form-control" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-30-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->
                    <div class="single-blog-post featured-post single-post">
                        <div class="post-thumb">
                            <img src="img/bg-img/25.jpg" alt="" width="100%">
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">{{$post->category}}</a>
                            <div class="post-title">
                                <h6> {{$post->title}} </h6>
                            </div>
                            <div class="post-meta">
                                <p class="post-author">By <a href="#">{{$post->user->name}}</a></p>
                                <p> {{$post->content}} </p>
                                <a href="#" class="related--post">Related: Facebook announces changes to combat election meddling</a>
                                <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                    <!-- Tags -->
                                    <div class="newspaper-tags d-flex">
                                        <span>Tags:</span>
                                        <ul class="d-flex">
                                            @foreach($post->tags as $tag)
                                            <li><a href="{{route('tag.show', $tag->id)}}">{{$tag->name}};</a></li>
                                            @endforeach
                                            {{--<li><a href="#">politics,</a></li>
                                            <li><a href="#">stock market</a></li>--}}
                                        </ul>
                                    </div>

                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center post-like--comments">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>{{$post->likes}}</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>{{count($post->comments)}}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- About Author -->
                    <div class="blog-post-author d-flex">
                        <div class="author-thumbnail">
                            <img src="img/bg-img/32.jpg" alt="">
                        </div>
                        <div class="author-info">
                            <a href="#" class="author-name">{{$post->user->name}}, <span>The Author</span></a>
                            <p>{{$post->user->about_user}}.</p>
                        </div>
                    </div>

                    <div class="pager d-flex align-items-center justify-content-between">
                        <div class="prev">
                            <a href="{{route('post.show', $post->id-1)}}" class="active"><i class="fa fa-angle-left"></i> previous</a>
                        </div>
                        <div class="next">
                            <a href="{{route('post.show', $post->id+1)}}">Next <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="section-heading pl-3">
                        <h6>Related</h6>
                    </div>

                    <div class="row">
                        <!-- Single Post -->
                        <div class="col-12 col-md-8">

                            <div class="col mb-50">
                                <div class="comment_area clearfix">
                                    @if(count($post->comments) == 1)
                                        <h5 class="title">1 Comments</h5>
                                    @else
                                        <h5 class="title">{{count($post->comments)}} Comments</h5>
                                    @endif
                                    <ol>
                                        <!-- Single Comment Area -->
                                        @foreach($post->comments as $comment)
                                                <li class="single_comment_area">
                                                    <!-- Comment Content -->
                                                    <div class="comment-content d-flex">
                                                        <!-- Comment Author -->
                                                        <div class="comment-author">
                                                            <img src="img/bg-img/30.jpg" alt="author">
                                                        </div>
                                                        <!-- Comment Meta -->
                                                        <div class="comment-meta">
                                                            <a href="#" class="post-author">{{$comment->name}}</a>
                                                            <a href="#" class="post-date">{{$comment->created_at->diffForHumans()}}</a>
                                                            <p>{{$comment->message}}</p>
                                                        </div>
                                                    </div>
                                                    {{--<ol class="children">
                                                        <li class="single_comment_area">
                                                            <!-- Comment Content -->
                                                            <div class="comment-content d-flex">
                                                                <!-- Comment Author -->
                                                                <div class="comment-author">
                                                                    <img src="img/bg-img/31.jpg" alt="author">
                                                                </div>
                                                                <!-- Comment Meta -->
                                                                <div class="comment-meta">
                                                                    <a href="#" class="post-author">Sandy Doe</a>
                                                                    <a href="#" class="post-date">April 15, 2018</a>
                                                                    <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>--}}
                                                </li>
                                        @endforeach

                                        <!-- Single Comment Area -->
                                        {{--<li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="img/bg-img/32.jpg" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="post-author">Christian Williams</a>
                                                    <a href="#" class="post-date">April 15, 2018</a>
                                                    <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis sapien.</p>
                                                </div>
                                            </div>
                                        </li>--}}
                                    </ol>
                                </div>


                                <div class="post-a-comment-area section-padding-80-0">
                                    <h4>Leave a comment</h4>

                                    <!-- Reply Form -->
                                    <div class="contact-form-area">
                                        <form action="/posts/{{ $post->id }}/comments" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-lg-6">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                                                </div>
                                                <div class="col-12">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button class="btn newspaper-btn mt-30 w-100" type="submit">Submit Comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="single-blog-post style-3 mb-80">
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

                                <div class="col-12 col-md-6">
                                    <div class="single-blog-post style-3 mb-80">
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
                            </div>



                            {{----}}
                        </div>

                        <!-- Single Post -->
                        {{--
                        </div>--}}



                        <div class="col-12 col-md-4">
                            <div class="blog-sidebar-area">

                                <!-- Latest Posts Widget -->
                                <div class="latest-posts-widget mb-50">

                                @foreach($posts as $post)
                                    <!-- Single Featured Post -->
                                        <div class="single-blog-post small-featured-post d-flex">
                                            <div class="post-thumb">
                                                @if($post->id % 2 == 0)
                                                    <a href="#"><img src="{{asset('img/bg-img/31.jpg')}}" alt=""></a>
                                                @else
                                                    <a href="#"><img src="{{asset('img/bg-img/32.jpg')}}" alt=""></a>
                                                @endif

                                            </div>
                                            <div class="post-data">
                                                <a href="#" class="post-catagory">{{$post->category}}</a>
                                                <div class="post-meta">
                                                    <a href="#" class="post-title">
                                                        <h6>{{$post->title}}</h6>
                                                    </a>
                                                    <p class="post-date"><span>{{$post->created_at->diffForHumans()}}</span> | <span>April 14</span></p>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach

                                <!-- Popular News Widget -->
                                <div class="popular-news-widget mb-50">
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
                                <div class="newsletter-widget mb-50">
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

                    <!-- Comment Area Start -->



        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->

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
            <div class="row h-100  align-items-center">
                <div class="col-12 align-items-center">
                    <!-- Copywrite -->
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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
</div>
</body>

</html>
