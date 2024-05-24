@extends('layout.main')

@section("content")
<div class="content-wrapper" style="min-height: 1302.4px;" bis_skin_checked="1">
    @if(session('success'))
    <x-alert type="success" :message="session('success')" />
    @endif

    <section class="content-header">


        <h1>Dashboard</h1>
        <div class="row" bis_skin_checked="1">
            <div class="col-lg-3 col-6" bis_skin_checked="1">

                <div class="small-box bg-info" bis_skin_checked="1">
                    <div class="inner" bis_skin_checked="1">
                        <h3>{{$totalcommandes}}</h3>
                        <p>Commandes</p>
                    </div>
                    <div class="icon" bis_skin_checked="1">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <a href="{{route('commande.index')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6" bis_skin_checked="1">

                <div class="small-box bg-success" bis_skin_checked="1">
                    <div class="inner" bis_skin_checked="1">
                        <h3>{{$produitsvendu}}</h3>
                        <p>Produits Vendu</p>
                    </div>
                    <div class="icon" bis_skin_checked="1">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                    <a href="{{route('commande.index')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6" bis_skin_checked="1">

                <div class="small-box bg-warning" bis_skin_checked="1">
                    <div class="inner" bis_skin_checked="1">
                        <h3>{{$produitsenstock}}</h3>
                        <p>Produits en stock</p>
                    </div>
                    <div class="icon" bis_skin_checked="1">
                        <i class="fa-solid fa-chart-simple"></i>
                    </div>
                    <a href="{{route('stock.show')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6" bis_skin_checked="1">

                <div class="small-box bg-danger" bis_skin_checked="1">
                    <div class="inner" bis_skin_checked="1">
                        <h3>{{$totalsuppliers}}</h3>
                        <p>Total des fournisseurs</p>
                    </div>
                    <div class="icon" bis_skin_checked="1">
                        <i class="fa-solid fa-truck-field"></i>
                    </div>
                    <a href="{{route('supplier.index')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

        </div>
        <div>
            <canvas id="myChart" width="100%" height="20"></canvas>

        </div>

    </section>
    <script>
        function getLastFiveMonthsLabels() {
            const today = new Date();
            let labels = [];

            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            for (let i = 0; i < 5; i++) {
                let month = today.getMonth() - i;
                let year = today.getFullYear();
                if (month < 0) {
                    month += 12;
                    year -= 1;
                }
                labels.push(monthNames[month]);
            }

            return labels;
        }

        const lastFiveMonthsLabels = getLastFiveMonthsLabels();
        console.log(lastFiveMonthsLabels);

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {

            type: 'bar', // Specify the type of chart
            data: {
                labels: getLastFiveMonthsLabels()
                , datasets: [{
                    label: 'Total des produits vendu trie par mois'
                    , data: [{{$data[0]}},{{$data[1]}},{{$data[2]}},{{$data[3]}},{{$data[4]}}]
                    , backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'
                        , 'rgba(54, 162, 235, 0.2)'
                        , 'rgba(255, 206, 86, 0.2)'
                        , 'rgba(75, 192, 192, 0.2)'
                        , 'rgba(153, 102, 255, 0.2)'
                        , 'rgba(255, 159, 64, 0.2)'
                    ]
                    , borderColor: [
                        'rgba(255, 99, 132, 1)'
                        , 'rgba(54, 162, 235, 1)'
                        , 'rgba(255, 206, 86, 1)'
                        , 'rgba(75, 192, 192, 1)'
                        , 'rgba(153, 102, 255, 1)'
                        , 'rgba(255, 159, 64, 1)'
                    ]
                    , borderWidth: 1
                }]
            }
            , options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>
    


</div>
@endsection






