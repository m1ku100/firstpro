<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{

     use AuthenticatesUsers;
    public function index()
    {
        return view('users.home');
    }
    public function kosan()
    {
        return view('users.kosan');
    }
    public function about()
    {
        return view('users.about');
    }
    public function showjakarta()
    {
        return view('users.jakarta');
    }
    public function showyogyakarta()
    {
        return view('users.jogja');
    }
    public function showsurabaya()
    {
        return view('users.surabaya');
    }
    public function showEditForm(User $user)
    {
        return view('auth.edit', compact('user'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',

            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6',
            'password_confirmation' => 'required|same:new_password',
        ]);
        $data = $request->all();

        $user = User::find(auth()->user()->id);
        if (!Hash::check($data['password'], $user->password)) {
            Session::flash('status', 'Password lama anda salah!');
            return back();
        } else {
            $user->forceFill([
                'name' => $request->name,

                'email' => $request->email,
                'password' => bcrypt($request->new_password)
            ])->save();
        }
        Session::flash('ok', 'Successfully, updated!');
        return back();
    }
   
}
