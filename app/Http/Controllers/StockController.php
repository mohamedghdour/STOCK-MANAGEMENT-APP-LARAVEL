<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function show(){
        // $products = [
        //     [
        //         'name' => 'Laptop Dell XPS 13',
        //         'category' => 'Ordinateurs',
        //         'quantity' => 50,
        //         'price' => '1200.00',
        //         'supplier' => 'Dell',
        //     ],
        //     [
        //         'name' => 'iPhone 14 Pro',
        //         'category' => 'Smartphones',
        //         'quantity' => 30,
        //         'price' => '999.00',
        //         'supplier' => 'Apple',
        //     ],
        //     [
        //         'name' => 'Samsung Galaxy S21',
        //         'category' => 'Smartphones',
        //         'quantity' => 45,
        //         'price' => '850.00',
        //         'supplier' => 'Samsung',
        //     ],
        //     [
        //         'name' => 'Canon EOS R5',
        //         'category' => 'Caméras',
        //         'quantity' => 15,
        //         'price' => '3500.00',
        //         'supplier' => 'Canon',
        //     ],
        //     [
        //         'name' => 'Lenovo ThinkPad X1',
        //         'category' => 'Ordinateurs',
        //         'quantity' => 25,
        //         'price' => '1100.00',
        //         'supplier' => 'Lenovo',
        //     ],
        //     [
        //         'name' => '	AirPods Pro',
        //         'category' => 'Accessoires',
        //         'quantity' => 60,
        //         'price' => '1100.00',
        //         'supplier' => 'Lenovo',
        //     ],
        //     [
        //         'name' => 'Asus ROG Strix',
        //         'category' => 'Ordinateurs',
        //         'quantity' => 20,
        //         'price' => '1500.00',
        //         'supplier' => 'Asus',
        //     ],
        //     [
        //         'name' => 'GoPro Hero 9',
        //         'category' => 'Caméras',
        //         'quantity' => 35,
        //         'price' => '400.00',
        //         'supplier' => 'GoPro',
        //     ],
        //     [
        //         'name' => 'Microsoft Surface Pro',
        //         'category' => 'Tablettes',
        //         'quantity' => 40,
        //         'price' => '950.00',
        //         'supplier' => 'Microsoft',
        //     ],
        //     [
        //         'name' => 'Sony WH-1000XM4',
        //         'category' => 'Accessoires',
        //         'quantity' => 70,
        //         'price' => '300.00',
        //         'supplier' => 'Lenovo',
        //     ]            // Add more arrays for additional products as needed
        // ];
    
        // foreach ($products as $productData) {
        //     Product::create($productData);
        // }
            $products=Product::all();

        return view('admin.stock',compact('products'));
    }


    public function delete(Request $request){
        Product::destroy($request->id);
        return to_route('stock.show')->with('success','Produit a ete supprime avec success');
    }

    public function edit(Request $request){
        $product=Product::find($request->id);
        return view('admin.editStock',compact('product'));
    }

    public function update(Request $request){
        $values=['name'=>$request->name,
        'category'=>$request->category,
        'price'=>$request->price,
        'quantity'=>$request->quantity,
        'supplier_id'=>$request->supplier_id];
        $product=Product::find($request->id);
        $product->fill($values)->save();
        return to_route('stock.show')->with('success','Produit a ete modifier avec success');
        
    } 

    public function showadd(){
        $suppliers=Supplier::all();
        return view('admin.addStock',compact('suppliers'));
    }

    public function add(Request $request){
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'quantity'=>'required|integer',
            'supplier_id'=>'required|integer',
        ]);
        $productinfo=['name'=>$request->name,
        'category'=>$request->category,
        'price'=>$request->price,
        'quantity'=>$request->quantity,
        'supplier_id'=>$request->supplier_id];
        Product::create($productinfo);
        return to_route('stock.show')->with('success','Produit a ete ajoute avec success');

    }
}
