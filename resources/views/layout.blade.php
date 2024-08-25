<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css" />
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}">

    <title>@yield("pageTitle") - Loja</title>
    
    @yield("style")
</head>
<body>
    @yield("content")
</body>
</html>