<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/add.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>Document</title>
</head>
<body>
        <div class="center">
                <div class="top">
                    <ul>
                        <li><a href="{{ route('index') }}">首页</a></li>
                        <li><a href="{{ route('addview') }}">添加新顾客</a></li>
                        <li><a>消费记录</a></li>
                        <li><a>账号管理</a></li>
                        <li><a>订单</a></li>
                        <li id="out"><a>退出</a></li>
                    </ul>
                </div>

            @yield('content')


        </div>
</body>
</html>