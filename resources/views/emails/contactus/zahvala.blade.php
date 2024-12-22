@component('mail::message')
<p>Hvala za oddano povpraševanje</p>
<p>Uspešno ste rezervirali sobo {{ $data->room->ime }}</p>
<p>Od: {{ $data['prihod'] }} do: {{ $data->odhod }}</p>
<p>Cena: {{ $data->skupna_cena }}</p>
<br>
<p>
    To je samodejno sporočilo. Prosimo ne odpisujte.
</p><br>
{{ config('app.name') }}
@endcomponent
