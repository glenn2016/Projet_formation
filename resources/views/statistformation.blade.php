@include('Menue')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
<div class="container mt-4 col-md-5" style="border:none;">
    <div>
        <br>
        <p class="text-center" style="font-weight:600; font-size:25px;">Statistiques des formation en cours et en attente </p>
    </div>
</div>


<div class="card mb-3">
    
    <div class="card-body">
           <center>
            <div class="content-head" style="width:40%;">
                    <canvas id="chart" width="200" height="100"></canvas>
            </div>
</center>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('chart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['En cours', 'En attente'],
                    datasets: [{
                        label: 'Statistiques des formations',
                        data: [
                            {{ $formations_en_cours->count() }},
                            {{ $formations_en_attente->count() }}
                        ],
                        backgroundColor: [
                            'black',
                            'blue',
                        ],
                        borderColor: [
                            'black',
                            'blue',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>

@include('Menuef')