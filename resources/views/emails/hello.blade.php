@component('mail::message')
# Hey {{$user->name}}

Thank you for signing up for Blog! .

@component('mail::button', ['url' => 'http://localhost/pro.dev/'])
Start Browsing
@endcomponent

<hr>

Yours, {{ config('app.name') }} <br>
{{ config('mail.from.address') }}
@endcomponent
