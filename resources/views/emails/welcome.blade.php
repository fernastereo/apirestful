Hola {{ $user->name}}
Gracias por crear esta cuenta por favor verificala en el siguiente link:

{{ route('verify', $user->verification_token) }}