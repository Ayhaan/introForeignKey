<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        $membres = Membre::all();
        return view('admin.membre.main', compact('membres'));
    }
}
