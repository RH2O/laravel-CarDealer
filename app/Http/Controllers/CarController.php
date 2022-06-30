<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CarController extends Controller
{
    
    public function index(){
       
        $cars = Car::latest()->simplePaginate(6);
        return view('cars.index',['cars'=>$cars]);
    }


    public function  show($id) {

        $details = Car::find($id);

        if(!$details)  return abort(404);
  
        return view('cars.show',[

            'details'=>$details
        ]);
    }


    public function create(){
       
        return view('cars.create');
    }


    public function store(Request $request){
       
         $request->validate([
            'name'=> 'required',
            'model'=> 'required',
            'price'=> 'required',
            'type'=> 'required',
            'mileage'=> 'required',
            'fuel'=> 'required',
            'color'=> 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            
        ]);

        //  $newImageName = time() . $request->name . '.'. $request->images->extension();
        
        //  $request->file('images')->move(public_path('images/cars'),$newImageName);

        
        $imagesArr = [];

        if($request->hasfile('images'))
        {
           foreach($request->file('images') as $key => $image)
           {
                 $newImageName = time() . $request->name .$key.'.'. $image->extension();
                 $image->move(public_path('images/cars'),$newImageName);
                 array_push($imagesArr,$newImageName);

           }
        }

        /// array of paths to string
        $images = implode(',',$imagesArr);

        $request['user_id'] = auth()->id();

        //  if(Car::create($request->all())) return redirect('/');

         if(Car::create(array_merge($request->all(),['image_path'=>$images]))) return redirect('/');
        
          return redirect('/cars/create')->withErrors(['name'=>'somthing went wrong']);

    }



    public function search(){

        $cars = Car::latest()->where([

            ['name','LIKE', '%'.request('name').'%'],
            ['model','like', '%'.request('model').'%'],
            ['type','like', '%'.request('type').'%'],
            ['color','like', '%'.request('color').'%'],
            ])
        ->simplePaginate(6);

        return view('cars.index',['cars'=>$cars]);

    }



    public function manage(){
       
         $user = auth()->id();
         $cars = User::find($user)->cars()->get();

        return view('cars.manage',['cars'=>$cars]);
    }


    
    public function destroy(Car $car){

        if($car->user_id != auth()->id()){

            abort(403,'Unautherized');
        }
      
       $car->delete();

       return redirect()->back();
      
   }



   // the name of var (parameter $car must be same as the name in the route page (cars/{car}))
   
   public function edit(Car $car){
       
       if($car->user_id != auth()->id()){
        abort(403);
       }

       return view('cars.edit',['car'=>$car]);
 }




 public function update(Car $car,Request $request){
       
    $request->validate([
       'name'=> 'required',
       'model'=> 'required',
       'price'=> 'required',
       'type'=> 'required',
       'mileage'=> 'required',
       'fuel'=> 'required',
       'color'=> 'required',
       'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg', 
   ]);

   $imagesArr = [];
   if($request->hasfile('images'))
   {
      $imagesArr = [];
      foreach($request->file('images') as $key => $image)
      {
            $newImageName = time() . $request->name .$key.'.'. $image->extension();
            $image->move(public_path('images/cars'),$newImageName);
            array_push($imagesArr,$newImageName);

      }

       /// array of paths to string
       $images = implode(',',$imagesArr);
       $imagesPath =  ['image_path'=>$images];

   }

 

    if($car->update(array_merge($request->all(),$imagesPath ?? []))) return redirect('/cars/manage');
   
     return redirect('/cars/create')->withErrors(['name'=>'somthing went wrong']);

}

}
