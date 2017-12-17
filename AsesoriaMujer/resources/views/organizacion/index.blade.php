<h1>Organizaciones</h1>
<ul>
@foreach ($organizaciones as $organizacion)
    <div>
    <a href="/organizaciones/{{ $organizacion->id}}">
        {{ $organizacion->titulo}}
    </a>
    {{ $organizacion->promedioResena() }}
    {{ $organizacion->telefono}}
    {{ $organizacion->ubicacion}}
    </div>
@endforeach
</ul>
<?php echo $organizaciones->render(); ?>
