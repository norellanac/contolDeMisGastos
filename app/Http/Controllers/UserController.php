<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Country;
use App\City;
use App\State;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $roles=Role::all();
        //dd($users);
        return view('users.index', ['users'=>$users, 'roles'=>$roles]);
        /*
        $users = User::find(1);
        dd($users);
        //$city=Country::find(1);
        //dd($city->posts ) ;

        return view("users.index",["users"=>$users ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries= Country::all();
        return view('users.createData', ['countries'=>$countries]);
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
        request()->validate([
            'country_id' => ['required', 'integer'],
            'state_id' => ['required', 'integer',],
            'city_id' => ['required', 'integer'],
            'zone' => ['required', 'integer'], 
            'street' => ['required','integer'],/*
            'avenue' => ['required', 'integer'],*/
            'url_image' => ['image', 'max:1999']
        ]);
        //dd($request->url_image);
        $user=USer::find(auth()->user()->id);
        $user->country_id=$request->country_id;
        $user->state_id=$request->state_id;
        $user->city_id=$request->city_id;
        $user->zone=$request->zone;
        $user->street=$request->street;
        $user->avenue=$request->avenue;

        //******carga de imagen**********//
        if($request->hasFile('url_image')) {
            // Get filename with extension            
                //$filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
                //$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            $filename = $user->id;       
           // Get just ext
            $extension = $request->file('url_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'.'.$extension;  
          // Upload Image //********nombre de carpeta para almacenar*****
            $path = $request->file('url_image')->storeAs('public/users', $fileNameToStore);
        } else {
            $fileNameToStore = '/users/default.jpg';
        }
        //******carga de imagen**********//

        $user->url_image='/users/'.$fileNameToStore;
        if ($user->save()) {
            return redirect ('/users/'.$user->id);
        }
        else{
            return abort (404);
        }
        
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
        $user=User::findOrFail($id);
        $roles=Role::all();
        return view('users.show', ['user'=>$user, 'roles'=>$roles]);
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
    {
        //
    }


    public function states ($id)
    {
        //funcion para filtrar productos por distribuidor
        $states=State::where('country_id','=',$id)->get();
        return $states;
    }
    public function cities ($id)
    {
        //funcion para filtrar productos por distribuidor
        $states=City::where('state_id','=',$id)->get();
        return $states;
    }
}
