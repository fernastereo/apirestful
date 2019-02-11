Hola {{ $user->name}}
Has cambiado tu cuenta de correo electrónico, favor verificala en el siguiente link:

{{ route('verify', $user->verification_token) }}"