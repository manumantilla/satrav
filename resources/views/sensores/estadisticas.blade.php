@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Estadísticas de Sensores</h1>
        <canvas id="sensorChart" width="400" height="200"></canvas>
    </div>

    <script>
        // Obtener los datos de Blade
        const datos = @php echo json_encode($datos); @endphp;

        // Extraer tipos y cantidades
        const tipos = datos.map(d => d.tipo);
        const cantidades = datos.map(d => d.cantidad);

        // Configurar la gráfica
        const ctx = document.getElementById('sensorChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: tipos,
                datasets: [{
                    label: 'Cantidad de Sensores',
                    data: cantidades,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
@endsection