@extends('layouts.layout')


@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    
<div class="container">
    <div class="contact-form">
        <form action="/cars/{{$car->id}}" method="POST" enctype="multipart/form-data" id="contact">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Name:</label>
                         <input type="text" name="name" id="" value="{{$car->name}}">
                         @error('name')
                         <span class=" text-danger ">{{$message}}</span>
                          @enderror
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Vehicle Type:</label>
             
                        <input type="text" name="type" id="" value="{{$car->type}}">
                        @error('type')
                        <span class=" text-danger ">{{$message}}</span>
                         @enderror
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Mileage:</label>
                        <input type="text" name="mileage" id="" value="{{$car->mileage}}">
                        @error('mileage')
                        <span class=" text-danger ">{{$message}}</span>
                         @enderror
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Model:</label>
             
                        <input type="text" name="model" id="" value="{{$car->model}}">
                        @error('model')
                        <span class=" text-danger ">{{$message}}</span>
                         @enderror
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Price:</label>
             
                        <input type="text" name="price" id="" value="{{$car->price}}">
                        @error('price')
                        <span class=" text-danger ">{{$message}}</span>
                         @enderror
                    </div>
                </div>
        
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Color:</label>
             
                        <input type="text" name="color" id="" value="{{$car->color}}">
                        @error('color')
                        <span class=" text-danger ">{{$message}}</span>
                         @enderror
                    </div>
                </div>
        
        
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Fuel:</label>
             
                        <input type="text" name="fuel" id="" value="{{$car->fuel}}">
                        @error('fuel')
                        <span class=" text-danger ">{{$message}}</span>
                         @enderror
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Images:</label>
             
                        <input type="file" name="images[]" multiple id="">
                        @error('images')
                        <span class=" text-danger ">{{$message}}</span>
                         @enderror
                    </div>
                </div>
        
            </div>
            
            <div class="col-sm-4 offset-sm-4">
              <div class="main-button text-center">
                  <button class="px-5" type="submit">Update</button>
              </div>
            </div>
            <br>
            <br>
        </form>
    </div>
</div>


@endsection
