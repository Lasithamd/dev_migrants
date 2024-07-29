@extends('admin.layout')

@section('content')
<div class="row g-3 mb-3">
    <div class="col-xxl-6 col-xl-12">
      <div class="row g-3">
        <div class="col-12">
          <div class="card bg-transparent-50 overflow-hidden">
            <div class="card-header position-relative">
              <div class="bg-holder d-none d-md-block bg-card z-1" style="background-image:url({{ asset('/images/ecommerce-bg.png') }});background-size:230px;background-position:right bottom;z-index:-1;"></div><!--/.bg-holder-->
              <div class="position-relative z-2">
                <div>
                  <h3 class="text-primary mb-1">Good Afternoon, Jonathan!</h3>
                  <p>Here’s what happening with your store today </p>
                </div>
                <div class="d-flex py-3">
                  <div class="pe-3">
                    <p class="text-600 fs-10 fw-medium">Today's visit </p>
                    <h4 class="text-800 mb-0">14,209</h4>
                  </div>
                  <div class="ps-3">
                    <p class="text-600 fs-10">Today’s total sales </p>
                    <h4 class="text-800 mb-0">$21,349.29 </h4>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
     
            <div class="col">
              <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-0">
                  <div class="table-responsive scrollbar">
                    <table class="table table-dashboard mb-0 table-borderless fs-10 border-200">
                      <thead class="bg-body-tertiary">
                        <tr>
                          <th class="text-900">Advertiest</th>
                          <th class="text-900 text-center"> Category</th>
                          <th class="text-900 text-center">Sub Category</th>
                          <th class="text-900 text-end">Feature</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $item)
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="{{ asset('/uploads/featurd/'.$item->imageLink)}}" width="60" alt="">
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold text-nowrap"><a class="text-900 stretched-link" href="{{ url('admin/ads/show/'.$item->id)}}">{{ $item->name}}</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">{{ $item->description}}</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle pe-x1">
                            {{ $item->cname}}
                          </td>
                          <td class="align-middle text-center fw-semi-bold">{{$item->subname}}</td>
                          <td class="align-middle text-center fw-semi-bold">
                            @if ($item->feature1 != 'N/A') 
                            <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary"> {{$item->feature1}}</small>
                            @endif
                            @if ($item->feature2 != 'N/A') 
                            <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary"> {{$item->feature2}}</small>
                            @endif
                            @if ($item->feature3 != 'N/A') 
                            <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary"> {{$item->feature3}}</small>

                          @endif
                          @if ($item->feature4 != 'N/A') 
                          <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary"> {{$item->feature4}}</small>

                        @endif
                        @if ($item->feature5 != 'N/A') 
                        <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary"> {{$item->feature5}}</small>

                      @endif
                      @if ($item->feature6 != 'N/A') 
                      <small class="badge fw-semi-bold rounded-pill status badge-subtle-primary"> {{$item->feature6}}</small>

                    @endif
                            </td>
                          
                        </tr>
                        
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
               
              </div>
            </div>
      

   
@endsection
