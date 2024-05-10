@extends('layout.app')

@section('content')
    <main class="bg-dark text-white">
        <div class="container">
            <h1 class="text-center">Trains Available</h1>
            <div class="row">
                @foreach ($trainsList as $train)
                    <div class="col-md-4 g-4">
                        <div class="card mb-4" style="height: 100%;">
                            <div class="card-header">
                                <h5>Dettagli Treno</h5>
                            </div>
                            <div class="card-body">
                                @if ($train->agency)
                                    <div class="mb-0"><strong>Agenzia:</strong> {{ $train->agency }}</div>
                                @endif

                                @if ($train->departure_station)
                                    <div class="mb-0"><strong>Stazione di Partenza:</strong>
                                        {{ $train->departure_station }}</div>
                                @endif

                                @if ($train->destination)
                                    <div class="mb-0"><strong>Destinazione:</strong> {{ $train->destination }}</div>
                                @endif

                                @if ($train->departure_time)
                                    <div class="mb-0"><strong>Ora di Partenza:</strong> {{ $train->departure_time }}</div>
                                @endif

                                @if ($train->arrival_time)
                                    <div class="mb-0"><strong>Ora di Arrivo:</strong> {{ $train->arrival_time }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
