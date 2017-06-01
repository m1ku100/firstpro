<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibisController extends Controller
{
    public function index()
    {
        $bibis = Bibis::all();
        $data = [
            'todos' => $bibis
        ];

        return view('users.beranda', $data);
    }
}
