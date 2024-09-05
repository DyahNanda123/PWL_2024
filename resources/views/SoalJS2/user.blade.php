<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PWL 2024</title>
    </head>
    <body>
        <h3>USER ID: {{ $id }}</h3>
        <h3>Nama User: {{ $nama }}</h3>
    </body>
</html>