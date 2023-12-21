<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek()
    {
        if (auth()->user()->role_id == 6)
        {
            return redirect('/Superadmin');
        } elseif (auth()->user()->role_id == 7)
        {
            return redirect('/Dashboard-bidang');

        } elseif (auth()->user()->role_id == 8)
        {
            return redirect('/Dashboard-admin');

        }
    }
}
