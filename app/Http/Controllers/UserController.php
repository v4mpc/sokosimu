<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Session;

class UserController extends Controller
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
        $users=User::all();
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:255'
        ]);

        

        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);

        $user->save();
            
        return redirect ('users')->with('status', 'User was successul created');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
            $user=User::findOrFail($id);
            return view('users.show')->with('user', $user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
            return view('users.edit')->with('user', $user);
        
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
$user=User::findOrFail($id);
          if (!empty($request->password)) {
            $request->validate([
                
                            'password'=>'required|min:6|max:255'
                            
                        
                        ]);
    
                        
                        $user->password=bcrypt($request->password);
        } 
        
    
        $request->validate([
            
                        'name'=>'required|max:255',
                        'email'=>'required|email|unique:users,email,'.$id
                       
                        
                    
                    ]);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);

        $user->save();
            
        return redirect ('users')->with('status', 'User was successul updated');
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
        $user=User::findOrFail($id);
        $user->delete();
        Session::flash('status', 'The User was successfully Deleted!');
        return redirect()->route('users.index');
    }

    public function apiDisplayUser(Request $request)
    {
        
           
            return  json_encode(User::findOrFail($request->id));
    }
}
