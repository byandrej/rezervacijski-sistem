@component('mail::message')
<h2>Prejeli ste novo rezervacijo</h2>
<ul>
    <li>Ime: {{ $data['ime'] }}</li>
    <li>Email: {{ $data['email'] }}</li>
    <li>Telefon: {{ $data['telefon'] }}</li>
    <li>Sporocilo: {{ $data['sporocilo'] }}</li>
    <li>Soba: {{ $data->room->ime }}</li>
    <li>Cena: {{ $data['skupna_cena'] }} €</li>
</ul>
<br>
<p>
    To je samodejno sporočilo. Prosimo ne odpisujte.
</p><br>
{{ config('app.name') }}
@endcomponent
