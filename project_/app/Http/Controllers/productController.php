<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function show($cat_id)
    {
        $cat=Category::find($cat_id);
        $prods=array();
        if($cat!=null)
            $prods= $cat->products;
        $cats=Category::all();
        return view('products_view',compact('prods','cats'));
    }
    public function add(Request $request)
    {
        $name=$request->input('name');
        $prod=new Product;
        $prod->prod_name=$name;

        $file=$request->file('img');
        $filename=$file->getClientOriginalName();
        $file->move('images',$filename);
        $prod->prod_img=$filename;
        $prod->cat_id=$request->input('cat_id');
        $prod->prod_price=$request->input('price');
        $prod->prod_quantity=$request->input('quantity');
        $prod->save();
        return back();
    }
    public function edit($id,Request $request)
    {
        $prod=Product::find($id);
        $name=$request->input('name');
        $prod->prod_name=$name;
        $prod->prod_price=$request->input('price');
        $prod->prod_quantity=$request->input('quantity');
        $prod->save();
        return back();
      }
    public function delete($id)
    {
        $prod=Product::find($id);
        $prod->delete();
        return back();
    }
    public function view_supp($prod_id)
    {
        $prod=Product::find($prod_id);
        $suppliers=$prod->suppliers;
        return view('suppliers_view',compact('suppliers'));
    }


    public function details($id)
    {
        $prod=Product::find($id);
        return view('detail_view',compact('prod'));

    }
    public function add_to_cart($id)
    {
        //

    }
}
