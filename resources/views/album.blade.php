<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
</head>
<body>
    <h1>Albums</h1>
   <table>
        <thead>
            <tr>
                <td>Titulo</td>
                <td>Ano</td>
                <td>Duracao</td>
        </tr>
        </thead>
        <tbody>
        @if (!empty($albums))
            @foreach($albums as $album)
                <tr>
                    <td>{{$album['nome']}}</td>
                    <td>{{$album['ano']}}</td>
                    <td>{{$album['duracao']}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
   </table>
</body>
</html>
