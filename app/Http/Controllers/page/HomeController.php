<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function list(){
        return view('list');
    }

    public function create(){
        return view('create');
    }

    public function update(){
        return view('update');
    }

    public function delete(){
        return view('delete');
    }
}
