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

    public function autocomplete() {
      $term = request('term');
      $result = AccountInfo::whereFirstname($term)->orWhere('firstname', 'LIKE', '%' . $term . '%')->get(['id', 'firstname as value']);
      return response()->json($term);
       }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $emdesignation = new EmDesignationModel($request->all());

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
