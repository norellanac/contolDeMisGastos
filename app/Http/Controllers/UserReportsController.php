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

class UserReportsController extends Controller
{
  //


  public function index()
  {

    $data=Expense::where('account_id', '=' ,auth()->user()->account->id )->orderBy('id', 'desc')->get();
    $totals = DB::select('select count(Ex.subcategory_id) as records, Sub.name as category, sum(Ex.total) as total FROM expenses Ex,  subcategories Sub  where account_id='. auth()->user()->account->id . '  and Ex.subcategory_id=Sub.id group by subcategory_id order by total asc;' );
    return view('reports.index', ['data'=>$data,'totals'=>$totals]);
  }


  public function report(Request $request)  {
    $from = new \DateTime($request->fromDate);
    $to = new \DateTime($request->toDate);
    //echo ($from->modify('+6 hours')->format('Y-m-d H:i'));
    //dd($to->modify('+30 hours')->format('Y-m-d H:i'));
    /*$records=$users = DB::table('records')
    ->where('user_id','=', auth()->user()->id)
    ->whereBetween('created_at', [$from->modify('+6 hours')->format('Y-m-d H:i'), $to->modify('+30 hours')->format('Y-m-d H:i')])->get();
    //dd($records);*/
    //dd($request);
    $data=Expense::where('account_id', '=' ,auth()->user()->account->id )->orderBy('id', 'desc')->get();
    $totals = DB::select("select count(Ex.subcategory_id) as records, Sub.name as category, sum(Ex.total) as total FROM expenses Ex,  subcategories Sub  where account_id=". auth()->user()->account->id
    . " and Ex.subcategory_id=Sub.id and  Ex.created_at >= '"
    . $from->modify('+6 hours')->format('Y-m-d H:i') . "' and Ex.created_at <= '"
    . $to->modify('+30 hours')->format('Y-m-d H:i') . "' group by subcategory_id order by total asc;" );
    return view('reports.index', ['data'=>$data,'totals'=>$totals]);
  }

}
