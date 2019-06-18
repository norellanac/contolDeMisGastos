<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
            'zone' => ['required', 'integer'] /*
            'street' => ['required','integer'],
            'avenue' => ['required', 'integer'],
            'url_image' => ['required', 'max:1999']*/
        ]);
        //dd($request->url_image);
        dd($request->hasFile('url_image'));
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
