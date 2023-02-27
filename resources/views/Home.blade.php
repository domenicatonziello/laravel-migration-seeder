@extends('layouts.main')

@section('content')
<ul>
    @foreach ($trains as $train)
        <li>
            <ul>
                <li>{{$train->azienda}}</li>
                <li>{{$train->stazione_partenza}}</li>
                <li>{{$train->stazione_arrivo}}</li>
                <li>{{$train->data_partenza}}</li>
                <li>{{$train->orario_partenza}}</li>
                <li>{{$train->orario_arrivo}}</li>
                <li>{{$train->codice_treno}}</li>
                <li>{{$train->n_carrozze}}</li>
                <li>{{$train->in_orario}}</li>
                <li>{{$train->cancellato}}</li>
            </ul>
        </li>
    @endforeach
</ul>
    
@endsection