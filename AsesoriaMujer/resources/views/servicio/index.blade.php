@extends('layout.base')

@push('stylesheets')
    <style>
        .service-data-line {
            display: flex;
            margin-bottom: 15px;
        }

        .data-value {
            margin-left: 10px;
            display: flex;
        }

        .organization-data {
            padding: 0 30px !important;
        }
    </style>
@endpush

@section('title', 'Servicios')

@section('container')
    <form method="GET" action="/servicios">
            {{ csrf_field() }}   
        <div class="row">
            <div class="col s12">
                <div class="input-field">
                    <button type="submit">
                        <i class="material-icons prefix">search</i>
                    </button>
                    <input type="text" id="search" name="busqueda">
                    <label for="icon-prefix">Buscar ...</label>
                </div>
            </div>
        </div>
    </form>

    <ul class="tabs">
        <li class="tab col s4 disabled">
            <a class="purple-text text-lighten-2" href="{{url('organizaciones')}}" onclick="javascript:window.location.href='{{url('organizaciones')}}'" style="cursor: pointer;">
                Organizaciones
            </a>
        </li>
        <li class="tab col s4">
            <a class="active purple-text" href="#servicios">
                Servicios
            </a>
        </li>
    </ul>

    <div id="servicios">
        @foreach ($servicios as $servicio)
            <div class="section">
                <div class="row">
                    <div class="col s12">
                        <ul class="organization-data">
                            <li class="service-data-line">
                                <i class="material-icons purple-text">business</i>
                                <span class="data-value">
                                    <a href="{{url('/servicios/'.$servicio->id)}}" class="purple-text bold">
                                        {{$servicio->titulo}}
                                    </a>
                                </span>
                            </li>
                            <li class="service-data-line">
                                <i class="material-icons purple-text">attach_money</i>
                                <span class="data-value">
                                    {{$servicio->costo ? 'S/. '.$servicio->costo.'.00' : 'Gratuito'}}
                                </span>
                            </li>
                            <li class="service-data-line">
                                <i class="material-icons purple-text">rate_review</i>
                                <span class="data-value">
                                    {{$servicio->promedioResena()}}
                                    <span class="rateYo-rating" data-rating="{{$servicio->promedioResena()}}" data-rateyo-read-only="true"></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        @endforeach
    </div>
@endsection


