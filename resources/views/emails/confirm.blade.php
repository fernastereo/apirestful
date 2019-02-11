Hola {{ $user->name}}
Has cambiado tu cuenta de correo electrónico, favor verificala en el siguiente link:
<a href="{{ route('verify', $user->verification_token) }}">Verificar</a>