@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Room</h1>
    <form action="{{ route('admin.rooms.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <textarea name="short_description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Long Description</label>
            <textarea name="long_description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Room</button>
    </form>
</div>
@endsection
