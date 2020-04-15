<?php

namespace App\Http\Controllers;

use App\Product;
use App\Supplier;
use Illuminate\Http\Request;
use App\Category;

class supplierController extends Controller
{
    //
    public function show($prod_id)
    {
        $prod= Product::find($prod_id);
        $suppliers=array();
        if($prod!=null)
            $suppliers=$prod->suppliers;
        return view('suppliers_view',compact('suppliers'));
    }
    public function show_products($supp_id)
    {
        $supp= Supplier::find($supp_id);
        $prods=array();
        if($supp!=null)
            $prods=$supp->products;
        $cats=Category::all();
        return view('products_view',compact('prods','cats'));
    }

    public function add(Request $request)
    {
        $name=$request->input('name');
        $supp=new Supplier;
        $supp->sup_name=$name;
        $supp->save();
        return back();
    }
    public function edit($id,Request $request)
    {
        $supp=Supplier::find($id);
        $name=$request->input('name');
        $supp->sup_name=$name;
        $supp->save();
        return back();
    }
    public function delete($id)
    {
        Supplier::destroy($id);
        return back();
    }

}
