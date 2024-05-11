@extends('layout.app')

@section('content')
    <main class="showTrain">
        <div class="container mt-5 text-center">
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut eveniet illo, possimus repudiandae ipsa cupiditate nemo quidem, maiores est, minus itaque veritatis at alias dolores? Soluta dolorem non velit!</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header"><h2 class="card-title text-center">{{ $train->agency }}</h2></div>
                            <div class="card-text">
                                <strong>Stazione di Partenza:</strong> {{ $train->departure_station ?: 'In aggiornamento' }}
                            </div>
                            <div class="card-text">
                                <strong>Destinazione:</strong> {{ $train->destination ?: 'In aggiornamento' }}
                            </div>
                            <div class="card-text">
                                <strong>Ora di Partenza:</strong> {{ $train->departure_time ?: 'In aggiornamento' }}
                            </div>
                            <div class="card-text">
                                <strong>Ora di Arrivo:</strong> {{ $train->arrival_time ?: 'In aggiornamento' }}
                            </div>
                            <div class="card-text">
                                <strong>Prezzo:</strong> {{ $train->price ?: 'In aggiornamento' }}
                            </div>
                            <div class="card-text">
                                <strong>Data di Partenza:</strong> {{ $train->departure_date ?: 'In aggiornamento' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
