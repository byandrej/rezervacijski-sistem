@extends('layouts.app')

@section('title', 'Edit Room')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Uredi Sobo {{$room->ime}}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Room Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('ime', $room->ime) }}" placeholder="{{$room->ime}}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price per Night (€)</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('cena', $room->cena) }}" required step="0.01" min="0">
        </div>

        <div class="mb-3">
            <label for="short_description" class="form-label">Short Description</label>
            <textarea name="short_description" id="short_description" class="form-control" rows="2" required>{{ old('kratek_opis', $room->kratek_opis) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="long_description" class="form-label">Long Description</label>
            <textarea name="long_description" id="long_description" class="form-control" rows="5" required>{{ old('dolg_opis', $room->dolg_opis) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Posodobi</button>
        <a href="{{ route('admin.rooms.index') }}" class="btn btn-secondary">Nazaj na glavno stran</a>
    </form>
</div>
@endsection
