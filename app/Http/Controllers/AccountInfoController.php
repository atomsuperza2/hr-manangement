<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\AccountInfo;
use App\DepartmentModel;
use App\DesignationModel;
use App\BankaccountModel;
use App\CutoffModel;
use Auth;
use App\AttendanceModel;
use App\Http\Controllers\Api\DaterangeController;

class AccountInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $accounts = AccountInfo::paginate(15);
        $accounts = AccountInfo::all();
       return view('accounts.index', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $designation = DesignationModel::pluck('designationName','id');
          $department = DepartmentModel::pluck('departmentName','id');
          return view('accounts.add', ['designation' => $designation],['department' => $department]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());
          //  $data = ['birthday' => $request->birthday,
          //            'password' => $request->birthday];
          $user = User::create(['username' => $request -> username,
                                'password' => $request -> birthday]);

          $user->accountinfo = AccountInfo::create([
            'name' => $request -> name,
            'birthday' => $request -> birthday,
            'Gender' => $request -> Gender,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'address' => $request -> address,
            'employeeID' => $request -> employeeID,
            'hiredDate' => $request -> hiredDate,
            'exitDate' => $request -> exitDate,
            'salary' => $request -> salary,
            'designation_id' => $request -> designation_id,
            'department_id' => $request -> department_id,
            'user_id' => $user->id,
          ]);
            $user->accountinfo->bankaccount = BankaccountModel::create([
            'user_id' => $user->accountinfo->id,
          ]);

          // $user->account_info()->create($request->except(['username', 'password']), $data);


          // $user->save();
          // $account->save();

          return redirect()->route('accounts.index')->with('alert-succress','Add new account success.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cutoff = CutoffModel::pluck('dateStart', 'id');
      $accounts = AccountInfo::find($id);
      return view('accounts.profile', ['cutoff' => $cutoff], compact('accounts'));
    }

    public function checkAttendance(Request $request, $id)
    {

      $accounts = AccountInfo::find($id);
      $cutoff = CutoffModel::find($request->cutoffId);
      // dd($cutoff);
      $ranges = DaterangeController::dateRange($cutoff->dateStart, $cutoff->dateEnd);

      return view('checkAttendance.check', ['cutoff' => $cutoff, 'ranges' => $ranges], compact('accounts'));
    }

    public function submitAttendance(Request $request, $id){
      $user_id = $request->user_id;
      $date = $request->date;
      $timeIn = $request->timeIn;
      $timeOut = $request->timeOut;

// dd($request->all());
       foreach ($request->date as $key => $date) {

          // echo $timeIn[$key];
          if (($timeIn[$key] !== null && $timeOut[$key] !== null) || ($timeIn[$key] !== null && $timeOut[$key] == null) || ($timeIn[$key] == null && $timeOut[$key] !== null)){
              // if ($request->a_id == null) {

                $attendance = new AttendanceModel();
                $attendance->user_id = $id;
                $attendance->date = $date;
                $attendance->timeIn = $timeIn[$key];
                $attendance->timeOut = $timeOut[$key];
                $attendance->save();
              }

              // if($request->a_id !== null){
              //   $attendance = AttendanceModel::find($request->a_id)->update([
              //     'user_id'=> $request -> user_id,
              //     'date' => $request -> date,
              //     'timeIn'=> $request -> timeIn,
              //     'timeOut' => $request -> timeOut,
              //   ]);
              //
              // }

          }

          return redirect("/accounts/$id/profile");

          // dd($attendance);
      }


      // return view('accounts.submitAttendance', ['result' => $request->all()]);

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $designation = DesignationModel::pluck('designationName','id');
      $department = DepartmentModel::pluck('departmentName','id');
      $accounts = AccountInfo::find($id);
      return view('accounts.edit', ['department' => $department, 'designation' => $designation, 'accounts' => $accounts]);
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
        $user = User::find($id);
        $user->username = $request -> username;

        $account = AccountInfo::find($id);

        $account->name = $request -> name;
        $account->birthday= $request -> birthday;
        $account->Gender = $request -> Gender;
        $account->email = $request -> email;
        $account->phone = $request -> phone;
        $account->address = $request -> address;
        $account->employeeID = $request -> employeeID;
        $account->department_id = $request -> department_id;
        $account->designation_id = $request -> designation_id;
        $account->hiredDate = $request -> hiredDate;
        $account->exitDate = $request -> exitDate;
        $account->salary = $request -> salary;

        $account->save();
        $user->save();
        session()->flash('message','Updated Successfully');
        return redirect('/accounts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = AccountInfo::find($id);
        $account->delete();
        session()->flash('message','Delete Successfully');
        return redirect('/accounts');
    }
}
