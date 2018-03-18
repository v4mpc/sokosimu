<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Carbon\Carbon;
use App\Product;
use Session;

class CustomerController extends Controller
{


public function __construct() {
    $this->middleware('auth');
}



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $customers=Customer::paginate(10);
        return view('customers.index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:customers,email',
            'password'=>'required|min:6|max:255'
        ]);

        

        $customer=new Customer;
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->password=bcrypt($request->password);
        $customer->api_token=bin2hex(openssl_random_pseudo_bytes(30));

        $customer->save();
            
        return redirect ('customers')->with('status', 'Customer was successul created');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
            $customer=Customer::findOrFail($id);

         

           $product_id=array();
           foreach ($customer->wishlists as $list){
            $product_id[]=$list->product_id;
           }
         
               $products=Product::whereIn('id',$product_id)->get();
    
            return view('customers.show')->with('customer', $customer)->with('wishlists',$products);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customer::findOrFail($id);
            return view('customers.edit')->with('customer', $customer);
        
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
          //
$customer=Customer::findOrFail($id);
          if (!empty($request->password)) {
            $request->validate([
                
                            'password'=>'required|min:6|max:255'
                            
                        
                        ]);
    
                        
                        $customer->password=bcrypt($request->password);
        } 
        
    
        $request->validate([
            
                        'name'=>'required|max:255',
                        'email'=>'required|email|unique:customers,email,'.$id
                       
                        
                    
                    ]);
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->password=bcrypt($request->password);

        $customer->save();
            
        return redirect ('customers')->with('status', 'Customer was successul updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customer=Customer::findOrFail($id);
        $customer->delete();
        Session::flash('status', 'The Customer was successfully Deleted!');
        return redirect()->route('customers.index');
    }

    public function apiDisplayCustomer(Request $request)
    {
        
           
            return  json_encode(Customer::findOrFail($request->id));
    }
}
