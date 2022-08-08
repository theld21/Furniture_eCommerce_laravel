<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'status', 'avatar', 'email')->orderby('id', 'desc')->paginate(10);
        return view('admin.user.list', [
            'users'=>$users
        ]);
    }

    public function create()
    {
        return view('admin.user.form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5',
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'status' => 'required'
            ], [
                'name.required' => 'Name field is required.',
                'password.required' => 'Password field is required.',
                'email.required' => 'Email field is required.',
                'email.email' => 'Email field must be email address.'
            ]);
    
        $validatedData['password'] = bcrypt($validatedData['password']);

        if ($request->hasFile('avatar')) {
            $avatarName = $request->avatar->hashName();
            $validatedData['avatar'] = $request->avatar->storeAs('images/users', $avatarName);
        } else {
            unset($validatedData['avatar']);
        }
        $user = User::create($validatedData);

        return back()->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.user.form', [
            'user' => $user
        ]);
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user->fill($request->all());

        if ($request->hasFile('avatar')) {
            $avatarName = $request->avatar->hashName();
            $user->avatar = $request->avatar->storeAs('images/users', $avatarName);
        }
        if ($request->password)
            $user->password = bcrypt($request->password);

        $user->save();
        
        return back()->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        if (!$user) return back();
        $user->delete();

        return redirect()->route("admin.user.list");
    }

    public function changeStatus(User $user)
    {
        $user->update([
            'status' => $user->status == 0 ? 1 : 0
        ]);

        return redirect()->back();
    }
}
