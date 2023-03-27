<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greets List</title>
</head>
<body>
  <h1>Saluti dal mondo</h1>
  <ul>
    @forelse ($worldGreetings as $worldGreeting)
    <li>
      <a style="text-decoration:none" href=" {{ route('country-greeting', ['index' => $loop->index]) }}">
      {{ $worldGreeting }}
      </a>
    </li>
    @empty 
    Nessun saluto 😓
    @endforelse
  </ul>
  <button>
    <a style="text-decoration:none" href="{{ route('homepage') }}">← Torna alla Homepage</a>
  </button>
  
</body>
</html>