<script>
    function Cdelete(id){
      Swal.fire({
        title: "Confirme",
        text: "",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Oui, supprimer!",
        cancelButtonText: "Annuler"
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById(`delete${id}`).submit()
        }
      });
    }
  </script>
  
  <a href="{{route("stock.showadd")}}" type="button" class="btn btn-success mt-3"><i class="fa-solid fa-plus"></i> Ajouter</a>
<div class="pt-3">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            
            <tr>
                <th>ID Produit</th>
                <th>Nom Produit</th>
                <th>Catégorie</th>
                <th>Quantité en Stock</th>
                <th>Prix Unitaire</th>
                <th>Fournisseur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->supplier}}</td>
                <td><a style="color: blue" class="px-3" href="{{route('edit.show',$product->id)}}"><i class="fa-solid fa-pen-to-square"></i></a><i style="color: red" onclick="Cdelete({{$product->id}})" role="button" class="fa-solid fa-trash px-3"></i><form  id="delete{{$product->id}}" method="POST" action="{{route("product.delete",$product->id)}}">@csrf @method('delete') </form> </td>
            </tr>
            @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>