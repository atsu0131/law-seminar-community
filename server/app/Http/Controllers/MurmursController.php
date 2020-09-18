<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class MurmursController extends Controller
{
    public function index(){
        $Posts = Posts::all();

        return view('murmur',
            ['posts' => $posts
        ]);

    }

    public function store(){

    }

    public function create(){

    }

    public function delete(){

    }
}
