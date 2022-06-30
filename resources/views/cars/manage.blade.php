@extends('layouts.layout')


@section('content')

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <br> <br>
    <div class="container">


        <br>
        <br>
        <br>
        <br>
       


        <h3>Manage Posts</h3>

        <br>
        <br>

        <div class="row">

            @unless ($cars->isEmpty())
                
           
            @foreach ($cars as $car)

            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        @php
                        $images = explode(',',$car->image_path);
                        @endphp
                        <img src="/images/cars/{{$images[0]}}" width="300px" height="220" alt="">
                        
                    </div>
                    <div class="down-content">
                        <span>
                            <sup>$</sup>{{$car['price']}} </span>

                        <h4>{{$car['name']}}</h4>

                        <p>
                            <i class="fa fa-dashboard"></i> {{$car['mileage']}} &nbsp;&nbsp;&nbsp;
                            <i class=""></i> | &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cube"></i> {{$car['model']}} &nbsp;&nbsp;&nbsp;
                        </p>

                        <ul style="list-style:none; position:inline-block; color: red;">

                            <form action="/cars/{{$car->id}}" method="POST" id="del">
                                @csrf
                                @method('DELETE')
                                <a href="#" onclick="document.getElementById('del').submit();">Delete </a>
                            </form>
                            <a> | </a>
                            <form action="/cars/edit/{{$car->id}}" method="GET" id="edit">
                                @csrf
                                <a href="#" onclick="document.getElementById('edit').submit();">Edit</a>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
                
            @endforeach
            
            @else
                <p>No Cars posts yet</p>
            @endunless
        </div>


        <br>



    </div>



</section>
<!-- ***** Fleet Ends ***** -->

@endsection
