<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttendanceModel;
use App\Http\Controllers\Api\DaterangeController;
use App\AccountInfo;
use App\CutoffModel;
use Carbon\Carbon;
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

      $TimeIn = Carbon::parse($request->timeIn[$i]);
      $TimeOut = Carbon::parse($request->timeOut[$i]);
      $hoursWorked = $TimeOut->diffInSeconds($TimeIn);
      $Hresult = gmdate('H:i:s', $hoursWorked);
      $shiftStart = Carbon::parse($request->shiftStart);
      $tardiness = $shiftStart->diffInSeconds($TimeIn);
      $Tresult = gmdate('H:i:s', $tardiness);
      $shiftEnd = Carbon::parse($request->shiftEnd);
      $overTime = $shiftEnd->diffInSeconds($TimeOut);
      $Oresult = gmdate('H:i:s', $overTime);


          AttendanceModel::find($request->a_id[$i])->update([

           'date'=> $request->date[$i],
           'timeIn'=> $request->timeIn[$i],
           'timeOut'=> $request->timeOut[$i],
           'hoursWorked' => $Hresult,
           'tardiness' => $Tresult,
           'overtime' => $Oresult
        ]);
    }
        return redirect("/accounts/$id/profile");
      }
}
