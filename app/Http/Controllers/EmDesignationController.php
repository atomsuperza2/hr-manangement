<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmDesignationModel;
use App\DesignationModel;
use App\AccountInfo;
class EmDesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $emdesignations = EmDesignationModel::get();
     return view('emdesignation.index', ['emdesignations' => $emdesignations]);
    }


    public function autocomplete(Request $request)
    {
      $term = $request->term;
      $data = AccountInfo::where('firstname','LIKE','%'.$term.'%')
      ->take(10)
      ->get();
      $results = array();
      foreach ($data as $key => $v) {
        $results[] = ['id'=>$v->id,'value'=>$v->firstname];
      }
      return response()->json($results);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $designation = DesignationModel::pluck('designationName','id');
      return view('emdesignation.add', ['designation' => $designation]);
    }

    // atucomplete

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $emdesignation = new EmDesignationModel($request->except(['searchname']));

      $emdesignation->save();
      return redirect()->route('emdesignation.index')->with('alert-succress','Add new designation success.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
