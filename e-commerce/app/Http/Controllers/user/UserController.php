<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
// use  Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("user.index");
    }
    //to redirect user to signUp form
    function registerForm()
    {
       return view('user.Auth.register');
    }
    //to store user info in db;
    function handleForm(Request $req)
    {
         //return $req->input();
        //   dd($req->all());
        $user = new User ;
        $user->fullname = $req->fullname;
        $user->password = \Hash::make( $req->password);
        $user->email = $req->email;
        $user->save();
        // return $user->password ;
         return view("user.index");
    }
    //to redirect user to signIn form
    function loginForm()
    {
       return view('user.Auth.signin');
    }
    //match user in db;
    function handleLogin(Request $req)
    {

        $user = User::where(['email'=>$req->email ])->first();
        if( !$user ||  !Hash::check($req->password , $user->password))
        {
             return redirect('signin') ;

        }

        // else
        // {
        //     $req->session()->put('user' , $user);
        //     return redirect('/');
        // }
          else
          {
             if( $user->role == 'admin')
             {
                  $req->session()->put('user' , $user);
                  setcookie('user_role' , $user->role);
                  return view('admin.dashboard');
              }
              else
              {
                    $req->session()->put('user' , $user);
                   // return view('admin.dashboard');
                    setcookie('user_role' , $user->role);
                    return redirect('/');

               }

    }
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
