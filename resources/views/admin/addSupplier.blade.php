@extends('layout.main')
<div class="content-wrapper" style="min-height: 1302.4px;" bis_skin_checked="1">

    <section class="content-header">


        <h1>Modifier Fournisseur</h1>
        <form method="POST" action="{{route('supplier.store')}}" class="mt-5" >
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nom de fourniseur</label>
              <input type="text" name="name" class="form-control" id="nomproduit">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Adresse (optional)</label>
              <input type="text" name="adress" class="form-control" id="categorie">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Numero de telephone (optional)</label>
              <input type="number" name="phone_number" class="form-control" id="quantity">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>

    </section>

</div>