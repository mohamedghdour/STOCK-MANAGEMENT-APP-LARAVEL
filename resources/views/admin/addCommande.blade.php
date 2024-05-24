@extends('layout.main')
<style>
  /* Chrome, Safari, Edge, Opera */
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
  
  /* Firefox */
  input[type=number] {
    -moz-appearance: textfield;
  }
  </style>
<div class="content-wrapper" style="min-height: 1302.4px;" bis_skin_checked="1">

    <section class="content-header">


        <h1>Ajouter Commande</h1>
        <form method="POST" action="{{route('commande.store')}}" class="mt-3">
          @csrf
            <table id="example" class="table table-striped table-bordered" style="width:70%">
                <thead>

                    <tr>
                        <th>ID Produit</th>
                        <th>Nom Produit</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td class="d-flex justify-content-center" ><a onclick="document.getElementById('input{{$product->id}}').stepDown()" class="btn btn-danger" >
                          <i  class="fa-solid fa-minus"></i>
                            </a><input readonly value="0" name="{{$product->id}}" id="input{{$product->id}}" min="0" max="{{$product->quantity}}" style="width: 10%;text-align:center;" type="number"><a onclick="document.getElementById('input{{$product->id}}').stepUp()" class="btn btn-success" >
                              <i  class="fa-solid fa-plus"></i>
                                </a></td>
                        {{-- <td><a style="color: blue" class="px-3" href="{{route('supplier.edit',$fournisseur->id)}}"><i class="fa-solid fa-pen-to-square"></i></a><i style="color: red" onclick="Cdelete({{$fournisseur->id}})" role="button" class="fa-solid fa-trash px-3"></i>
                        <form id="delete{{$fournisseur->id}}" method="POST" action="{{route("supplier.delete",$fournisseur->id)}}">@csrf @method('delete') </form>
                        </td> --}}
                    </tr>
                    @endforeach
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
    </section>

</div>
