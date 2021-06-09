<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function index()
    {
        return view('captcha');
    }
    public function create()
    {
        return view('captchacreate');
    }
    public function captchaValidate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            // 'email' => 'required|email',
            'password' => 'required|min:6',
            'captcha' => 'required|captcha'
        ]);
    }
    public function refreshCaptcha()
    {
        // return response()->json(['captcha'=> captcha_img()]);
        return captcha_img('math');
    }
}
