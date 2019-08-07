<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
use Illuminate\Support\Facades\Auth;
use App\Income;
use App\Expense;
use App\Account;
use App\Subcategory;

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
        $chartSubData = DB::select('select subcategories.name, count(expenses.subcategory_id) as total FROM expenses  JOIN subcategories  ON expenses.subcategory_id=subcategories.id where account_id='. auth()->user()->account->id . '  GROUP BY  (expenses.subcategory_id) order by total desc;'  );
        //$data=DB::select('select * from incomes where account_id=' . auth()->user()->account->id . ' union all select * from expenses where account_id='. auth()->user()->account->id .' order by created_at desc limit 5; ');
        $data=Expense::where('account_id', '=' ,auth()->user()->account->id )->orderBy('id', 'desc')->skip(0)->take(5)->get();
        //dd($data->first);
      }
      else {
        // query que une tabla de ingresos y egresos
        //$data=DB::select('select * from incomes union all select * from expenses order by created_at desc limit 5; ');
        $data=Expense::where('id', '>' ,0 )->orderBy('id', 'desc')->skip(0)->take(5)->get();
        $in=2900;
        $out=1350 * -1;
        $chartSubData = DB::select('select subcategories.name, count(expenses.subcategory_id) as total FROM expenses  JOIN subcategories  ON expenses.subcategory_id=subcategories.id where expenses.deleted_at=null GROUP BY  (expenses.subcategory_id) order by total desc;');
      }
      //seccion para la informacion de los graficoss
      //seleciona los registros agrupando y contando por categoriass
      $subcategory= DB::selectOne('select * from subcategories where id=9');
      //dd($chartSubData);
          return view('test', ['data'=>$data, 'in'=>$in, 'out'=>$out, 'chartSubData'=>$chartSubData]);
    }
}
