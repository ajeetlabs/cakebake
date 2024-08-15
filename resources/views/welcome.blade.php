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
        </div>
    </div>
</body>

</html>
