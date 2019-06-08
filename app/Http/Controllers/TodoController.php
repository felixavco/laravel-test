<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
     public function index() {
        return view('welcome');
    }

    public function showTodos() {
        $todos =  [
            ["id"=>1, "title"=>"1st Todo", "body"=>"This is the first TODO"],
            ["id"=>2, "title"=>"2nd Todo", "body"=>"This is the second TODO"],
            ["id"=>3, "title"=>"3rd Todo", "body"=>"This is the third TODO"],
            ["id"=>4, "title"=>"4th Todo", "body"=>"This is the fourth TODO"],
        ];
        return view('todos', compact('todos'));
    }
}
