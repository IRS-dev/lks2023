<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('admin.user.index',[
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required','max:255',
            'email' => 'required', 'email',
            'role' => 'required',
            'password' => 'required', 'max:255'
        ]);
        
        $validated['password'] = Hash::make($validated['password']);
        $user = new User;
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];
        $user->password = $validated['password'];
        $user->save();
        return redirect('/dashboard/user')->with(['success' => 'User had been added']);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        return view('admin.user.show',[
            'user' => User::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',[
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required','max:255',
            'email' => 'required', 'email',
            'role' => 'required',
        ]);
        $user->update([
            'name' => $request->name,
            'email' =>$request->email,
            'role' =>$request->role
        ]);
        return redirect('/dashboard/user')->with(['success' => 'User had been update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect()->back()->with(['success'=>'User has been deleted']);
    }
}
