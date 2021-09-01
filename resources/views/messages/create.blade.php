<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Create Message</h1>
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <input class="" id="name" type="text" name="name" value="" placeholder="Enter name"></div>
        <input class="" id="name" type="textarea" name="content" value="" placeholder="Message"></div>
        <input class="" type="submit" value="Create">

</body>
</html>
