<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Income;
use App\Expense;
use App\Account;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      if (auth()->user()) {
        //dd('select * from incomes where account_id=' . auth()->user()->account->id . ' union all select * from expenses where account_id='. auth()->user()->account->id .' order by created_at desc limit 5; ');
        $data=DB::select('select * from incomes where account_id=' . auth()->user()->account->id . ' union all select * from expenses where account_id='. auth()->user()->account->id .' order by created_at desc limit 5; ');
        $accounts=Account::where('user_id','=', auth()->user()->id)->first();
        if (!$accounts) {
          $accounts=new  Account;
          $accounts->user_id=auth()->user()->id;
          $accounts->save();
        }
        if ($inDB=Income::where('account_id', auth()->user()->account->id  )->get()) {
          // code...
          $in=$inDB->sum('total');

        }
        if ($outDB=Expense::where('account_id', auth()->user()->account->id  )->get()) {
          // code...
          $out=$outDB->sum('total');
        }

      }
      else {
        // code...
        $data=DB::select('select * from incomes union all select * from expenses order by created_at desc limit 5; ');
        $in=2900;
        $out=1350 * -1;
      }

        return view('test', ['data'=>$data, 'in'=>$in, 'out'=>$out]);
    }
}
