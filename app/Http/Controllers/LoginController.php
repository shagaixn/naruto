<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Нэвтрэх form харуулах
     */
    public function showLoginForm()
    {
        return view('include.login');
    }

    /**
     * Хэрэглэгч нэвтрүүлэх
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home')->with('success', 'Амжилттай нэвтэрлээ!');
        }

        return back()->withErrors([
            'email' => 'Имэйл эсвэл нууц үг буруу байна.',
        ])->onlyInput('email');
    }
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect()->intended('/profile'); // /profile руу шууд очно
    }
    return back()->withErrors([
        'email' => 'Имэйл эсвэл нууц үг буруу байна',
    ]);
}

    /**
     * Хэрэглэгч гаргах
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home')->with('success', 'Амжилттай гарлаа!');
    }
}
