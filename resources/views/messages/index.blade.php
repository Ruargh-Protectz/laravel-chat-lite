<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel-Chat-Lite') }}</title> --}}
    <title>Laravel-Chat-Lite</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500">
    @foreach ($messages as $key => $message)
    <div class="p-6 max-w-sm mx-auto mb-3 bg-white rounded-xl shadow-md flex items-center space-x-4">
        <div class="flex-shrink-0">
        </div>
        <div>
        <div class="text-xl font-medium text-black">{{ $message->name }}</div>
        <p class="text-gray-500">{{ $message->content }}</p>
        </div>
    </div>
    @endforeach

    @empty($messages)
        <div>There are no posts to display</div>
    @endempty
</body>
</html>
