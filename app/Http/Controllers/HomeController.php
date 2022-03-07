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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    //

    public function redirect()
{
    $usertype = Auth::user()->usertype ;
    if($usertype == "1")
    {
        return view('admin.adminhome');
    }
    else
    {
        return view('welcome');
    }
}

public function home()
{

    if(Auth::id())
    {
        return redirect('/redirect');
    }
    else{
        return view('welcome');
    }


}
public function trainers()
{
    $city = city::all();
    $station = station::all();
/*$trainers = DB::table('trainers')
    ->join('users','trainers.user_id','=','users.id')->select('*')
    ->get();*/
    $trainers = Trainer::all();
    $fcity = null;
    $fpayway = null;
    return view('trainers' , compact('city','station','trainers','fcity','fpayway'));
}

public function contact(){

    return view('contact_us');
}

public function about(){

    return view('about');
}

public function SendMessage(Request $request){

    $data = new Contact();

    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->message = $request->message;
    $data->save();
    return redirect()->back();
}
public function joinastrainer_1()
{
    return view('joinastrainer_1');
}
public function joinastrainer_2()
{
    return view('joinastrainer_2');
}
public function joinastrainer_3()
{
    return view('joinastrainer_3');
}

public function joinastrainer_4()
{
    $city = city::all();
    
    $station = station::all();
    return view('joinastrainer_4',compact('city','station'));
}
public function saveuserastrainer(Request $request)
{
    $trainer = new Trainer();
   

    $user_id = Auth::id();
    $user_gender = Auth::user()->gender;
    $user_type = User::find($user_id);
        $image_passwpor = $request->photo_passwpor;
        $image_passport_back = $request->photo_passport_back;
        $image_car_form = $request->car_form;
        $image_car_insurance = $request->car_insurance;
        $image_license = $request->license;

        $image_passwporname =time().'.'.$image_passwpor->getClientOriginalExtension();
        $image_passport_backname =time().'.'.$image_passport_back->getClientOriginalExtension();
        $image_car_formname =time().'.'.$image_car_form->getClientOriginalExtension();
        $image_car_insurancename =time().'.'.$image_car_insurance->getClientOriginalExtension();
        $image_licensename =time().'.'.$image_license->getClientOriginalExtension();
        
        
        $image_passwpor->move('image_passwporFolder',$image_passwporname);
        $image_passport_back->move('image_passport_backFolder',$image_passport_backname);
        $image_car_form->move('image_car_formFolder',$image_car_formname);
        $image_car_insurance->move('image_car_insuranceFolder',$image_car_insurancename);
        $image_license->move('image_licenseFolder',$image_licensename);
       
        
        
        $trainer->name = $request->name;
        $trainer->email = $request->email;
        $trainer->phone = $request->phone;
        $trainer->national_image = $image_passwporname;
        $trainer->national_image_back = $image_passport_backname;
        $trainer->Car_form_image = $image_car_formname;
        $trainer->car_insurance_image = $image_car_insurancename;
        $trainer->driving_license_image = $image_licensename;
        $trainer->user_id = $user_id;
        $trainer->payway = $request->payway;
        $trainer->city = $request->city;
        $trainer->station = $request->station;
        $trainer->status = $request->status;
        $trainer->gender = $user_gender;
        $trainer->save();
        $user_type->usertype = $request->usertype;
        $user_type->save();
        return redirect()->back();
}

public function showtrainerbyuser(Request $request)
{
   /* $fcity = $request->filtercity ;
    $payway = $request->filterpayway;
    $trainers = Trainer::where('station',$fcity )
            ->orwhere('payway',$payway)->get();*/
    $city = city::all();
    $station = station::all();
    $fcity = $request->filtercity;
    $fpayway = $request->filterpayway;
    if($fcity == 'اختر مدينتك' || $fpayway=='اختر طريقة الدفع')
    {
        $trainers = Trainer::where('station',$fcity )->orwhere('payway',$fpayway)->get();

    }
    elseif($fcity == 'اختر مدينتك' && $fpayway=='اختر طريقة الدفع')
    {
        return Redirect::back()->withErrors(['msg' => 'يجب اختيار طريقه الدفع والمدينه']);
    }
    else
    {
        $trainers = Trainer::where('station',$fcity )->where('payway',$fpayway)->get();
    }
        return view('trainers',compact('trainers','city','station','fpayway','fcity'));
}
public function mytrainerpage()
{
    $user_id = Auth::user()->id;
    $trainer = Trainer::where('user_id',$user_id)->get();
    $books = book::where('trainer_id',$user_id)->get();
    // $books = book::select("*")->where('trainer_id',$trainer->id)->get();
    return view('mytrainerpage',compact('books'));
}



public function book_a_course(Request $request , $id)
{
    $user_id = Auth::user()->id;
    $user_phone = Auth::user()->phonenumber;
    $user = User::find($user_id);
    $trainer = Trainer::find($id);
    $is_trainer_exist = book::select("*")->where('trainer_email',$trainer->email)->exists();
   // $userTrainerId = User::where('id',$trainer->user_id)->select("*")->get();

    

    $is_user_exist = book::select("*")->where('user_email',$user->email)->exists();
    if($is_trainer_exist && $is_user_exist )
    {
        return redirect('user_course')->with('message', '!!تم الحجز مسبقا');
    
    }
    else
    {
        $book = new book;
        $book->user_id = $user_id;
        $book->trainer_id = $trainer->user_id;
        $book->user_name = $user->name;
        $book->trainer_name = $trainer->name;
        $book->user_email = $user->email;
        $book->trainer_email = $trainer->email;
        $book->user_phone = $user_phone;
        $book->trainer_phone = $trainer->phone;
        $book->city = $trainer->city;
        $book->station = $trainer->station;
        $book->payway = $trainer->payway;
        $book->trainer_status = $trainer->status;
        $book->course_hours = $request->course_hour;
        $book->bill = $request->course_hour * 130;
        $book->save();
        return redirect('user_course')->with('message', 'تم الحجز بنجاح');
    }
    }
public function user_course()
{

    $books = book::where('user_id',Auth::user()->id)->get();

    return view('user_book_a_course',compact('books'));
}
public function deletcourse($id)
{
    $course = book::find($id);
    $course->delete();
    return redirect()->back();
}
public function questions()
{
    return view('questions');
}
public function search(Request $request)
{
    $city = city::all();
    $station = station::all();
    $fcity = $request->filtercity;
    $fpayway = $request->filterpayway;
    if(Auth::user()->usertype == 2)
    {
        $books = book::where('user_name','LIKE','%'.$request->search.'%')
        ->where('trainer_id',Auth::user()->id)
        ->get();
        return view('mytrainerpage',compact('books'));
    }
    else
    {
        $trainers = Trainer::where('name','LIKE','%'.$request->search.'%')
        ->orwhere('station','LIKE','%'.$request->search.'%')
        ->orwhere('status','LIKE','%'.$request->search.'%')
        ->orwhere('payway','LIKE','%'.$request->search.'%')
        ->orwhere('gender','LIKE','%'.$request->search.'%')->get();
        return view('trainers',compact('trainers','city','station','fpayway','fcity'));
    }
    
}






}
