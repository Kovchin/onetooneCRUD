<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>CRUD in Laravel 8</h1>

<img src="{{asset('/img/onetoone.gif')}}" alt="">

<p>data1 = </p> {{$data1}}
<p>data2 = </p> {{$data2}}

<p>Прямой вызов</p>

{{$data1->myUser->name}}

<p>Обратный вызов</p>

{{$data2->myPhone}}

</body>
</html>
