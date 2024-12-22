@extends('layouts.app')
@section('content')<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 col-12">

            <h1 class="text-center">Rezervacija sobe</h1>

            <div id="success-message" class="alert alert-success d-none"></div>
            <div id="error-messages" class="alert alert-danger d-none"></div>

            <form id="reservation-form" class="mt-4">
                @csrf
                {!! RecaptchaV3::field('register') !!}
                <div class="form-group">
                    <label for="prihod">{{__('Datum prihoda*')}}</label>
                    <input type="date" name="prihod" id="prihod" class="form-control" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}">
                </div>

                <div class="form-group">
                    <label for="odhod">{{__('Datum odhoda*')}}</label>
                    <input type="date" name="odhod" id="odhod" class="form-control" value="{{ date('Y-m-d', strtotime('+7 days')) }}" min="{{ date('Y-m-d', strtotime('+1 days')) }}">
                </div>

                <div class="form-group">
                    <label for="room_id">{{__('Izberite sobo*')}}</label>
                    <select name="room_id" id="room_id" class="form-control">
                        <option value="">{{__('-- Izberite sobo --')}}</option>
                        @foreach($rooms as $room)
                        <option value="{{ $room->id }}">{{ $room->ime }} ({{ number_format($room->cena, 2) }} €/noč)</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="ime">{{__('Ime in priimek*')}}</label>
                    <input type="text" name="ime" id="ime" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">{{__('Email*')}}</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="telefon">{{__('Telefonska številka*')}}</label>
                    <input type="text" name="telefon" id="telefon" class="form-control" placeholder="+38640222333">
                </div>

                <div class="form-group">
                    <label for="sporocilo">{{__('Opomba (sporočilo)')}}</label>
                    <textarea name="sporocilo" id="sporocilo" rows="4" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Rezerviraj</button>
            </form>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<script>
    var reservationUrl = "{{ route('reservations.store') }}";
</script>
@endsection
@section('app-css')

@endsection
