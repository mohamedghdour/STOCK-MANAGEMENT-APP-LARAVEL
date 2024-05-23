<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $suppliers=Supplier::all();
        return view('admin.supplier',compact('suppliers'));
    }
    public function create(){
        return view('admin.addsupplier');
    }

    public function store(Request $request){
        $supplier=New Supplier;
        $supplier->name=$request->name;
        $supplier->adress=$request->adress;
        $supplier->phone_number=$request->phone_number;
        $supplier->save();
        return to_route('supplier.index')->with('success','Fournisseur a ete ajoute avec success');
    }


    public function delete($id){
        Supplier::destroy($id);
        return to_route('supplier.index')->with('success','Fournisseur a ete supprime avec success');
    }
    public function edit($id){
        $supplier=Supplier::find($id);
        return view('admin.editSupplier',compact('supplier'));
    }
    public function update(Request $request,$id){
        $supplier=Supplier::find($id);
        $supplier->name=$request->name;
        $supplier->adress=$request->adress;
        $supplier->phone_number=$request->phone_number;
        $supplier->save();
        return to_route('supplier.index')->with('success','fournisseur a ete modifier avec success');
    }
}
