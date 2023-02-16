<?php

namespace App\Http\Controllers\Expenses;

use App\Http\Controllers\Controller;
use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'expensesname' => 'required',
                'amount'  => 'required',
                'date'    => 'required',
                'expensestype'    => 'required',

            ]
        );
        $expenses=new Expenses();
        $expenses->expensesname=$request->expensesname;
        $expenses->amount=$request->amount;
        $expenses->date=$request->date;
        $expenses->expensestype=$request->expensestype;
        $expenses->save();
        return redirect('viewexpenses');
    }

    public function add(){
        $expenses=Expenses::all();
        return view('admin.expenses.addexpenses');
    }

    //get method to view the added plan
    public function view(){
        return view('admin.expenses.viewexpenses');
    }

     //get method to delete the expenses
     public function delete($id)
     {
         $expenses = Expenses::find($id);
         if (!is_null($expenses)) {
             $expenses->delete();
         }
         return redirect('viewexpenses');
     }
 
    //method to edit the expenses
     public function edit($id)
     {
         $expenses = Expenses::find($id);
         return view('admin.expenses.editexpenses', compact('expenses'));
     }

     //method to update the expenses
     public function update(Request $request, $id)
     {
        $expenses=new Expenses();
        $expenses->expensesname=$request->expensesname;
        $expenses->amount=$request->amount;
        $expenses->date=$request->date;
        $expenses->expensestype=$request->expensestype;
        $expenses->save();
        return redirect('viewexpenses');
     }


}
