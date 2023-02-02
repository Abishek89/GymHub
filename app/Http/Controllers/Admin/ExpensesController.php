<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function addexpenses(Request $request){
        $expenses=new Expenses();
        $expenses->expensesname=$request->expensesname;
        $expenses->amount=$request->amount;
        $expenses->date=$request->date;
        $expenses->expensestype=$request->expensestype;
        $expenses->save();
        return redirect()->back();
    }
}
