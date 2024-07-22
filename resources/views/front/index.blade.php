@extends('layout.app') 
@section('content') 

<section class="banner-section">
    <div class="banner-circle">
        <img src="img/bannerbg.png" class="img-fluid" alt="bannercircle">
    </div>
    <div class="container">
        <div class="home-banner">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-search aos" data-aos="fade-up">
                        <p class="explore-text"> <span>Explore top-rated attractions</span></p>
                        <img src="img/arrow-banner.png" class="arrow-img" alt="arrow">
                        <h1>Let us help you <br>
                            <span>Find, Buy</span> & Own Dreams</h1>
                        <p>Countrys most loved and trusted classified ad listing website classified ad.randomised words which don't look even slightly Browse thousand of items near you.</p>
                        <div class="search-box">
                            <form action="listing-grid-sidebar.html" class="d-flex">
                                <div class="search-input line">
                                    <div class="form-set">
                                        <select class="form-control select category-select">
<option value>Choose Category</option>
<option>Computer</option>
<option>Automobile</option>
<option>Car Wash</option>
<option>Cleaning</option>
<option>Electrical</option>
<option>Construction</option>
</select>
                                    </div>
                                </div>
                                <div class="search-input">
                                    <div class="form-set">
                                        <div class="group-img">
                                            <input type="text" class="form-control" placeholder="Choose Location">
                                            <i class="feather-map-pin"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="search-btn">
                                    <button class="btn btn-primary" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-imgs">
                        <img src="{{ asset('front/img/Right-img.png')}}" class="img-fluid" alt="bannerimage">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="img/bannerellipse.png" class="img-fluid banner-elipse" alt="arrow">
    <img src="img/banner-arrow.png" class="img-fluid bannerleftarrow" alt="arrow">
</section>

<section class="category-section">
    <div class="container">
        <div class="section-heading">
            <div class="row align-items-center">
                <div class="col-md-6 aos aos-init aos-animate" data-aos="fade-up">
                    <h2>Our <span class="title-left">Cat</span>egory</h2>
                    <p>Buy and Sell Everything from Used Our Top Category</p>
                </div>
                <div class="col-md-6 text-md-end aos aos-init aos-animate" data-aos="fade-up">
                    <a href="categories.html" class="btn  btn-view">View All</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Automotive</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-1.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Electronics</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-2.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Fashion Style</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-3.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Health Care</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-4.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Job Board</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-5.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Education</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-6.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Real Estate</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-7.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Travel</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-8.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Sports & Game</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-9.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Magazines</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-10.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>Pet & Animal</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-11.svg" alt="icons">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <a href="categories.html" class="category-links">
                    <h5>House Hold</h5>
                    <span>09 Ads</span>
                    <img src="img/icons/category-12.svg" alt="icons">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="featured-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 aos aos-init aos-animate" data-aos="fade-up">
                <div class="section-heading">
                    <h2>Featu<span class="title-right">red</span> Ads</h2>
                    <p>Checkout these latest coo ads from our members</p>
                </div>
            </div>
            <div class="col-md-6 text-md-end aos" data-aos="fade-up">
                <div class="owl-nav mynav2"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel featured-slider grid-view">
                    @foreach ($category as $categoryItem)
                    <div class="card aos" data-aos="fade-up">
                        <div class="blog-widget">
                            <div class="blog-img">
                                <a href="service-details.html">
                                    <img src="{{ asset('home/images/icon/' . $categoryItem->image . '.png') }}" class="img-fluid" alt="blog-img">
                                </a>
                                <div class="fav-item">
                                    <span class="featured-text">Featured</span>
                                    <a href="javascript:void(0)" class="fav-icon">
                                        <i class="feather-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="bloglist-content">
                                <div class="card-body">
                                    <div class="blogfeaturelink">
                                        <div class="grid-author">
                                            <img src="img/profiles/avatar-02.jpg" alt="author">
                                        </div>
                                        <div class="blog-features">
                                            <a href="javascript:void(0)"><span> <i class="fa-regular fa-circle-stop"></i> Education</span></a>
                                        </div>
                                        <div class="blog-author text-end">
                                            <span> <i class="feather-eye"></i>4000 </span>
                                        </div>
                                    </div>
                                    <h6><a href="service-details.html">2017 Gulfsteam Ameri-lite</a></h6>
                                    <div class="blog-location-details">
                                        <div class="location-info">
                                            <i class="feather-map-pin"></i> Los Angeles
                                        </div>
                                        <div class="location-info">
                                            <i class="fa-regular fa-calendar-days"></i> 06 Oct, 2022
                                        </div>
                                    </div>
                                    <div class="amount-details">
                                        <div class="amount">
                                            <span class="validrate">$350</span>
                                            <span>$450</span>
                                        </div>
                                        <div class="ratings">
                                            <span>4.7</span> (50)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li class="category-item">
                        <div class="cate-div">
                            <a href="{{ route('ads-categories', ['id' => $categoryItem->id]) }}">
                                <div class="category-icon"><img  src="{{ asset('home/images/icon/' . $categoryItem->image . '.png') }}"  alt="images" class="img-fluid">
                                </div>
                                <span class="category-title">{{$categoryItem->name}}</span>
                            </a>
                        </div>             
                    </li>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-one-info" class="clearfix home-one">
