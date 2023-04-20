<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function handleLogin(Request $req)
    {
        $validated = $req->validate(['email' => 'required', 'password' => 'required|min:6', ]);

        $user = User::where('email', '=', $validated['email'])->first();

        if ($user)
        {
            if ($validated['password'] == $user->password)
            {
                $req->session()
                    ->flash('success', 'Logged In Successfully!');
                return redirect('main');
            }
            else
            {
                $req->session()
                    ->flash('error', 'Invalid Password');
                return redirect()
                    ->back();
            }
        }
        else
        {
            $req->session()
                ->flash('error', "User Doesn't Exist");
            return redirect()
                ->back();
        }
    }

    public function registerLogin(Request $req)
    {
        $validated = $req->validate(['username' => 'required', 'email' => 'required|unique:users', 'password' => 'required|min:6']);

        $auth = new User;
        $auth->username = $validated['username'];
        $auth->password = $validated['password'];
        $auth->email = $validated['email'];
        $auth->save();

        $req->session()
            ->flash('success', 'Account Created Successfully!');
        return redirect('/');
    }
}

