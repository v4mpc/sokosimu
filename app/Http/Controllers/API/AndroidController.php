<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Customer;
use Carbon\Carbon;
use Session;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Product;
use Image;
use Illuminate\Support\Facades\Storage;

class AndroidController extends Controller
{
     public $successStatus = "SUCCESS";

public function login(){




    $email=request('0');
    $password=request('1');
$password=md5($password);
$users = Customer::where([
    ['email', '=', $email],
    ['password', '=',$password ],
])->get()->toArray();

if ($users==!null) {
    return response()->json($users);
} else {
    
    return response()->json(["203"]);
}

//tring so see 


}

public function register(){

    $name=request('0');
    $email=request('1');
    $password=request('2');

    $users = Customer::where(
        'email', '=', $email)->get()->toArray();
        if ($users==!null) {
        return response()->json(['204']);
    }else{
    $user=new Customer;
        $user->name=$name;
        $user->email=$email;
        $user->password=md5($password);
        $user->api_token=bin2hex(openssl_random_pseudo_bytes(30));  
        $user->save();
        return response()->json(['205']);
    }
    

    
}

public function facebook()
{
  $user_id=request('0');

  $users = Customer::where(
    'user_id', '=', $user_id)->where('is_facebook','1')->get()->toArray();
    if ($users==!null) {
    return response()->json($users);
}else{
$user=new Customer;
    $user->user_id=$user_id;
    $user->is_facebook='1';
    $user->api_token=bin2hex(openssl_random_pseudo_bytes(30));  

    $user->save();
    
    return response()->json($user);
}

}


public function google()
{
  $user_id=request('0');

  $user = Customer::where(
    'user_id', '=', $user_id)->where('is_facebook','0')->get()->toArray();
    if ($user==!null) {
    return response()->json($user);
}else{
    $user=new Customer;
    $user->user_id=$user_id;
    $user->is_facebook='0';
    $user->api_token=bin2hex(openssl_random_pseudo_bytes(30));  
    $user->save();
    return response()->json($user);
}

}

public function indexCategory()
{
    $categories=Category::all();
    return response()->json($categories);
}

public function showCategory($id)
{
    $category=Category::findOrFail($id);

   
    return response()->json($category->products);
}


public function indexProduct()
{
    $products=Product::orderBy('created_at','desc')->get();
    return response()->json($products);
}



public function showProduct($id)
{
    $products=Product::findOrFail($id);

   
    return response()->json($products);
}





public function storeProduct(Request $request)
{

    $product = new Product;

    if (!empty($request->image_one)) {
        $imgstring1=$request->image_one;
        $imgfile1=Image::make($imgstring1);
        $filename1=uniqid('img_').'.png';
        $location=public_path('images/'.$filename1);
        $imgfile1->save($location);
        $product->featuredImage1=$filename1;
    }

    if (!empty($request->image_two)) {
        $imgstring2=$request->image_two;
        $imgfile2=Image::make($imgstring2);
        $filename2=uniqid('img_').'.png';
  

        $location2=public_path('images/'.$filename2);
        $imgfile2->save($location2);
        $product->featuredImage2=$filename2;
    }

    if (!empty($request->image_three)) {
        $imgstring3=$request->image_three;
        $imgfile3=Image::make($imgstring3);
        $filename3=uniqid('img_').'.png';
        $location3=public_path('images/'.$filename3);
        $imgfile3->save($location3);
        $product->featuredImage3=$filename3;
        

    }










 

    
   

$name=request('name');
  $description=request('description');
  $price=request('price');
  $category_id=request('category_id');
  $api_token=$request->api_token;
        $customer=Customer::select('id')->where('api_token',$api_token)->first();

$customer_id=$customer->id; 


  
  

  $product->description=$description;
  $product->category_id=$category_id;
  $product->name=$name;
  $product->price=$price; 
  $product->customer_id=$customer_id;         
          
  $product->save();


  return response()->json(['206']);


}

public function customerProducts(){

    $api_token=request('api_token');
    $customer=Customer::where('api_token',$api_token)->first();
    $products=$customer->products;
   

    return response()->json($products);


}

public function updateProduct($id)
{
    $product =Product::findOrFail($id);

     //add laravel server-side validation here:
 
//   if ($request->hasFile('file')) {
  
//   $filename = $request->file('file');
//      //$this->validate($request,[
//      // 'file' => 'required',
//      // 'file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
//      // ]); Add laravel validate if you wish
//      foreach ($filename as $n => $file) {
//       $k= $n+1;
//       $filenames = $filename[$n]->getClientOriginalName();
//       $fileModel->{"featuredImage".$k} = $filenames;
//      // $file->storeAs('public/images',$filenames);
//      $file->move('images',$filenames);
//      }

    
  
//   }

  $name=request('0');
  $description=request('1');
  $price=request('2');
  $category_id=request('3');
  $customer_id=request('4');
  $featuredImage1=request('5');
  $featuredImage2=request('6');
  $featuredImage3=request('7');


//   if ($request->hasFile('featuredImage1')) {
//     $image1=$request->file('featuredImage1');
//     $filename1=time().'.'.$image1->getClientOriginalExtension();
//     $location=public_path('images/'.$filename1);
//     Image::make($image1)->resize(800, 400)->save($location);
//     $product->featuredImage1=$filename1;
// }

// if ($request->hasFile('featuredImage2')) {
//     $image2=$request->file('featuredImage2');
//     $filename2=time().'.'.$image->getClientOriginalExtension();
//     $location=public_path('images/'.$filename2);
//     Image::make($image2)->resize(800, 400)->save($location);
//     $product->featuredImage2=$filename2;
// }

// if ($request->hasFile('featuredImage3')) {
//     $image3=$request->file('featuredImage3');
//     $filename3=time().'.'.$image3->getClientOriginalExtension();
//     $location=public_path('images/'.$filename3);
//     Image::make($image3)->resize(800, 400)->save($location);
//     $product->featuredImage3=$filename3;
// }
  

$file_data = $request->input('company_logo'); 
$file_name = 'image_'.time().'.png'; //generating unique file name; 
@list($type, $file_data) = explode(';', $file_data);
@list(, $file_data) = explode(',', $file_data); 
if($file_data!=""){ // storing image in storage/app/public Folder 
       \Storage::disk('public')->put($file_name,base64_decode($file_data)); 
 } 
  
  
  

  $product->description=$description;
  $product->category_id=$category_id;
  $product->name=$name;
  $product->price=$price; 
  $product->customer_id=$customer_id;         
          
  $product->save();


  return response()->json(['207']);
    
}


public function profile(){

    $api_token=request('api_token');
   $customer=Customer::where('api_token',$api_token)->first();

    $data['customer']=$customer;
  // dd( $data['dd']=count($customer->wishlists));
$data['wishlistCount']=count($customer->wishlists);
$data['productCount']=count($customer->products);
//$data['trascationCount']=count($customer->TranscationHistories);


    


return response()->json($data);


}

   

}