<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medical;
use App\Models\Perposal;
use Illuminate\Http\Request;

class PerposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Perposal::all();
        return view('pages.admin.dashboard.perposal.index', compact('invoices'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Medical::all();
        return view('pages.admin.dashboard.perposal.create', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $med = Medical::find($request->order_id);
        $user = User::find($med->user_id);
        Perposal::create([
            'tax' => $request->tax,
            'price_model' => $request->price_model,
            'price_design' => $request->price_design,
            'qty_model' => $request->qty_model,
            'user_id' => $user->id,
            'qty_design' => $request->qty_design,
            'validtill' => $request->validtill,
            'date' => $request->date,
        ]);
        return redirect()->route('perposal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Perposal::find($id);
        $user = User::find($invoice->user_id);
        // dd($invoice);
        return view('pages.admin.invoice', compact('invoice', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Perposal::find($id);
        return view('pages.admin.dashboard.perposal.edit', compact('invoice'));
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
        Perposal::find($id)->update([
            'tax' => $request->tax,
            'price_model' => $request->price_model,
            'price_design' => $request->price_design,
            'qty_model' => $request->qty_model,
            'qty_design' => $request->qty_design,
            'validtill' => $request->validtill,
            'date' => $request->date,
        ]);
        return redirect()->route('perposal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perposal::find($id)->delete();
        return redirect()->route('perposal.index');
    }
}