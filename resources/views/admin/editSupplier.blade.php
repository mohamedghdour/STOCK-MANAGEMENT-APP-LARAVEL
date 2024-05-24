@extends('layout.main')
<div class="content-wrapper" style="min-height: 1302.4px;" bis_skin_checked="1">

    <section class="content-header">


        <h1>Modifier Fournisseur</h1>
        <form method="POST" action="{{route('supplier.update',$supplier->id)}}" class="mt-5" >
            @csrf
            @method("PUT")
            <div class="form-group">
              <label for="exampleInputEmail1">Nom de fournisseur</label>
              <input required value="{{$supplier->name}}" type="text" name="name" class="form-control" id="nomproduit">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Adresse</label>
              <input required value="{{$supplier->adress}}" type="text" name="adress" class="form-control" id="adress">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Numero de telephone</label>
              <input required value="{{$supplier->phone_number}}" type="text" name="phone_number" class="form-control" id="phone_number">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>

    </section>

</div>