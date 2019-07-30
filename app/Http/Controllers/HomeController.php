<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Income;
use App\Expense;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $data=DB::select('select * from incomes union all select * from expenses order by created_at desc limit 5; ');
      $in=Income::where('account_id', auth()->user()->account->id  )->get();
      $out=Expense::where('account_id', auth()->user()->account->id  )->get();
        return view('test', ['data'=>$data, 'in'=>$in->sum('total'), 'out'=>$out->sum('total')]);
    }
}
