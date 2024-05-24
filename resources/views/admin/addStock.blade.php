@extends('layout.main')
<div class="content-wrapper" style="min-height: 1302.4px;" bis_skin_checked="1">


    <section class="content-header">


        <h1>Modifier Stock</h1>
        <form method="POST" action="{{route('stock.add')}}" class="mt-5" >
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nom de produit</label>
              <input required type="text" name="name" class="form-control" id="nomproduit">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Categorie</label>
              <input required type="text" name="category" class="form-control" id="categorie">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Quantity</label>
              <input required type="number" name="quantity" class="form-control" id="quantity">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Prix unitaire</label>
              <input required type="number" name="price" class="form-control" id="price">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Supplier</label><br>
              <select class="form-select form-select-lg mb-3" name="supplier_id" >
                <option aria-readonly="true" >Selectionner Fournisseur</option>
                @foreach($suppliers as $supplier)
                  <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                @endforeach
                  <option value=""><a href="google.com">sdds</a></option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>

    </section>

</div>