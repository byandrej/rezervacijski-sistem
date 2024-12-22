@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>

    <h2>Sobe (Rooms)</h2>
    <a href="{{ route('admin.rooms.create') }}" class="btn btn-primary mb-3">Dodaj novo sobo</a>
    <table class="table">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Cena</th>
                <th>Dejavnost</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->ime }}</td>
                <td>{{ $room->cena }}</td>
                <td>
                    <a href="{{ route('admin.rooms.edit', $room->id) }}" class="btn btn-warning">Uredi</a>
                    <form action="{{ route('admin.rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Izbriši</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Rezervacije</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Soba</th>
                <th>Datum</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->ime }}</td>
                <td>{{ $reservation->room->ime }}</td>
                <td>{{ $reservation->prihod }} - {{ $reservation->odhod }}</td>
                <td>{{ $reservation->skupna_cena }} €</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $reservations->links() }}
    <p class="mt-3">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-secondary">Odjava</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </p>
</div>

@endsection
