@extends('layout.app')

@section('content')
    <main class="bg-dark text-white bg_home">
        <div class="container">
            <form action="{{ route('searchTrains', 'date') }}" class="d-flex flex-column align-items-center">
                <label for="partenza" class="mb-2">Seleziona la data di partenza:</label>
                <input type="date" id="partenza" name="partenza" class="mb-2 form-control">
                <button type="submit" class="btn btn-dark">Ricerca</button>
            </form>

            <div class="row">
                @if ($newTrainsList->isEmpty())
                    <div class="col-md-12">
                        <h1 class="text-center p-5">Nessun treno trovato, torna presto per visualizzare i nuovi treni disponibili!!</h1>
                    </div>
                @else
                    <h1 class="text-center p-5">Here are the trains for the requested date</h1>
                    @foreach ($newTrainsList as $train)
                        <div class="col-md-4 g-4">
                            <a href="{{ route('showTrain', $train) }}" class="card-link text-decoration-none">
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
                                            <div class="mb-0"><strong>Destinazione:</strong> {{ $train->destination }}
                                            </div>
                                        @endif

                                        @if ($train->departure_time)
                                            <div class="mb-0"><strong>Ora di Partenza:</strong>
                                                {{ $train->departure_time }}
                                            </div>
                                        @endif

                                        @if ($train->arrival_time)
                                            <div class="mb-0"><strong>Ora di Arrivo:</strong> {{ $train->arrival_time }}
                                            </div>
                                        @endif

                                        @if ($train->departure_date)
                                            <div class="mb-0"><strong>Data di partenza:</strong>
                                                {{ $train->departure_date }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </main>
@endsection
