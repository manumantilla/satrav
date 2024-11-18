@extends('layouts.app')

@section('title', 'Ubicaciones del Vehículo')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet" />
    <style>
        #map {
            width: 100%;
            height: 450px;
        }
    </style>
</head>
<body>
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-6">@yield('title'): {{$vehiculo->matricula}}</h1>
        <h2>Valor Adelanto: {{$viaje->adelanto}}</h2>
        <h4>Estado: {{$viaje->estado}}</h4>
        <h4>Comentarios: {{$viaje->comentarios}}</h4>
        <h2>Nombre Dueño:{{$vehiculo->dueno->name}}</h2>
        <div id="map"></div>
        <button id="outdoorsView" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Vista Exterior</button>
        <button id="satelliteView" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Vista Satélite</button>
    </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibWRlbGdhZG82ODIiLCJhIjoiY20wc2l4aXF5MGdmeDJqcHQ1cXgxdG5xYyJ9.TdtsJ6sajv7haaFQkrc5Og';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/outdoors-v11',
            center: [{{ $ubicaciones->first()->longitud ?? 0 }}, {{ $ubicaciones->first()->latitud ?? 0 }}],
            zoom: 12
        });

        // Agregar marcadores para cada ubicación
        var ubicaciones = @json($ubicaciones);

        ubicaciones.forEach(function(ubicacion) {
            // Crear un marcador
            var marker = new mapboxgl.Marker()
                .setLngLat([ubicacion.longitud, ubicacion.latitud])
                .addTo(map);
            
            // Agregar popup con la información de la hora
            marker.setPopup(new mapboxgl.Popup({ offset: 25 })
                .setHTML('<p><strong>Hora registrada:</strong> ' + ubicacion.time + '</p>'));
        });

        // Cambiar a vista exterior
        document.getElementById('outdoorsView').addEventListener('click', function() {
            map.setStyle('mapbox://styles/mapbox/outdoors-v11');
        });

        // Cambiar a vista satélite
        document.getElementById('satelliteView').addEventListener('click', function() {
            map.setStyle('mapbox://styles/mapbox/satellite-v9');
        });
    </script>
</body>
</html>
@endsection
