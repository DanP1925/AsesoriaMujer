@extends('layout.base')

@push('stylesheets')
  <style>
    .line {
      display: flex;
      margin: 20px 0;
    }

    .data {
      margin-left: 10px;
    }
  </style>
@endpush

@section('title', $servicio->titulo)

@section('container')
<div class="container">
  <p>
    <h5 class="bold purple-text">{{$servicio->titulo}}</h5>
  </p>
  <img src="{{asset('img/sample-1.jpg')}}" alt="" class="responsive-img">
  <p>
    <div class="line">
      <span>{{$servicio->nivel}}</span>
      <span class="rateYo-rating" data-rating="{{$servicio->nivel}}" data-rateyo-read-only="true"></span>
    </div>
  </p>
  <p>{{$servicio->descripcion}}</p>
  <h6 class="bold purple-text">Contacto:</h6>
  <p>
  	@if($servicio->idOrganizacion != 'NO APLICA')
      <div class="line">
        <i class="material-icons purple-text">person</i>
        <span class="data">
          {{$servicio->organizacion()->get()->first()->titulo}}
        </span>
      </div>
    @endif
    @if($servicio->costo != 'NO APLICA')
      <div class="line">
        <i class="material-icons purple-text">attach_money</i>
        <span class="data">
          {{$servicio->costo}}.00
        </span>
      </div>
    @endif
    <div class="line">
      <i class="material-icons purple-text">schedule</i>
      <span class="data">
        {{Carbon::createFromFormat('H:i:s',$servicio->comienzoAtencion)->format('h:i a')}}
        -
        {{Carbon::createFromFormat('H:i:s',$servicio->finAtencion)->format('h:i a')}}
      </span>
    </div>
  </p>
  <h6 class="bold purple-text">Opiniones:</h6>
  @foreach($servicio->resenas()->get() as $resena)
    <p class="resena-container">
      <div class="line">
        <span>{{$resena->nivel}}</span>
        <span class="rateYo-rating" data-rating="{{$resena->nivel}}" data-rateyo-read-only="true"></span>
      </div>
      @if($resena->created_at)
        <div class="italic blue-grey-text line">
          {{(new Carbon($resena->created_at))->format('d/m/Y')}}
        </div>
      @endif
      <p>{{$resena->descripcion}}</p>
    </p>
  @endforeach
  
</div>
@endsection
