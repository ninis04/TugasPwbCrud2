<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home ()
    {
        return view ('index');
    }

    public function fasilitas ()
    {
        return view ('fasilitas' , ['nama' => 'Ulun Danau Beratan Bedugul Bali']);
    }

    public function gallery ()
    {
        return view ('gallery');
    }

    public function informasi ()
    {
        return view ('informasi');
    }
}
