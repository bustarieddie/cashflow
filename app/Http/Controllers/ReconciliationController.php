<?php
namespace App\Http\Controllers; use App\Models\DailyBalance; use Illuminate\Http\Request;
class ReconciliationController extends Controller { public function store(Request $request){$data=$request->validate(['balance_date'=>'required|date','opening_balance'=>'required|numeric|min:0','actual_closing'=>'nullable|numeric|min:0','notes'=>'nullable|string|max:2000']);$data['updated_by']=$request->user()->id;DailyBalance::updateOrCreate(['balance_date'=>$data['balance_date']],$data);return back()->with('success','Daily balance updated.');} }
