 @extends('layout.base')

@push('stylesheets')
    <style>
        .organization-data-line {
            display: flex;
            margin-bottom: 15px;
        }

        .data-value {
            margin-left: 10px;
        }
    </style>
@endpush

 @section('title', 'Organizaciones')

 @section('container')
    <div class="row">
        <div class="col s12">
            <div class="input-field">
                <i class="material-icons prefix">search</i>
                <input type="text" id="search">
                <label for="icon-prefix">Buscar ...</label>
            </div>
        </div>
    </div>

    <ul class="tabs">
        <li class="tab col s4">
            <a class="active purple-text" href="#organizaciones">
                Organizaciones
            </a>
        </li>
        <li class="tab col s4">
            <a class="purple-text text-lighten-2" href="#servicios">
                Servicios
            </a>
        </li>
        <li class="tab col s4">
            <a class="purple-text text-lighten-2" href="#eventos">
                Eventos
            </a>
        </li>
    </ul>

    <div id="organizaciones">
        @foreach ($organizaciones as $organizacion)
            <div class="section">
                <div class="row">
                    <div class="col s3">
                        <img src="https://upload.wikimedia.org/wikipedia/en/d/dd/Greenkeepers_Organization_Logo_2015.png" alt="" class="circle responsive-img">
                    </div>
                    <div class="col s9">
                        <ul class="organization-data">
                            <li class="organization-data-line">
                                <i class="material-icons">business</i>
                                <span class="data-value">
                                    {{$organizacion->titulo}}
                                </span>
                            </li>
                            <li class="organization-data-line">
                                <i class="material-icons">local_phone</i>
                                <span class="data-value">
                                    {{$organizacion->telefono}}
                                </span>
                            </li>
                            <li class="organization-data-line">
                                <i class="material-icons">place</i>
                                <span class="data-value">
                                    {{$organizacion->ubicacion}}
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
 