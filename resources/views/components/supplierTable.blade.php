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
  
  <a href="{{route("supplier.create")}}" type="button" class="btn btn-success mt-3"><i class="fa-solid fa-plus"></i> Ajouter</a>
<div class="pt-3">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            
            <tr>
                <th>ID Fournisseur</th>
                <th>Nom Fournisseur</th>
                <th>Adress</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fournisseurs as $fournisseur)
            <tr>
                <td>{{$fournisseur->id}}</td>
                <td>{{$fournisseur->name}}</td>
                <td>{{$fournisseur->adress}}</td>
                <td>{{$fournisseur->phone_number}}</td>
                <td><a style="color: blue" class="px-3" href="{{route('supplier.edit',$fournisseur->id)}}"><i class="fa-solid fa-pen-to-square"></i></a><i style="color: red" onclick="Cdelete({{$fournisseur->id}})" role="button" class="fa-solid fa-trash px-3"></i><form  id="delete{{$fournisseur->id}}" method="POST" action="{{route("supplier.delete",$fournisseur->id)}}">@csrf @method('delete') </form> </td>
            </tr>
            @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
