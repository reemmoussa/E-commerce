<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
    //
    public function show()
    {
        $cats= Category::all();
        return view('view2',compact('cats'));
    }
    public function add(Request $request)
    {
        $name=$request->input('name');
        $cat=new Category;
        $cat->cat_name=$name;
        $cat->save();
        //$this->show();
        return back();//redirect('any/categories');
    }
    public function edit($id,Request $request)
    {
        $cat=Category::find($id);
        $name=$request->input('name');
        $cat->cat_name=$name;
        $cat->save();
        //$this->show();
        return back();//redirect('any/categories');
    }
    public function delete($id)
    {
        $cat=Category::find($id);
        $cat->delete();
        //$this->show();
        return back();//redirect('any/categories');

    }


}
