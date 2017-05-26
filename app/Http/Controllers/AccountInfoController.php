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
            'user_id' => $user->id,
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

      $accounts = AccountInfo::find($id);
      return view('accounts.edit', compact('accounts'));
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
