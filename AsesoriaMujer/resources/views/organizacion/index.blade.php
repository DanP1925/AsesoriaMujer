 <h1>Organizaciones</h1>
<ul>
@foreach ($organizaciones as $organizacion)
    <li>{{ $organizacion->titulo}}</li>
@endforeach
</ul>
