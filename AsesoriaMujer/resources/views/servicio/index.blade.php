<h1>pagina de servicios</h1>
@foreach ($servicios as $servicio)
    <a href="/servicios/{{ $servicio->id}}">
        <h4>{{ $servicio->titulo }}</h4>
        <h4>{{ $servicio->promedioResena() }}</h4>
    </a>
@endforeach
