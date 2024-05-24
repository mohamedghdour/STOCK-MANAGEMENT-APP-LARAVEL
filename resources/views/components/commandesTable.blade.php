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
  
  <a href="{{route("commande.create")}}" type="button" class="btn btn-success mt-3"><i class="fa-solid fa-plus"></i> Ajouter</a>
<div class="pt-3">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            
            <tr>
                <th>ID Commande</th>
                <th>Total Producs</th>
                <th>Date Commande</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $commande)
            <tr>
                <td>{{$commande->id}}</td>
                <td>{{$commande->total_quantity}}</td>
                <td>{{$commande->created_at}}</td>
                <td class="d-flex justify-content-center"><a class="btn btn-success mr-4" href="{{route('commande.details',$commande->id)}}"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
            @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>