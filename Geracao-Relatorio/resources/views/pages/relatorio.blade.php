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
    <form  action="{{route('filtrar_registros')}}" method="GET">
        {{ csrf_field() }}
        <div class="inputs-filtro">
            <div class="campos">
                <label for="evento">Evento: </label>
                <select name="evento" id="evento">
                    <option selected>TESTE1</option>
                    <option>TESTE2</option>
                    <option>TESTE3</option>
                    <option>TESTE4</option>
                    <option>TESTE5</option>
                </select>
            </div>
            <br>
            <div class="campos">
                <label for="todos_eventos"> Todos Eventos</label>
                <input type="checkbox">
            </div>
            <br>
            <div class="campos">
                <label for="cpf">Cpf: </label>
                <input type="text" name="cpf">
            </div>
            <br>
            <div class="campos">
                <label>Data Inicial:    </label>
                <input type="date" name="fdate">

                <label>Data Final:    </label>
                <input type="date" name="sdate">
            </div>
            <br>
            <div class="buttom">
                <input type="submit" value="Filtrar" class="btn btn-primary">
            </div>
        </div>
    </form>
</body>
</html>
