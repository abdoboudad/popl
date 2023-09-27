<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function users(){
        $users = User::all();
        return view('admin.users.users',compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::find($id)->card;
    }

    public function edit(User $user){
        return view('admin.users.edit',compact('user'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        if($request->name){
            $request->validate([
                'name'=> 'required|string|min:3|max:20',
            ]);
            $user->name = $request->name;
            $user->save();
        }
        if($request->email){
            $request->validate([
                'email'=> 'required|email|unique:users',
            ]);
            $user->email = $request->email;
            $user->save();
        }
        if($request->password){
            $request->validate([
                'password'=> 'required|min:8|max:30',
            ]);
            $user->password = Hash::make($request->password);
            $user->save();
        }
        return [
            'message'=>'Modified successfully',
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return [
            'message'=>'delete successfully',
        ];
    }

}
