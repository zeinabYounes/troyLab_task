<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Order;
use App\Student;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orders = Order::withTrashed()->get();
      return view('dashboard.order.index',compact('orders'));
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////
    public function accept($id){
      $order = Order::findOrFail($id);
      $order->status = "accepted";
      $order->update();
      $student = new Student;
      $student->name = $order->student_name;
      $student->school_id = $order->school_id;
      $student->order_id =$id;
      $student->save();
      session()->flash('success','Accepting Successfuly ');
      return redirect()->route('orders.index');

    }
    ///////////////////////////////////////////////////////////////////////////////////////////////
    public function refus($id){
      $order = Order::findOrFail($id);
      $order->status = "refused";
      $order->update();
      $student = Student::where("order_id",$id)->first();
      if($student){
        $student->delete();
        $student=Student::onlyTrashed()->find($student->id);
        $student->forceDelete();
      }
      session()->flash('success','Refusing Successfuly ');
      return redirect()->route('orders.index');

    }
    ///////////////////////////////////////////////////////////////////////////////////////////////
    public function susbend($id){
      $order = Order::findOrFail($id);
      $order->status = "suspended";
      $order->update();
      $student = Student::where("order_id",$id)->first();
      if($student){
        $student->delete();
        $student=Student::onlyTrashed()->find($student->id);
        $student->forceDelete();
      }
      session()->flash('success','Suspending Successfuly ');
      return redirect()->route('orders.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
     public function destroy( $id)
     {
       $order = Order::findOrFail($id);
       $order->delete();
       session()->flash('success','Deleting Successfuly ');
       return redirect()->route('orders.index');
     }
     /**
      * Restore the specified resource to storage.
      *
      * @param  \App\Order  $school
      * @return \Illuminate\Http\Response
      */

    public function restore($id)
    {
       $order=Order::onlyTrashed()->find($id);
       $order->restore();
       session()->flash('success','order Restored Successfully! ');
       return redirect()->route('orders.index');
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * DeleteForce the specified resource from storage.
     *
     * @param  \App\Order  $school
     * @return \Illuminate\Http\Response
     */
    public function deleteForever($id)
    {
        $order=Order::onlyTrashed()->find($id);
        $order->forceDelete();
        session()->flash('success','order deleted  Successfully! ');
        return redirect()->route('orders.index');
   }
}
