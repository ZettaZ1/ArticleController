<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $req){
   
          $data =[
            'data' => 'este transmis din ArticleController'
          ];
       
          return view('index', $data);
        }
}
