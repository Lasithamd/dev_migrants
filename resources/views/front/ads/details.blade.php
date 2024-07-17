@extends('layout.app')
@section('content')
    <section id="main" class="clearfix details-page">
        <div class="container">
            <div class="breadcrumb-section">

                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Electronics & Gedget</a></li>
                    <li>Mobile Phone</li>
                </ol>
                <h2 class="title">Mobile Phones</h2>
            </div>
            <div class="section banner">

                <div class="banner-form banner-form-full">
                    <form action="#">

                        <div class="dropdown category-dropdown">
                            <a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu category-change">
                                <li><a href="#">Fashion & Beauty</a></li>
                                <li><a href="#">Cars & Vehicles</a></li>
                                <li><a href="#">Electronics & Gedgets</a></li>
                                <li><a href="#">Real Estate</a></li>
                                <li><a href="#">Sports & Games</a></li>
                            </ul>
                        </div>

                        <div class="dropdown category-dropdown language-dropdown ">
                            <a data-toggle="dropdown" href="#"><span class="change-text">United Kingdom</span> <i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu  language-change">
                                <li><a href="#">United Kingdom</a></li>
                                <li><a href="#">United States</a></li>
                                <li><a href="#">China</a></li>
                                <li><a href="#">Russia</a></li>
                            </ul>
                        </div>
                        <input type="text" class="form-control" placeholder="Type Your key word">
                        <button type="submit" class="form-control" value="Search">Search</button>
                    </form>
                </div>
            </div>
            <div class="container section slider ">
                <div class="row">
                    <div class="col-8"> 
                        <div id="product-carousel" class="carousel slide" data-ride="carousel">
                        
                        <div class="carousel-inner" role="listbox">
                            <?php $count = 0; ?>
                            @foreach ($image as $img)
                                <div class="carousel-item {{ $count == 0 ? 'active' : '' }}">
                                    <div class="carousel-image">
                                        <img src="{{ asset('/uploads/gallery/' . $img->link) }}" alt="Featured Image" class="img-fluid">
                                    </div>
                                </div>
                                <?php $count++; ?>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#product-carousel" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#product-carousel" role="button" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                        <ol class="ps-none carousel-indicators">
                            <?php $count = 0; ?>
                            @foreach ($image as $img)
                                <li data-target="#product-carousel" data-slide-to="{{ $count }}" class="{{ $count == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('/uploads/gallery/' . $img->link) }}" alt="Carousel Thumb" class="img-fluid">
                                </li>
                                <?php $count++; ?>
                            @endforeach
                        </ol>
                    </div>
                   
                </div>
                    <div class="col-4"><div class="slider-text">
                        <h3 class="title">{{ $ad->name }}</h3>
                        <h5>LKR {{ $ad->price }}</h5>
                        <span class="icon"><i class="fa fa-clock"></i><a href="#">{{ $ad->created_at }}</a></span>
                        <span class="icon"><i class="fa fa-map-marker-alt"></i><a href="#"></a></span>
                        <div class="short-info">
                            <p><strong>Condition: </strong><a href="#">New</a></p>
                            <p><strong>Brand: </strong><a href="#">Apple</a></p>
                            <p><strong>Features: </strong>
                                <a href="#">Camera</a>, 
                                <a href="#">Dual SIM</a>, 
                                <a href="#">GSM</a>, 
                                <a href="#">Touch screen</a>
                            </p>
                            <p><strong>Model: </strong><a href="#">iPhone 6</a></p>
                        </div>
                        <div class="contact-with">
                            <h4>Contact with</h4>
                            <button class="btn btn-danger show-number">
                                <i class="fa fa-phone-square"></i>
                                <span class="hide-text">Click to show phone number</span>
                                <span class="hide-number">012-1234567890</span>
                            </button>
                        </div>
                        <div class="social-links">
                            <h4>Share this ad</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
                            </ul>
                        </div>
                    </div></div>
                  </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="description-ct">
                        <fieldset>
                            <legend>Description:</legend>
                            <p>{{$ad->description}}</p><br>
                           </fieldset>
                        
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <h6>Comments</h6>
                        <div id="comment-section">
                          <!-- Previous comments -->
                          <div class="card mb-3" id="comment-card">
                            @foreach($comment as $com)
                            <div class="card-body" >
                                <div class="row">
                                    <div class="vr col-md-2">
                                        <div class="avatar">C</div>
                                       </div>
                                       <div class="col-md-10">
                                        <p class="user card-text"> John Doe  >{{$com->created_at }} </p>
                                        <p class="card-text">{{$com->comment}}</p>
                                      
                                       </div>
                                </div>
                            
                               
                              </div>
                              @endforeach
                          </div>
                          <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Post a Comment</h5>
                                    <form method="POST">
                                     @csrf
                                 <input type="text" hidden value="{{ $ad->id }}" name="ads_id">
                                      <div class="form-group">
                                        <textarea class="form-control" name="comment" id="comment-input" rows="3" placeholder="Write your comment here"></textarea>
                                      </div>
                                      <button  class="btn btn-primary" id="comment-button">Post</button>
                                      <p id="message-alert"></p>
                                    </form>
                                  </div>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="description-info">
                <div class="row">

                   

                    <div class="col-md-4">
                        
                    </div>
                </div>
            </div>
            <div class="recommended-info">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section recommended-ads">
                            <div class="featured-top">
                                <h4>Recommended Ads for You</h4>
                            </div>
                            @foreach($adsData as $item)
                            <div class="ad-item row">

                                <div class="item-image-box col-lg-4">
                                    <div class="item-image">
                                       
                                            @foreach ($featured as $feat)
                                            @if(($item->id) == $feat->ads_id)
                                            <a href="{{url('/ads-details/'. $feat->ad_id)}}">
                                           
                                            <img src="{{ asset('/uploads/featurd/' . $feat->link) }}" alt="Image"
                                                class="img-fluid"></a>
                                              @endif
                                                @endforeach
                                    </div>
                                </div>
                                <div class="item-info col-lg-8">

                                    <div class="ad-info">
                                        <h3 class="item-price">LKR {{ $item->price }}</h3>
                                        <h4 class="item-title"><a href="#">{{$item->name}}</a></h4>
                                        <div class="item-cat">
                                            <span><a href="#">Electronics & Gedgets</a></span> /
                                            <span><a href="#">Tv & Video</a></span>
                                        </div>
                                    </div>

                                    <div class="ad-meta">
                                        <div class="meta-content">
                                            <span class="dated"><a href="#">{{ $item->updated_at }} </a></span>
                                            <a href="#" class="tag"><i class="fa fa-tags"></i> New</a>
                                        </div>

                                        <div class="user-option pull-right">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                            <a class="online" href="#" data-toggle="tooltip" data-placement="top"
                                                title="Individual"><i class="fa fa-user"></i> </a>
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
    </section>

    <section id="something-sell" class="clearfix parallax-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="title">Do you have something-sell?</h2>
                    <h4>Post your ad for free on Migrants Sale.com</h4>
                    <a href="ad-post.html" class="btn btn-primary">Post Your Ad</a>
                </div>
            </div>
        </div>
    </section>


    
@endsection
