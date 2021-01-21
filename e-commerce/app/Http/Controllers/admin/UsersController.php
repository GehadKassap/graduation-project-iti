<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $messages = DB::table('problems')->count();

        $users=User::all();
        // return $users;
        return view("admin.users",["users"=>$users],compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $messages = DB::table('problems')->count();


        return view("admin.adduser",compact('messages'));


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
        $request->validate([
            "fullname"=>"required",
            "email"=>"required",
            "address"=>"required",
            "password"=>"required",
            "phone"=>"required",
            "role"=>"required"
        ]);
        User::create([
           "fullname"=>$request["fullname"],
            "email"=>$request["email"],
            "address"=>$request["address"],
            "password"=>\Hash::make($request["password"]),
            "phone"=>$request["phone"],
            "role"=>$request["role"]

           ]);

        return redirect(route("users.index"));

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
        return view("admin.editprofile",["User"=>$user]);


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
        $user->update([
            "fullname"=>$request["fullname"],
            "email"=>$request["email"],
            "address"=>$request["address"],
            "password"=>$request["password"],
            "phone"=>$request["phone"]
        ]);
        return redirect(route("users.index"));

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
        $user->delete();
        return redirect(route("users.index"));
    }
}
