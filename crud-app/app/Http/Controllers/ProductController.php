<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Product; 


class ProductController extends Controller
{
    public function index(){
        $products=Product::get();

        return view('products.index',compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function show(){
        return view('products.show');
    }
    
    public function store(Request $request){
        //dd($request);
        $request->validate([
            'name'=>'required',
            'mrp'=>'required|numeric',
            'price'=>'required|numeric',
            'description'=>'required',
            
            'image'=>'required|mimes:jpeg,jpg,png,gif|max:10000'

        ]);
        $imageName=time().".".$request->image->extension();
        $request->image->move(public_path('products'),$imageName);


        $product=new Product;
        $product->image=$imageName;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->mrp=$request->mrp;
        $product->price=$request->price;
        $product->save();
        return back()->withSuccess('Product Details Added Success....');
    }
}
