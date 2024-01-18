@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4 text-white">LISTE DES RÉSERVATION</h1>

        <table class="table">
            <thead>
                <tr>
                    <th class="text-white">ID</th>
                    <th class="text-white">ID Utilisateur</th>
                    <th class="text-white">ID Voiture</th>
                    <th class="text-white">Date de Début</th>
                    <th class="text-white">Date de Fin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td class="text-white">{{ $reservation->id }}</td>
                        <td class="text-white">{{ $reservation->user_id }}</td>
                        <td class="text-white">{{ $reservation->car_id }}</td>
                        <td class="text-white">{{ $reservation->start_date }}</td>
                        <td class="text-white">{{ $reservation->end_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
