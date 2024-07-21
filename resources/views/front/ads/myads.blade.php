@extends('layout.app')@section('content')
<section id="main" class="clearfix myads-page">
    <div class="container">
        <div class="breadcrumb-section">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Ad Post</li>
            </ol>
            <h2 class="title">My Ads</h2>
        </div>
        <div class="ad-profile section">
            <div class="user-profile">
                <div class="user">
                    <h2><span class="avator"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                      </svg></span><a href="#"> {{ Auth::user()->name }}</h2>                </div>
                <div class="favorites-user">
                    <div class="my-ads"> <a href="my-ads.html">{{ $count['ads']}}<small>My ADS</small></a> </div>
                    <div class="favorites"> <a href="#">{{ $count['comment']}}<small>Comments</small></a> </div>
                </div>
            </div>
            <ul class="user-menu">
                <li class="active"><a href="{{route('ads.myads')}}">My ads</a></li>
                <li><a href="{{route('profile')}}">Profile</a></li>
                <li><a href="{{route('comment')}}">Comments</a></li>
            </ul>
        </div>
        <div class="ads-info">
            <div class="row">
                <div class="col-md-8">
                    <div class="my-ads section">
                        <h2>My ads</h2>
                        @foreach ($adsData as $item)
                            <div class="ad-item row">
                                <div class="item-image-box col-lg-4">
                                    <div class="item-image">
                                        @foreach ($image as $img)
                                            @if ($item->id == $img->ads_id)
                                                <a href=""><img src="{{ asset('/uploads/featurd/' . $img->link) }}"
                                                        alt="Image" class="img-fluid">{{ $img->name }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="item-info col-lg-8">
                                    <div class="ad-info">
                                        <h3 class="item-price">LKR {{ $item->price }}</h3>
                                        <h4 class="item-title"><a href="#">{{ $item->name }}</a> </h4>
                                        <div class="item-cat"> <span><a href="#">{{ $item->cname }}</a></span> /
                                            <span><a href="#">{{ $item->subname }}</a></span> </div>
                                    </div>
                                    <div class="ad-meta">
                                        <div class="meta-content"> <span class="dated">Posted On: <a
                                                    href="#">{{ $item->created_at }} </a></span> <span
                                                class="visitors">Visitors: 221</span> </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="recommended-cta">
                        <div class="cta">
                            <div class="single-cta">
                                <div class="cta-icon icon-secure"> <img src="images/icon/13.png" alt="Icon"
                                        class="img-fluid"> </div>
                                <h4>Secure Trading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                            <div class="single-cta">
                                <div class="cta-icon icon-support"> <img src="images/icon/14.png" alt="Icon"
                                        class="img-fluid"> </div>
                                <h4>24/7 Support</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                            <div class="single-cta">
                                <div class="cta-icon icon-trading"> <img src="images/icon/15.png" alt="Icon"
                                        class="img-fluid"> </div>
                                <h4>Easy Trading</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
