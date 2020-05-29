<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class ProfileController extends Controller
{



    public function updateProfile()
    {
        return view('profile.profile');
    }

    public function updatePassword()
    {
        return view('profile.password');
    }
    public function getAuthUser ()
    {
        return Auth::user();
    }

    public function updateAuthUser (Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.Auth::id()
        ]);

        $user = User::find(Auth::id());

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        if($user) 
        {
            toastr()->success('Your profile is updated.');
        }            return redirect('profile');

    }


    public function updateAuthUserPassword(Request $request)
    {
        $this->validate($request, [
            'current' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::find(Auth::id());

        if (!Hash::check($request->current, $user->password)) {
            return response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
        }

        $user->password = Hash::make($request->password);
        $user->save();
        if($user) 
        {
            toastr()->success('You\'ve changed your password.');
        }            return redirect('profile');

    }
}