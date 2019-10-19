<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function share(Request $request){
       $share = \Share::page('http://jorenvanhocht.be', 'Happy mashujaa day!!')
            ->facebook()
            ->twitter()
            ->whatsapp();
       dd($share);
       return $share;
    }
}
