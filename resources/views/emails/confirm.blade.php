@component('mail::message')
# Hola {{ $user->name}}

Has cambiado tu cuenta de correo electrónico, favor verificala en el siguiente link:

@component('mail::button', ['url' => 'route('verify', $user->verification_token)'])
Confirmar Cuenta
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent