<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AbsencesModel;
use App\LeavestypeModel;

class AbsencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $absencess = AbsencesModel::get();
      return view('absences.index', ['absencess' => $absencess]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $leavestypes = LeavestypeModel::pluck('leavestype','id');
      return view('absences.add', ['leavestypes' => $leavestypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $absences = new AbsencesModel($request->except(['searchname']));
      $absences->save();
      return redirect()->route('absences.index')->with('alert-succress','Add new leave success.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $leavestypes = LeavestypeModel::pluck('leavestype','id');
      $absences = AbsencesModel::find($id);
      return view('absences.edit', ['leavestypes' => $leavestypes] ,compact('absences'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $absences = AbsencesModel::find($id);
      $absences->user_id = $request->user_id;
      $absences->leavetype_id = $request->leavetype_id;
      $absences->reason = $request->reason;
      $absences->date = $request->date;
      $absences->save();
      session()->flash('message','Updated Successfully');
      return redirect('/absences');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $absences = AbsencesModel::find($id);
      $absences->delete();
      session()->flash('message','Delete Successfully');
      return redirect('/absences');
    }
}
