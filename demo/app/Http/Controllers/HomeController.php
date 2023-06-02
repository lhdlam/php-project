<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'Index';
    }

    public function getNews(){
        return 'News';
    }

    public function categories($id){
        return 'Chuyen muc '.$id;
    }
    public function sum($a, $b){
        return $a + $b ; 
    }
}
