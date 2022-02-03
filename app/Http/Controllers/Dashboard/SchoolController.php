<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::withTrashed()->get();
        return view('dashboard.school.index',compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
        'sch_name' => 'required|string|max:191|min:3',
        'status' => 'required',
      ]);
      $school = new School;
      $school->name = $request->sch_name;
      $school->status = $request->status;
      $school->save();
      session()->flash('success','Creation Successfuly ');
      return redirect()->route('schools.index');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\School  $school
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(School $school)
    // {
    //     //
    // }
    //
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\School  $school
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(School $school)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
      $request->validate([
         'sch_name' => 'required|string|max:191|min:3',
         'status' => 'required',
       ]);
       $school = School::findOrFail($id);
       $school->name = $request->sch_name;
       $school->status = $request->status;
       $school->update();
       session()->flash('success','Updating Successfuly ');
       return redirect()->route('schools.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
      $school = School::findOrFail($id);
      $school->delete();
      session()->flash('success','Deleting Successfuly ');
      return redirect()->route('schools.index');
    }
    /**
     * Restore the specified resource to storage.
     *
     * @param  \App\School  $school
     * @return \Illuminate\Http\Response
     */

   public function restore($id)
   {
      $school=School::onlyTrashed()->find($id);
      $school->restore();
      session()->flash('success','School Restored Successfully! ');
      return redirect()->route('schools.index');
   }
   /////////////////////////////////////////////////////////////////////////////////////////////////
   /**
    * DeleteForce the specified resource from storage.
    *
    * @param  \App\School  $school
    * @return \Illuminate\Http\Response
    */
   public function deleteForever($id)
   {
       $school=School::onlyTrashed()->find($id);
       $school->forceDelete();
       session()->flash('success','School deleted  Successfully! ');
       return redirect()->route('schools.index');
  }
}
