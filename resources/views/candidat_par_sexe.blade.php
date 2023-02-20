@include('Menue')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body> <br>

    <div class="container mt-4 col-md-5" style="border:none;">
    <div>
        <br>
        <p class="text-center" style="font-weight:600; font-size:25px;">Nombre De Candidat Par Sexe</p>
    </div>
</div>
    <div class="card mb-3">
    
    <div class="card-body">
             <center>
            <div class="content-head" style="width:40%;">
                    <canvas id="repartition-par-sexe" width="200" height="100"></canvas>
            </div>
            </center>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('repartition-par-sexe').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Repartition des candidats par sexe',
                    data: {!! json_encode($data) !!},
                    backgroundColor: [
                        'pink',
                        'blue',
                    ],
                    borderColor: [
                        'pink',
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
@include('Menuef')
