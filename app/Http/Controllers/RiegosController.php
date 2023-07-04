<?php

namespace App\Http\Controllers;

use App\Models\Riego;
use Illuminate\Http\Request;

class RiegosController extends Controller
{
    public function index(){

        return view('riegos.index');
    }
    
    public function create(){

        return view('riegos.create');
    }

    public function edit(Riego $id){

        $this->authorize('update', $id);

        return view('riegos.edit',$id);
    }
}
