<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Vendedor</title>
</head>
<body>
    <h1>Vendedor</h1>
    <x-dropdown-link :href="route('profile.edit')">
        {{ __('Perfil') }}
    </x-dropdown-link>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Sair') }}
        </x-dropdown-link>
    </form>
    
</body>
</html>