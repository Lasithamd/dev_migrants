@extends('layout.app')
@section('content')
    <section id="main" class="clearfix ad-details-page">
        <div class="container">
            <div class="breadcrumb-section">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Ad Post</li>
                </ol>
                <h2 class="title">{{ $subcategories->name }}</h2>
            </div>
            <div class="adpost-details">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="{{ route('resgister-third') }}">
                            @csrf
                            <fieldset>
                                <div class="hidden">
                                    <input type="text" name="sub_category_id" id=""
                                        value="{{ $subcategories->id }}" hidden>
                                    <input type="text" name="category_id" id="" value="{{ $categories->id }}"
                                        hidden>
                                    <input type="text" name="city_id" value="{{ $location->id }}" hidden>
                                </div>
                                <div class="section postdetails">
                                    <div class="form-group selected-product">
                                        <ul class="select-category list-inline">
                                            <li>
                                                <a href="ad-post.html">
                                                    <span class="select">
                                                        <img src="{{ asset('home/images/icon/' . $categories->image . '.png') }}"
                                                            alt="Images" class="img-fluid">
                                                    </span>
                                                    {{ $categories->name }}
                                                </a>
                                            </li>
                                            <li class="active">
                                                <input type="text" hidden value="{{$subcategories->name }}" name="sub-name">
                                                <a href="#">{{ $subcategories->name }}</a>
                                            </li>
                                        </ul>
                                        <a class="edit" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            {{ $location->name_en }}</span></a>
                                    </div>
                                    <fieldset class="border p-2">
                                        <legend class="w-auto">Basic information:</legend>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Condition <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-control" type="radio" name="condition" value="1"
                                                        id="new">
                                                    <label class="form-check-label" for="new">New</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-control" type="radio" name="condition" value="0"
                                                        id="used">
                                                    <label class="form-check-label" for="used">Used</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class=" col-form-label">Price </label><input type="number"
                                                    class="form-control" name="price" placeholder="Current mileage">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            @if($features->feature1)
                                            <div class="col-sm-4">
                                                <label class=" col-form-label">{{$features->feature1}} <span
                                                        class="text-danger">*</span></label>
                                                @if ($featData['features1'])
                                                <select class="form-control" name="feature1" id="feature1">
                                                    @foreach ( $featData['features1'] as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach                                                   
                                                </select>
                                                @else
                                                <input type="text" class="form-control" name="feature1" >
                                                @endif
                                               
                                            </div>
                                            @endif
                                            @if($features->feature2)
                                            <div class="col-sm-4">
                                                <label class="col-form-label">{{ $features->feature2}}</label>
                                                @if ($featData['features2'])
                                                <select class="form-control" name="feature2" id="feature2">
                                                    @foreach ( $featData['features2'] as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach                                                   
                                                </select>
                                                @else
                                                <input type="text" class="form-control" name="feature2" >
                                                @endif
                                            </div>
                                            @endif
                                            @if($features->feature3)
                                            <div class="col-sm-4">
                                                <label class=" col-form-label">{{$features->feature3}} <span
                                                    class="text-danger">*</span></label>
                                                @if ($featData['features3'])
                                                <select class="form-control" name="feature3" id="feature3">
                                                    @foreach ( $featData['features3'] as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach                                                   
                                                </select>
                                                @else
                                                <input type="text" class="form-control" name="feature3" >
                                                @endif
                                            </div>
                                            @endif
                                        </div>
                                        <div class="form-group row">
                                            @if(($features->feature4) && ($features->feature4 != 'N/A'))
                                            <div class="col-sm-4">
                                                <label class=" col-form-label">{{$features->feature4}} <span
                                                    class="text-danger">*</span></label>
                                                @if ($featData['features4'])
                                                <select class="form-control" name="feature4" id="feature4">
                                                    @foreach ( $featData['features4'] as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach                                                   
                                                </select>
                                                @else
                                                <input type="text" class="form-control" name="feature4" id="feature4">
                                                @endif
                                            </div>
                                            @endif
                                            @if(($features->feature5) && ($features->feature5 != 'N/A'))
                                            <div class="col-sm-4">
                                                <label class=" col-form-label">{{$features->feature5}} <span
                                                    class="text-danger">*</span></label>
                                                @if ($featData['features5'])
                                                <select class="form-control" name="feature5" id="feature5">
                                                    @foreach ( $featData['features5'] as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach                                                   
                                                </select>
                                                @else
                                                <input type="text" class="form-control" name="feature5" id='feature5' >
                                                @endif
                                            </div>
                                            @endif
                                            @if(($features->feature6) && ($features->feature6 != 'N/A'))

                                            <div class="col-sm-4">
                                                <label class=" col-form-label">{{$features->feature6}} <span
                                                    class="text-danger">*</span></label>
                                                @if ($featData['features6'])
                                                <select class="form-control" name="feature6" id="feature6">
                                                    @foreach ( $featData['features6'] as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach                                                   
                                                </select>
                                                @else
                                                <input type="text" class="form-control" name="feature6" id="feature6" >
                                                @endif
                                            </div>
                                            @endif
                                        </div>
                                       
                                      
                                          
                                    </fieldset>
                                    <fieldset class="border p-2">
                                        <legend class="w-auto">Generate content</legend>
                                        <div class="col-sm-10">
                                            <div class="form-group row">
                                                <label class=" col-form-label">Title <span
                                                        class="text-danger">*</span></label> <input type="text"
                                                    class="form-control" id="adsName" name="name"
                                                    placeholder="Title for your Ad">
                                            </div>
                                            <div class="ai-conent form-group  ">
                                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                                <label class="col-sm-12 col-form-label ">Do you want to generate the title content using AI?</label>
                                                <button class="generate-content col-sm-2 btn btn-primary" type="button" value='title'>Generate</button>
                                              
                                              </div>
                                            <div class="form-group row">
                                                <label class="col-form-label">Description</label>
                                                <textarea name="description" class="form-control" id="description" placeholder="Description"></textarea>
                                            </div>
                                            <div class="ai-conent form-group  ">
                                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                                <label class="col-sm-12 col-form-label ">Do you want to generate the description  content using AI?</label>
                                                <button class="generate-content col-sm-2 btn btn-primary" type="button" value="description" >Generate</button>
                                              
                                              </div>
                                        </div>
                                        <div class="col-sm-6 "> </div>
                                
                            </fieldset>
                            <div class="row section agreement">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                    </div>
                    </fieldset>
                    
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="section quick-rules">
                        <h4>Quick rules</h4>
                        <p class="lead">Posting an ad on <a href="#">Migrants Sale.com</a> is free! However,
                            all ads
                            must follow our rules:</p>
                        <ul>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                            <li>Do not put your email or phone numbers in the title or description.</li>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not post ads containing multiple items unless it's a package deal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