<div id="banner-two" class="parallax-section" style="background-image: url('/home/images/banner.jpg')">
    <div class="row text-center">
        <div class="col-sm-12 ">
            <div class="banner">
                <h1 class="title">Shop, Save, and Discover </h1>
                <h3>Your Online Marketplace for Migrants in Sri Lanka</h3>
                <div class="banner-form">
                    <form action="{{ route('serach-ad')}}" method="GET">
                        <input type="text" class="form-control" placeholder="Type Your key word" name="keyword">
                        <button type="submit" class="form-control" value="Search">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <section class="section-category"> 
    <div class="container">
    <div class="section category-ad text-center">
        <ul class="category-list">
            @foreach ($category as $categoryItem)
            <li class="category-item">
                <div class="cate-div">
                    <a href="{{ route('ads-categories', ['id' => $categoryItem->id]) }}">
                        <div class="category-icon"><img  src="{{ asset('home/images/icon/' . $categoryItem->image . '.png') }}"  alt="images" class="img-fluid">
                        </div>
                        <span class="category-title">{{$categoryItem->name}}</span>
                    </a>
                </div>             
            </li>
            @endforeach
        </ul>
    </div>
    </div>
    </section>
<section>
    <div class="container">
        <div class="section featureds">
            <div class="row">
                <div class="col-sm-12">
                    <div class="featured-top">
                        <h4>Featured Ads</h4>
                    </div>
                </div>
            </div>
            <div class="featured-slider">
                <div id="featured-slider-two">
                    @foreach ($ads as $item)
                    <div class="featured">
                        <a href="{{ route('ads-details', ['id' => $item->id]) }}"><div class="featured-image" style="background-image:url({{ asset('/uploads/featurd/' . $item->imageLink) }})"></div></a>
                        <div class="ad-info">
                            <h4 class="item-title"><a href="#"><a href="{{ route('ads-details', ['id' => $item->id]) }}">{{$item->name}}</a></h4>
                            <h6 class="item-price">LKR {{$item->price}}</h5>
                            <div class="item-cat">
                                <span><a href="#">{{$item->cname}}>{{$item->subname}}</a></span>
                            </div>
                        </div>
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">{{(explode(" ",$item->updated_at)[0])}} </a></span>
                            </div>
                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top"
                                    title="{{$item->cname}}>{{$item->subname}}"><i class="fa fa-map-marker"></i> </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
