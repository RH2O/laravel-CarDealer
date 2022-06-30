@extends('layouts.layout')

@section('content')


<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(/images/banner-image-1-1920x500.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Our <em>Cars</em></h2>
                    <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <br>
        <br>
        <div class="contact-form">
            <form action="/cars/search" method="GET" id="contact">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Name</label>
                 
                             <input type="text" name="name" id="" placeholder="Name" value="{{request('name')}}">
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Vehicle Type:</label>
                 
                            <input type="text" name="type" id="" placeholder="type" value="{{request('type')}}">
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Color:</label>
                            <input type="text" name="color" id="" placeholder="Color" value="{{request('color')}}">
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label>Model:</label>
                 
                            <input type="text" name="model" id="" placeholder="Model" value="{{request('model')}}">
                        </div>
                    </div>
            
                </div>
                
                <div class="col-sm-4 offset-sm-4">
                  <div class="main-button text-center">
                      <button class="px-2 py-0" type="submit"><a>Search</a></button>
                  </div>
                </div>
                <br>
                <br>
            </form>
        </div>

        <div class="row">
           @foreach ($cars as $car)
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            @php
                            $images = explode(',',$car->image_path);
                            @endphp
                            <img src="/images/cars/{{$images[0]}}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup> </del> &nbsp; <sup>$</sup>{{$car['price']}}
                            </span>

                            <h4>{{$car->name}}</h4>

                            <p>
                                <i class="fa fa-dashboard"></i> {{$car->mileage}} &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> {{$car->model}} &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> {{$car->price}} &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">
                                <li><a href="/cars/{{$car->id}}">+ View Car</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
           @endforeach
        </div>

        <br>


        {{$cars->links()}}
            
        {{-- <nav>
          <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav> --}}

    </div>
</section>
<!-- ***** Fleet Ends ***** -->

    
@endsection