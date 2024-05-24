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
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $id => $commande)
            <tr>
                <td>{{$id}}</td>
                <td>{{$commande[$id-1]->product_id}}</td>
                <td>{{$commande[$id-1]->created_at}}</td>
            </tr>
            @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>