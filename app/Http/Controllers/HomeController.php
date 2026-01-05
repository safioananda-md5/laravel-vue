<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tes = 'tess tess';
        return Inertia::render('Home', [
            'nama' => $tes,
        ]);
    }
}
