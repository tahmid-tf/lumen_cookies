<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;

class CookieController extends Controller
{
    public function getCookie(Request $request){
        return $request->cookie('dd');
    }

    public function setCookie(Request $request){
        return response(null)->withCookie(new Cookie('dd', "Dad"));
    }


    public function clearCookie(){
        return response(null)->withCookie(new Cookie('dd', null));
    }
}
