<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\Income;
use Illuminate\Support\Facades\Auth;

class RecordsController extends Controller
{
    //
    public function incomes(Request $request)
    {
        //dd($request->user()->account->id);
        $income= new Income;
        $income->subcategory_id=$request->subcategory_id;
        $income->total=$request->total;
        $income->account_id=$request->user()->account->id;
        $income->quantity=$request->quantity;
        if ($income->save()) {
          return redirect ('/cat/incomes')->with(['message'=>'Se agregagó el registro correctamente', 'alert'=>'warning']);
        }
        else {
          return redirect ('/cat/incomes')->with(['message'=>'Ocurrió un error al guardar el registro', 'alert'=>'danger']);
        }
    }

    public function expenses(Request $request)
    {
      //dd($request->user()->account->id);
      $expense= new Expense;
      $expense->subcategory_id=$request->subcategory_id;
      $expense->total=$request->total*-1;
      $expense->account_id=$request->user()->account->id;
      $expense->quantity=$request->quantity;
      if ($expense->save()) {
        return redirect ('/record/info/'. $request->subcategory_id)->with(['message'=>'Se agregagó el registro correctamente', 'alert'=>'warning']);
      }
      else {
        return redirect ('/cat/')->with(['message'=>'Ocurrió un error al guardar el registro', 'alert'=>'danger']);
      }
    }
}
