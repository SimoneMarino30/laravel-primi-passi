<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Country greeting</title>
</head>
<body>
  <h1>
    {{ $worldGreeting }}
  </h1>
  <button>
    <a style="text-decoration:none" href="{{ route('world-greetings') }}">← Torna ai saluti dal mondo</a>
  </button>
</body>
</html>