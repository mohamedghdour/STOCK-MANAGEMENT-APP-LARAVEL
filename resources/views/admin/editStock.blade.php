@extends('layout.main')
<div class="content-wrapper" style="min-height: 1302.4px;" bis_skin_checked="1">
  @if(session('success'))
  <x-alert type="success" :message="session('success')" />
  @endif

    <section class="content-header">


        <h1>Modifier Stock</h1>
        <form method="POST" action="{{route('product.update',$product->id)}}" class="mt-5" >
            @csrf
            @method("PUT")
            <div class="form-group">
              <label for="exampleInputEmail1">Nom de produit</label>
              <input value="{{$product->name}}" type="text" name="name" class="form-control" id="nomproduit">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Categorie</label>
              <input value="{{$product->category}}" type="text" name="category" class="form-control" id="categorie">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Quantity</label>
              <input value="{{$product->quantity}}" type="number" name="quantity" class="form-control" id="quantity">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Prix unitaire</label>
              <input value="{{$product->price}}" type="text" name="price" class="form-control" id="price">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Supplier</label>
              <input value="{{$product->supplier_id}}" type="text" name="supplier_id" class="form-control" id="supplier">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>

    </section>

</div>