<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index',['products'=>Product::get()]);
        // return view('products.index',['products'=>Product::latest()->paginate(5)]);

    }

    public function create(){
        return view('products.create');

    }

    public function store(Request $request){
        // dd($request->all());

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|max:10000|mimes:png,jpg'
        ]);

        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('products'),$imageName);
        $product= new Product;
        $product->image=$imageName;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->save();
        return back()->with('Success','Successfully created');

    }

    public function edit($id){
        $product=Product::where('id',$id)->first();
        return view('products.edit',['product'=>$product]);

    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'nullable|max:10000|mimes:png,jpg'
        ]);

        $product=Product::where('id',$id)->first();
        if(isset($request->image)){
            $imageName=time().'.'.$request->image->extension();
            $request->image->move(public_path('products'),$imageName);
            $product->image=$imageName;
        }

        $product->name=$request->name;
        $product->description=$request->description;
        $product->save();
        return back()->with('Success','Successfully created');
    }

    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        return back();

    }

    public function view($id){
        $product=Product::where('id',$id)->first();
        return view('products.view',['product'=>$product]);

    }
}


