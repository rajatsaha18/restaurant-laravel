@extends('website.layouts.master')

@section('content')
Blog-Details
@endsection

@section('content')

<div class="breadcumb-wrapper " data-bg-src="">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blog Details</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-restaurant-shop.html">Home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</div><!--==============================
Blog Area
==============================-->
<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="th-blog blog-single">
                    <div class="blog-img">
                        <img src="{{$blog->image}}" alt="Blog Image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html">{{$blog->date}}</a>
                            <a href="blog.html">{{$blog->name}}</a>
                            <a href="blog-details.html">03 Comments</a>
                        </div>
                        <h2 class="blog-title">The Fresh Ingredients That Define Our Dishes</h2>
                        <p>Enjoy your quick meal in a casual and friendly setting. Whether you're grabbing a bite on your lunch break or stopping by for a snack, our welcoming atmosphere makes every visit enjoyable. We believe that great food shouldn't break the bank. That's why we offer affordable options. Whether it's a romantic date, a family celebration, or a corporate event, our versatile spaces are perfect for all occasions. Let us turn your special moments into extraordinary memories.</p>
                        <p>Elevate your dining experience with our extensive selection of fine wines and expertly crafted cocktails. Each sip complements the richness of our dishes, creating a symphony of taste.</p>
                        <blockquote>
                            <p>We believe that great food shouldn't break the bank. That's why we offer affordable options without compromising on taste. makes every visit enjoyable.</p>
                            <cite>Michel Clarck</cite>
                        </blockquote>
                        <p>A firm believer in the transformative power of food, Chef [Chef's Name] blends traditional techniques with innovative flair. Every dish that graces your table is a testament to a culinary philosophy rooted in fresh, locally sourced ingredients and a dedication to flavor perfection.</p>
                        <div class="row mt-35">
                            <div class="col-md-6 mb-30">
                                <img class="w-100" src="{{asset('public/website/assets/img/blog/blog_inner_1.jpg')}}" alt="Blog Image">
                            </div>
                            <div class="col-md-6 mb-30">
                                <img class="w-100" src="{{asset('public/website/assets/img/blog/blog_inner_2.jpg')}}" alt="Blog Image">
                            </div>
                        </div>
                        <p class="mb-n2">Beyond the kitchen, Chef [Chef's Name] is a culinary ambassador, collaborating with local farmers and artisans to create a dining experience that celebrates community and sustainability.</p>

                        <div class="share-links clearfix ">
                            <div class="row justify-content-between">
                                <div class="col-sm-auto">
                                    <span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        <a href="blog.html">Business</a>
                                        <a href="blog.html">Conference</a>
                                    </div>
                                </div>
                                <div class="col-sm-auto text-xl-end">
                                    <span class="share-links-title">Share:</span>
                                    <div class="th-social">
                                        <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </div><!-- End Social Share -->
                                </div><!-- Share Links Area end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="th-comments-wrap ">
                    <h2 class="blog-inner-title h4"><i class="far fa-comments"></i> Comments (03)</h2>
                    <ul class="comment-list">
                        <li class="th-comment-item">
                            <div class="th-post-comment">
                                <div class="comment-avater">
                                    <img src="{{asset('public/website/assets/img/blog/comment-author-1.jpg')}}" alt="Comment Author">
                                </div>
                                <div class="comment-content">
                                    <span class="commented-on"><i class="fal fa-calendar-days"></i>14 March, 2023</span>
                                    <h3 class="name">Adam Jhon</h3>
                                    <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug and play markets.</p>
                                    <div class="reply_and_edit">
                                        <a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="children">
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="{{asset('public/website/assets/img/blog/comment-author-2.jpg')}}" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <span class="commented-on"><i class="fal fa-calendar-days"></i>15 March, 2023</span>
                                            <h3 class="name">Jusctin Dacon</h3>
                                            <p class="text">Competently provide access to fully researched methods of empowerment
                                                without sticky models.</p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="th-comment-item">
                            <div class="th-post-comment">
                                <div class="comment-avater">
                                    <img src="{{asset('public/website/assets/img/blog/comment-author-3.jpg')}}" alt="Comment Author">
                                </div>
                                <div class="comment-content">
                                    <span class="commented-on"><i class="fal fa-calendar-days"></i>16 March, 2023</span>
                                    <h3 class="name">Jacklin July</h3>
                                    <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug and play markets.</p>
                                    <div class="reply_and_edit">
                                        <a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- Comment end --> <!-- Comment Form -->
                <div class="th-comment-form ">
                    <div class="form-title">
                        <h3 class="blog-inner-title h4 mb-2"><i class="fa-solid fa-reply"></i> Leave a Comment</h3>
                        <p class="form-text">Your email address will not be published. Required fields are marked *</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" placeholder="Your Name*" class="form-control">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" placeholder="Your Email*" class="form-control">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" placeholder="Website" class="form-control">
                            <i class="far fa-globe"></i>
                        </div>
                        <div class="col-12 form-group">
                            <textarea placeholder="Write a Comment*" class="form-control"></textarea>
                            <i class="far fa-pencil"></i>
                        </div>
                        <div class="col-12 form-group mb-0">
                            <button class="th-btn">Post Comment</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    <div class="widget widget_search  ">
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="blog.html">Breakfast</a>
                                <span>(8)</span>
                            </li>
                            <li>
                                <a href="blog.html">Dinner</a>
                                <span>(10)</span>
                            </li>
                            <li>
                                <a href="blog.html">Restaurant</a>
                                <span>(12)</span>
                            </li>
                            <li>
                                <a href="blog.html">Fast Foods</a>
                                <span>(6)</span>
                            </li>
                            <li>
                                <a href="blog.html">Lunch</a>
                                <span>(8)</span>
                            </li>
                            <li>
                                <a href="blog.html">Burger</a>
                                <span>(11)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget  ">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{asset('public/website/assets/img/blog/recent-post-1-1.jpg')}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Unveiling the Magic Highlights from Our Event</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>11 Jan, 2024</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{asset('public/website/assets/img/blog/recent-post-1-2.jpg')}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Enigma Unveiled Capture Magic in Our Moments</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>12 Jan, 2024</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{asset('public/website/assets/img/blog/recent-post-1-3.jpg')}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Revelation Rapture Unveiling Joy in Our Event</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>13 Jan, 2024</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_tag_cloud  ">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="blog.html">Breakfast</a>
                            <a href="blog.html">Lunch</a>
                            <a href="blog.html">Restaurant</a>
                            <a href="blog.html">Burger</a>
                            <a href="blog.html">Dinner</a>
                            <a href="blog.html">Chicken</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection