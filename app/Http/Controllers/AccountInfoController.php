<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\AccountInfo;
use Auth;
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
          return view('accounts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $firstnames = $request -> firstname;
          $lastnames = $request -> lastname;
          $birthdays = $request -> birthday;
          $Genders  = $request -> Gender;
          $emails = $request -> email;
          $phones = $request -> phone;
          $addresss = $request -> address;
          $employeeIDs = $request -> employeeID;
          $shiftStarts = $request -> shiftStart;
          $shiftEnds = $request -> shiftEnd;
          $hiredDates = $request -> hiredDate;
          $exitDates = $request -> exitDate;
          $salarys = $request -> salary;
          $usernames = $request -> username;
          $passwords = $request -> password;

          $account = new AccountInfo;

          $account->firstname = $firstnames;
          $account->lastname = $lastnames;
          $account->birthday = $birthdays;
          $account->Gender = $Genders;
          $account->email = $emails;
          $account->phone = $phones;
          $account->address = $addresss;
          $account->employeeID = $employeeIDs;
          $account->shiftStart = $shiftStarts;
          $account->shiftEnd = $shiftEnds;
          $account->hiredDate = $hiredDates;
          $account->exitDate = $exitDates;
          $account->salary = $salarys;


          $user = new User;

          $user->username = $usernames;
          $user->password = $passwords;

          $user->save();
          $account->save();

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
