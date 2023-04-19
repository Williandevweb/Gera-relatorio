<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>

<style>

    body{
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }

    .title{
        text-align: center;
        color: red;
    }
    .title_desc{
        color: blue;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px
    }

    table {
        border-collapse: separate;
        /* border-spacing: 0 8px; */
        margin-top: -8px;
    }

    td {
        border: 1px solid rgb(5, 5, 5);
        border-left-width: 0;
        min-width: 120px;
        max-width: 100vw;
        height: 18px;
        padding: 0 5px 0 1px
    }

    td:first-child {
        border-left-width: 1px;
    }
</style>
</head>
<body>
    <section>
        <div>
            <h1 class="title">Relatório PDF</h1>
            <table>
                <tr class="title_desc">
                    <td>ID</td>
                    <td>NOME</td>
                    <td>CREDENCIAIS</td>
                    <td>DATA</td>
                    <td>CHECKIN</td>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->ID}}</td>
                        <td>{{$post->display_name}}</td>
                        <td>{{$post->post_title}}</td>
                        <td>{{date('d/m/Y',strtotime($post->post_date))}}</td>
                        <td>{{$post->meta_value}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
</body>
</html>
