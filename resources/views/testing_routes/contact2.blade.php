<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact2</title>
</head>
<body>
    <h1>Contact2</h1>
    {{-- Directivas de blade --}}
    {{-- if - else --}}
    @if ($greating == 'hello')
        <p>Hola</p>
    @else
        <p>{{$greating}}</p>
    @endif
    {{-- foreach --}}
    @foreach ([1,2,3,4,5] as $numbers)
        {{ $numbers }}
    @endforeach
</body>
</html>