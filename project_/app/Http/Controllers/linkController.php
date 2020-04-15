<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class linkController extends Controller
{
    public function home($id)
    {
        $cats= Category::all();
        $prods=array();
        $cat=Category::find($id);//Category::where('id',$id)->first()
        if($cat!=null)
            $prods=$cat->products;
        return view('view1',compact('cats','prods'));
    }


}
