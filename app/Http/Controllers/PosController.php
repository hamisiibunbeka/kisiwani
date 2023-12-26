<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{
    //Start sales method
    public function index( Request $request){

        $date_from = $request->input('date_from');
        $date_to = $request->input('date_to');
        $profit = 0;
        $purchase_subtotal = 0;
        $selling_subtotal = 0;

        if(empty($date_from || $date_to)){
            $profit = Sales::sum('profit');
        }else{
            $profit = DB::table('sales')
                ->whereBetween('transaction_date', [$request->date_from, $request->date_to])
                ->orderBy('transaction_date')
                ->sum('profit');
        }

        if(empty($date_from || $date_to)){
            $purchase_subtotal = Sales::sum('buying_price_value');
        }else{
            $purchase_subtotal = DB::table('sales')
                ->whereBetween('transaction_date', [$request->date_from, $request->date_to])
                ->orderBy('transaction_date')
                ->sum('buying_price_value'); 
        }
        
        if(empty($date_from || $date_to)){
            $selling_subtotal = Sales::sum('selling_price_value');
        }else{
            $selling_subtotal = DB::table('sales')
            ->whereBetween('transaction_date', [$request->date_from, $request->date_to])
            ->orderBy('transaction_date')
            ->sum('selling_price_value'); 
        }     

$data['q'] = $request->query('q');
$data['date_from'] = $request->query('date_from');
$data['date_to'] = $request->query('date_to');

$query = DB::table('sales')
    ->where(function($query) use ($data){
        $query->orwhere('transaction_date', 'like', '%' . $data['q'] . '%' );
    })
    ->select('sales.*');

    if ($data['date_from'])
        $query->where('sales.transaction_date', '>=', $data['date_from']);
    if ($data['date_to'])
        $query->where('sales.transaction_date', '<=', $data['date_to']);
    //dd($purchase_subtotal);
    $data['sales'] = $query->orderBy('transaction_date', 'asc')->get();        
    return view('pos.index', $data, compact('profit', 'purchase_subtotal', 'selling_subtotal'));          
}
//End sales method


    public function dashboard(){
        $purchase_subtotal = Sales::sum('buying_price_value');
        $selling_subtotal = Sales::sum('selling_price_value');
        $profit = Sales::sum('profit');
        $margin_calc = (($selling_subtotal-$purchase_subtotal)/$selling_subtotal);
        $profit_margin = $margin_calc*'100';

        return view('master.dashboard', compact('purchase_subtotal', 'selling_subtotal', 'profit', 'profit_margin', 'date_from', 'date_to'));
    }

    public function create(){
        return view('pos.create');
    }

    public function store(Request $request){
        foreach ($request->product_name as $key => $value) {
            $data = [
                'transaction_date' => $request->transaction_date,
                'product_name' => $request->product_name[$key],
                'qty' => $request->qty[$key],
                'buying_price' => $request->buying_price[$key],
                'selling_price' => $request->selling_price[$key],
                'buying_price_value' => $request->buying_price_value[$key],
                'selling_price_value' => $request->selling_price_value[$key],
                'profit' => $request->profit[$key],
                'created_at' => Carbon::now()
            ];
            DB::table('sales')->insert($data);
        }
                         
        $notification = array(
            'message' => 'Sales added successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('pos')->with($notification);
    }


    public function edit($id)
    {   
        $sale = Sales::findorfail($id);
        return view('pos.edit', compact('sale'));
    }

    public function update(Request $request, $id){
        $sale = Sales::findorfail($id);
        foreach ($request->product_name as $key => $value) {
            $data = [
                'transaction_date' => $request->transaction_date,
                'product_name' => $request->product_name[$key],
                'qty' => $request->qty[$key],
                'buying_price' => $request->buying_price[$key],
                'selling_price' => $request->selling_price[$key],
                'buying_price_value' => $request->buying_price_value[$key],
                'selling_price_value' => $request->selling_price_value[$key],
                'profit' => $request->profit[$key],
                'created_at' => Carbon::now()
            ];
            
        }

        $sale->update($data);

            $notification = array(
                'message' => 'Sales updated successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('pos')->with($notification);
                                
    }

    public function destroy(string $id)
    {
        $pos = Sales::findorfail($id);
        $pos->delete();

        $notification = array(
            'message' => 'Sales deleted successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('pos')->with($notification);
    }
}
    
