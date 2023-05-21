<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;
use Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function loginprocess(Request $request, Administrator $administrator)
    {
        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);
   
        // $credentials = $request->only('username', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('/index')->withSuccess('Signed in');
        // }
        // return back()->withSuccess('Oppes! You have entered invalid credentials');
  
        // return redirect("/")->withSuccess('Login details are not valid');
        //
        $admin = Administrator::where('username', $request->username)->where('password', $request->password)->first();
        if(!$admin){
            $request->session();
            return back()->with('error', "Wrong Username or Password!");
        } else {
            return redirect('/index')->with('alert', "Login Success!");
		}
    }
    public function logout(Request $request){
        // Session::flush();
        // Auth::logout();
  
        // return Redirect('/');
        $request->session()->forget('username');
		return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
