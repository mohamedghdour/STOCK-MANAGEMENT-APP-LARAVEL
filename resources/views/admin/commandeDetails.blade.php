@extends('layout.main')
<div class="content-wrapper" style="min-height: 1302.4px;" bis_skin_checked="1">

    <section class="content-header">


        <h1>Commande Details</h1>
        <div>
            <h2>ID: {{$commandes[0]->id}}</h2>
            <h2>DATE: {{$commandes[0]->created_at}}</h2>
            <h2>PRIX TOTALE: 
                <span style="display: none" >{{$totalPrice=0}}</span>
                    @foreach($productsinfo as $product)
                    @php
                    $totalPrice += $product->price * $commandes[$loop->index]->quantity; // Calculate total price
                    @endphp
                    @endforeach
                    {{$totalPrice}}
            </h2>
            <h2>DETAILS:</h2>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Produit</th>
                        <th>Nom Produit</th>
                        <th>Prix Unitaire</th>
                        <th>Quantity</th>
                        <th>Prix * Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <span style="display: none" >{{$i=0}}</span>
                    @foreach($productsinfo as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$commandes[$i]->quantity}}</td>
                        <td>{{$product->price*$commandes[$i]->quantity}}</td>
                        <span style="display: none" >{{$i++}}</span>
                    </tr>
                    @php
                    $totalPrice += $product->price * $commandes[$loop->index]->quantity; // Calculate total price
                @endphp
                    @endforeach
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>

    </section>

</div>