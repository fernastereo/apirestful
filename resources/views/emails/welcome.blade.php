@component('mail::message')
# Hola {{ $user->name}}

Gracias por crear esta cuenta por favor verificala en el siguiente botón:

@component('mail::button', ['url' => 'route('verify', $user->verification_token)'])
Confirmar Cuenta
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent