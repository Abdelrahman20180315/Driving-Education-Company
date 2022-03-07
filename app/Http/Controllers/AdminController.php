<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\city;
use App\Models\Contact;
use App\Models\station;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function showusers(){

        $data = User::all();
        return view('admin.Allusers',compact('data'));
    }

    
    public function ShowContactMessages(){

        $data = Contact::all();
        return view('admin.ShowContactMessages',compact('data'));
    }

    public function AddCitystation(){
        $city = city::all();
        return view('admin.AddCitystation', compact('city'));
    }

    public function SaveCitystation(Request $request){

        /*
        Do these processes here 
            take object from city and station
            save data city in city 
            save data station in station
            Don't forget to save city_id in station

         */

    $city = new city();
    $station = new station();
    
    
    
       
        
    
    
    $station->station = $request->station;
    $station->city = $request->city;
    
    
    $station->save();
   
    return redirect()->back();


        
    }

    public function AddCity()
    {
        return view('admin.AddCity');
    }

    public function SaveCity(Request $request)
    {
        $city = new city();
    
    
    
    
        $city->city = $request->city;
        
    
    
    
   
    
    
    $city->save();
   
    return redirect()->back();
    }
    public function viewalltrainers()
    {
        $trainer = Trainer::all();
        return view('admin.ShowAllTrainers',compact('trainer'));
    }
public function viewbooks()
{
    $books = book::all();

    return view('admin.ShowAllbooks',compact('books'));
}
public function delettrainer($id)
{
    $trainer = Trainer::find($id);
    $trainer->delete();
    return redirect()->back();
}
public function viewallcitystation()
{
    $city = Station::all();
    return view('admin.ShowAllCity&Station', compact('city'));
}
public function deletstation($id)
{
    $city = station::find($id);
    $city->delete();
    return redirect()->back();
}
    
}


