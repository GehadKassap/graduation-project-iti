<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\support\facades\DB;
use Session ;
//  use  App\Http\middleware\UserAuth;
// use  Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //    $this->middleware('UserAuth');
    // }
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

        $valid = \Validator::make($req->all() , [
            'fullname' => 'required|max:100|min:5',
            'password' => 'required|max:30|min:3',
            'email' => 'required|unique:users|max:30|min:3',
        ]);
        if($valid->fails())
        {
            return view('user.Auth.register');
        }

        /********************* */

        $user = new User ;
        $user->fullname = $req->fullname;
        $user->password = \Hash::make( $req->password);
        $user->email = $req->email;
        $user->save();
        setcookie('role' ,"user");
        $req->session()->put('user' , $user);
         return view("user.index");
         /***************************** */
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
          else
          {
             if( $user->role == 'admin')
             {
                  $req->session()->put('admin' , $user);
                  setcookie('role' , $user->role);
                  return view('admin.adduser');
              }
              else
              {
                  $req->session()->put('user' , $user);
                   setcookie('role' , $user->role);
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
      public function userUpdate(Request $req){
          $data=User::find($req->id);
          $data->fullname=$req->fullname;
          $data->email=$req->email;
          $data->address=$req->address;
          $data->phone=$req->phone;
          $data->save();

          DB::table('cards')->delete();
          return view('user.products.success');
      }
}
