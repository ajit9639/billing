<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $invoice = DB::select('SELECT items.item_name as name ,invoices.* FROM `invoices` JOIN `items` WHERE invoices.`item_name`= items.id');    
        
        // dd($invoice);
        $invoice = Invoice::get();
        $item = Item::get();        
        // $item_name = Item::find($id)->Customer;
        return view('invoice.index',['invoice' => $invoice , 'item' => $item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       Invoice::insert($request->except('_token'));    
       return redirect('/invoice/index');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::where('id',$id)->first();
        return view('/invoice/edit',['invoice' => $invoice]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoice = Invoice::where('id',$id)->first();
        $invoice->date = $request->date;
        // $invoice->invoice_no = $request->invoice_no;
        $invoice->customer_name = $request->customer_name;
        $invoice->total_qty = $request->total_qty;
        $invoice->sub_total = $request->sub_total;
        $invoice->gst_amt = $request->gst_amt;
        $invoice->total_amt = $request->total_amt;
        $invoice->save();
        return redirect('/invoice/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $invoice = Invoice::get('id',$id)->first();
        $invoice->delete();
        return redirect('/invoice/index');
    }

    public function print($id){
        $invoice = Invoice::where('id',$id)->first();
        return view('/invoice/print',['invoice' => $invoice]);      
    }




}
