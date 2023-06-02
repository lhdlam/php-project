<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function _construct(){

    }

    public function index(){
        return view('client/categories/list');
    }

    public function getCategory($id){
        return  "ID ".$id;
    }

    public function updateCategory($id){
        return view('client/categories/edit');
    }

    //show form 
    public function addCategory(){
        return view('client/categories/add');
    }
    // xu ly
    public function handleCategory(){

        return redirect(route('categories.add'));
    }

    public function deleteCategory(){
    }
}
