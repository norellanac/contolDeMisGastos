<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\Income;

class RecordsController extends Controller
{
    //
    public function incomes(Request $request)
    {
        //auth()->user->account();
        $income= new Income;
        $income->subcategory_id=$request->subcategory_id;
        $income->total=$request->total;
        $income->account_id=1;
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
      $expense= new Expense;
      $expense->subcategory_id=$request->subcategory_id;
      $expense->total=$request->total;
      $expense->quantity=$request->quantity;
      if ($expense->save()) {
        return redirect ('/cat/incomes')->with(['message'=>'Se agregagó el registro correctamente', 'alert'=>'warning']);
      }
      else {
        return redirect ('/cat/incomes')->with(['message'=>'Ocurrió un error al guardar el registro', 'alert'=>'danger']);
      }
    }
}
