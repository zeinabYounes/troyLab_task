<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\School;
use App\Order;
use App\Events\OrderCreated;
use Illuminate\Foundation\Validation\ValidatesRequests;
class HomeController extends Controller
{
  use ValidatesRequests;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $schools = School::all();
        return view('home',compact('schools'));
    }

    public function showStudents(){
      $students = Student::all();
      $suspend_std = Order::where('status',"suspended")->get();
      $refus_std  = Order::where('status',"refused")->get();
      return view('students',compact('students','suspend_std','refus_std'));

    }
    ////////////////////////////////////////////////////////////////////////////////////////////////
    public function post(Request $request,$id){
       $request->validate([
        'stud_name' => 'required|string|max:191',
      ]);
      $order = new Order;
      $order->student_name = $request->stud_name;
      $order->status = "suspended";
      $order->school_id =$id;
      $order->save();
      try{
        event(new OrderCreated($order));

      }catch{
        PostCreated::dispatch($order);
      }
      session()->flash('success','Register Successfuly ');
      return redirect()->route('home');
    }

}
