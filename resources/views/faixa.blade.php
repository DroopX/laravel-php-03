<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faixas</title>
</head>
<body>
    <h1>Faixas</h1>
   <table>
        <thead>
            <tr>
                <td>Titulo</td>
                <td>Compositores</td>
                <td>Duracao</td>
                <td>Album</td>
        </tr>
        </thead>
        <tbody>
        @if (!empty($faixas))
            @foreach($faixas as $faixa)
                <tr>
                    <td>{{$faixa['nome']}}</td>
                    <td>{{$faixa['compositores']}}</td>
                    <td>{{$faixa['duracao']}}</td>
                    <td>{{$faixa['album']['nome']}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
   </table>
</body>
</html>
