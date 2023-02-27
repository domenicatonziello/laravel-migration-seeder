@extends('layouts.main')

@section('content')
    <main class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-6 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Partenza: {{$train->data_partenza}} </h5>
                            <h6 class="card-subtitle mb-2 text-muted"> Numero Carrozze: {{$train->n_carrozze}}</h6>
                            <p class="card-text"> <strong>Partenza: </strong> {{$train->stazione_partenza}} <strong> Arrivo: </strong> {{$train->stazione_arrivo}} </p>
                            <p class="card-text">Orario Partenza: {{$train->orario_partenza}} </p>
                            <p class="card-text">Orario Arrivo: {{$train->orario_partenza}} </p>
                            <p class="card-text">In Orario: {{$train->in_orario}} || Cancellato: {{$train->cancellato}} </p>
                            <a href="#" class="card-link"> Azienda: {{$train->azienda}} </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>  
    </main>
@endsection