<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/relatorio.css')}}">
    <title>Relatório</title>
</head>
<body>
    <form  action="{{route('filtrar_registros')}}" method="POST">
        {{ csrf_field() }}
        <div class="inputs-filtro">
            <div class="campos">
                <label for="evento">Evento: </label>
                <select name="evento" id="evento">
                    @foreach ($wp_posts as $evento)
                        <option>{{$evento->post_title}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="campos">
                <label for="todos_eventos"> Todos Eventos</label>
                <input type="checkbox" name="check" id="todos_eventos" value="todos">
            </div>
            <br>
            <div class="campos">
                <label for="cpf">Cpf: </label>
                <input type="text" name="cpf">
            </div>
            <br>
            <div class="campos">
                <label>Data Inicial:</label>
                <input type="date" required name="fdate">

                <label>Data Final:</label>
                <input type="date" required name="sdate">
            </div>
            <br>
            <div class="buttom">
                <input type="submit" value="Filtrar" class="btn btn-primary">
            </div>
        </div>
    </form>
</body>
</html>
