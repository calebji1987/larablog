<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi primera vista</title>
</head>
<body>
    {{--  <h1>hola mundo laravel - <?php echo "hola mundo ". $nombre1." apellido  ". $apellido1 ?></h1>  --}}
    <h1>mundo mundo laravel - {!!"hola mundo  $nombre1  $apellido1 "!!}</h1> 
    {{--  <script>alert('hola  mundo' );</script>  --}}
    {{--  <ul>
        <?php foreach ($posts1 as $key => $post):?>
            <li>{{$post}}</li>
        <?php endforeach;?>
    
        @foreach ($posts1  as $post)
        <li>{{$post}}</li>
        @endforeach
    </ul>  --}}
    <ul>
        @isset($posts2)
            isset
        @endisset
        @empty($posts2)
            empty
        @endempty
        
        @forelse ($posts1  as $post)
            {{--  <?php dd($loop)?>  --}}
            {{--  <?php var_dump($loop)?>  --}}
       
        <li>
                @if ($loop->first)
                Primero:
                @elseif ($loop->last)
                Ultimo:
                @else
                Medio:
                @endif
                {{$post}}
        </li>
        @empty
            <li>Vacio</li>
        @endforelse
    </ul>
</body>
   
</html>