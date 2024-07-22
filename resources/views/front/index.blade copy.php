@extends('layout.app') 
@section('content') 
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
                        <div class="category-icon"><img  src="{{ asset('front/img/icon/' . $categoryItem->image . '.png') }}"  alt="images" class="img-fluid">
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