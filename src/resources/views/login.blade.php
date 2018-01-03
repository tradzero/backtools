<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>{{ config('app.name') }} - 用户登录</title>
    <link href="/backtools/css/style.css" rel="stylesheet">
    <link href="/backtools/css/style-responsive.css" rel="stylesheet">
</head>
<body class="login-body">
    <div class="login-logo">
        <img src="{{ asset('images/logo.png') }}" alt=""/>
    </div>
    <h2 class="form-heading">{{ config('app.name') }}后台</h2>
    <div class="container log-row">
        <form class="form-signin" method="POST" action="">
            <div class="login-wrap">
                {{ csrf_field() }}
                <input type="text" class="form-control" name="account" placeholder="账号" autofocus>
                <input type="password" class="form-control" name="password" placeholder="密码">
                <button class="btn btn-lg btn-success btn-block" type="submit">登录</button>
            </div>
        </form>
    </div>
</body>
</html>
