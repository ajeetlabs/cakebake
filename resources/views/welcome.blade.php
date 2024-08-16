<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CakeBake</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex w-full justify-center p-4">
        <div class="flex flex-col space-y-2">
            <p class="text-2xl"> Welcome to CakeBake</p>
            <p class="text-center text-gray-500 text-sm">Powered by Laravel
                {{ Illuminate\Foundation\Application::VERSION }}
            </p>
            @if (auth()->check())
                <div class="h-11 bg-gray-50 flex items-center justify-center rounded">Welcome
                    {{ auth()->user()->name }}
                </div>
                <button x-data @click.prevent="document.querySelector('#logout-form').submit();"
                    class="h-11 bg-red-100 border rounded border-red-300">
                    Logout
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="h-11 bg-blue-100 inline-flex items-center justify-center rounded border border-blue-300">
                    Login
                </a>
            @endif

            @auth
                <a class="text-blue-500" href="{{ route('dashboard') }}">Go to Dashboard</a>
            @endauth

        </div>
    </div>
</body>

</html>
