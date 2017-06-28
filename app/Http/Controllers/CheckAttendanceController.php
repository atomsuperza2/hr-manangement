<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttendanceModel;
use App\Http\Controllers\Api\DaterangeController;
use App\AccountInfo;
use App\CutoffModel;

class CheckAttendanceController extends Controller
{

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function checkAttendance(Request $request, $id)
  {

    $accounts = AccountInfo::find($id);


    $cutoff = CutoffModel::find($request->cutoffId);

    $ranges = DaterangeController::dateRange($cutoff->dateStart, $cutoff->dateEnd);

    foreach ($ranges as $date){
        $checkAttendance = AttendanceModel::firstOrcreate(
        ['user_id' => $id,
        'date' => $date,
        'timeIn' => '00:00',
        'timeOut' => '00:00']
      );

    }
    // dd($checkAttendance);
    // dd($cutoff);
    return view('checkAttendance.check', ['cutoff' => $cutoff, 'ranges' => $ranges], compact('accounts'));
  }

  public function submitAttendance(Request $request, $id){

    for ($i=0; $i < count($request->date); $i++) {
          AttendanceModel::find($request->a_id[$i])->update([
           'user_id'=> $request->user_id,
           'date'=> $request->date[$i],
           'timeIn'=> $request->timeIn[$i],
           'timeOut'=> $request->timeOut[$i],
         ]);
    }
        return redirect("/accounts/$id/profile");
      }
}