</section>
<section>
    <div class="container">
    <div class="section featureds">
        <div class="section trending-ads">
            <div class="section-title tab-manu">
                <h4>Trending Ads</h4>
    
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a class="active" href="#recent-ads" data-toggle="tab">Recent
                            Ads</a></li>
                    <li role="presentation"><a href="#popular" data-toggle="tab">Popular Ads</a></li>
                    <li role="presentation"><a href="#hot-ads" data-toggle="tab">Hot Ads</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="home-tab-ad  tab-pane fade in active show" id="recent-ads">
                    <div class="grid-item">
                                    
                    @foreach ($ads as $item)
                    <div class="ad-item row">
                        <div class="item-image-box col-md-5 col-lg-5">
                            <div class="item-image">
                                <a href="{{ route('ads-details', ['id' => $item->id]) }}"><img src="{{ asset('/uploads/featurd/' . $item->imageLink) }}" alt="Image"
                                        class="img-fluid"></a>
                                <a href="#" class="verified" data-toggle="tooltip" data-placement="left"
                                    title="Verified"></a>
                            </div>
                        </div>
                        <div class="item-info  col-md-7 col-lg-7">
    
                            <div class="ad-info">
                                <h4 class="item-title"><a href="{{ route('ads-details', ['id' => $item->id]) }}">{{$item->name}}</a>
                                </h4>
                                <h3 class="item-price">LKR {{$item->price}}</h3>
                                <div class="item-cat">Short Info
                                    <span><a href="#">{{ $item->cname }}</a></span> >
                                    <span><a href="#">{{ $item->subname }}</a></span>
                                </div>
                            </div>                    
                            
                        </div>
                    </div>
                    @endforeach
                </div> 
                </div>
                <div role="tabpanel" class="home-tab-ad tab-pane fade" id="popular">
                    <div class="grid-item">
                         @foreach ($ads as $item)
                    <div class="ad-item row">
                        <div class="item-image-box col-md-5 col-lg-5">
                            <div class="item-image">
                                <a href="{{ route('ads-details', ['id' => $item->id]) }}"><img src="{{ asset('/uploads/featurd/' . $item->imageLink) }}" alt="Image"
                                        class="img-fluid"></a>
                                <a href="#" class="verified" data-toggle="tooltip" data-placement="left"
                                    title="Verified"></a>
                            </div>
                        </div>
                        <div class="item-info   col-md-7 col-lg-7">
    
                            <div class="ad-info">
                              
                                <h4 class="item-title"><a href="{{ route('ads-details', ['id' => $item->id]) }}">{{$item->name}}</a>
                                </h4>
                                <h3 class="item-price">LKR {{$item->price}}</h3>
                                <div class="item-cat">
                                    <span><a href="#">{{ $item->cname }}</a></span> >
                                    <span><a href="#">{{ $item->subname }}</a></span>
                                </div>
                            </div>                    
                            
                        </div>
                    </div>
                    @endforeach
                </div></div>
                <div role="tabpanel" class="home-tab-ad tab-pane fade" id="hot-ads">
                    <div class="grid-item">
                        @foreach ($ads as $item)
                    <div class="ad-item row">
                        <div class="item-image-box  col-md-5 col-lg-5">
                            <div class="item-image">
                                <a href="{{ route('ads-details', ['id' => $item->id]) }}"><img src="{{ asset('/uploads/featurd/' . $item->imageLink) }}" alt="Image"
                                        class="img-fluid"></a>
                                <a href="#" class="verified" data-toggle="tooltip" data-placement="left"
                                    title="Verified"></a>
                            </div>
                        </div>
                        <div class="item-info  col-md-7 col-lg-7">
                            <div class="ad-info">
                                <h4 class="item-title"><a href="{{ route('ads-details', ['id' => $item->id]) }}">{{$item->name}}</a>
                                </h4>
                                <h3 class="item-price">LKR {{$item->price}}</h3>
                                <div class="item-cat">
                                    <span><a href="#">{{ $item->cname }}</a></span> >
                                    <span><a href="#">{{ $item->subname }}</a></span>
                                </div>
                            </div>                    
                            
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
 </div>
    </div>
</section>
</div>
</section>


        
@endsection 