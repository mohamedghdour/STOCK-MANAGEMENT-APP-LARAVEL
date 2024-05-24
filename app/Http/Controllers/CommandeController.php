<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Commande;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes=Commande::distinct()->pluck('id');
        foreach($commandes as $id){
            $commandes_products=Commande::where('id',$id)->sum('quantity');
        }
        dd($commandes_products);
        return view('admin.commandes',compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products=Product::all();
        return view('admin.addCommande',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $max_id=Commande::max('id');
        if(is_null($max_id)){
            $max_id=1;
        }
        else{
            $max_id=$max_id+1;
        }
        
        foreach($request->input() as $value=>$key){
            if(is_numeric($value)){
                if((int)$key>0){
                    Commande::create([
                        'id'=>$max_id,
                        'product_id'=>$value,
                        'quantity'=>(int)$key,
                    ]);
                }
                
            }
        }
        $order=Commande::findMany($max_id);
        foreach($order as $date){
            $date->date=now();
        }
        return to_route('commande.index')->with('success','commande a ete cree avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
