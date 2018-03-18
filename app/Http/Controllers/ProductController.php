<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Customer;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(10);
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $customers=Customer::all();
        return view('products.create')->with('categories', $categories)->with('customers',$customers);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $fileModel = new Product;
        //add laravel server-side validation here:
     
      if ($request->hasFile('file')) {
      
      $filename = $request->file('file');
         //$this->validate($request,[
         // 'file' => 'required',
         // 'file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
         // ]); Add laravel validate if you wish
         foreach ($filename as $n => $file) {
          $k= $n+1;
          $filenames = time().$filename[$n]->getClientOriginalName();
          $fileModel->{"featuredImage".$k} = $filenames;
         // $file->storeAs('public/images',$filenames);
         $file->move('images',$filenames);
         }

        
      
      }

      $fileModel->description=$request->description;
      $fileModel->category_id=$request->category_id;
      $fileModel->name=$request->name;
      $fileModel->price=$request->price;         
      $fileModel->save();


      return redirect()->route('products.show', $fileModel->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $product=Product::findOrFail($id);
        return view('products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $customers=Customer::all();
        $product=Product::findOrFail($id);
        
        return view('products.edit')->with('categories', $categories)->with('customers',$customers)->with('product',$product);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $fileModel = Product::findOrFail($id);
        //add laravel server-side validation here:
     
      if ($request->hasFile('file')) {
      
      $filename = $request->file('file');
         //$this->validate($request,[
         // 'file' => 'required',
         // 'file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
         // ]); Add laravel validate if you wish
         foreach ($filename as $n => $file) {
          $k= $n+1;
          $filenames =time(). $filename[$n]->getClientOriginalName();
          $fileModel->{"featuredImage".$k} = $filenames;
         // $file->storeAs('public/images',$filenames);
         $file->move('images',$filenames);
         }

        
      
      }

      $fileModel->description=$request->description;
      $fileModel->category_id=$request->category_id;
      $fileModel->name=$request->name;
      $fileModel->price=$request->price;         
      $fileModel->save();


      return redirect()->route('products.show', $fileModel->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
