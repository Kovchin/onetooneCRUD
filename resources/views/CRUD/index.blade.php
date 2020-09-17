<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">

<div class="row justify-content-end">
    <h1>CRUD in Laravel 8</h1>
</div>
<div class="row">


    <table class="table">

        <tr>
            <th>
                <p>Имя</p>
            </th>

            <th>
                <p>Телефон</p>
            </th>

            <th>
                <p>Модификация</p>
            </th>
        </tr>


        @foreach($users as $user)
            <tr>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->MyPhone->phone}}
                </td>

                <td>
                    <a class="btn btn-primary" href="">Изменить</a>
                    <a class="btn btn-danger" href="">Удалить</a>
                </td>
            </tr>
        @endforeach

    </table>
</div>
</div>

</body>
</html>
