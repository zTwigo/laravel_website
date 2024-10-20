<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    {{--commento --}}

    @if($someValue === null)
    <p>null</p>
    @elseif($someValue === 'qualcosa')
    <p>qualcosa</p>
    @else
    <p>else</p>
    @endif

    <hr>

    @isset($items)
    <h2>lista elementi</h2>
    <ul>
        @foreach($items as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>
    @endisset

    <hr>

    @empty($emptyArray)
    <p>array vuot</p>
    @else
    <p>array non vuoot</p>
    @endempty

    <hr>

    <h2>numeri</h2>
    <ul>
        @for($i = 0; $i < count($numbers); $i++)
        <li>{{$numbers[$i]}}</li>
        @endfor
    </ul>
</body>
</html>