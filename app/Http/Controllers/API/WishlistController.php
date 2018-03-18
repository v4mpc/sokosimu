<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use App\Product;
use App\Wishlist;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $api_token=$request->api_token;
        $customer=Customer::where('api_token',$api_token)->first();
       // dd($products=$customer->wishlists);
       $product_id=array();
       foreach ($customer->wishlists as $list){
        $product_id[]=$list->product_id;
       }
      // dd($product_id);
           $products=Product::whereIn('id',$product_id)->get();

        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wishlist= new Wishlist;
        $api_token=$request->api_token;
        $customer=Customer::where('api_token',$api_token)->first();
        $wishlist->customer_id=$customer->id;
        $wishlist->product_id=request('0');

           // dd($wishlist);

           $wishlist->save();

           return response()->json(['210']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { //should varify api token if user is the one saying he is
        
        $api_token=request('api_token');
       
        $customer=Customer::where('api_token',$api_token)->first();
        $customer_id=$customer->id;
        $wishlist=Wishlist::where('product_id',$id)->where('customer_id',$customer_id)->first();
        //dd($wishlist);
        $wishlist->delete();

        return response()->json(['211']);


    }
}
