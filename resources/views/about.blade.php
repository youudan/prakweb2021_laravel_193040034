<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>WMR Blog | About </title>
</head>

<body>
  <h1>Halaman About</h1>
  <h3>{{ $name }}</h3>
  <h3>{{ $email }}</h3>
  <img src="{{ asset('img/' . $image) }}" alt="{{ $name }}" width="200">
</body>

</html>