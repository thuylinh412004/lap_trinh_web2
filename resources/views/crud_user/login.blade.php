<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header {
            background-color: #f1f1f1;
            padding: 10px;
        }
        .container {
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: auto;
            min-width: 300px;
            max-width: 400px;
        }
        .input-group {
            text-align: left;
            margin-bottom: 10px;
            width: 100%;
        }
        .input-group label {
            display: block;
        }
        .input-group input {
            width: 100%;
            padding: 5px;
        }
        .remember {
            text-align: left;
            width: 100%;
        }
        .action-group {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: center;
            margin-top: 10px;
        }
        .button {
            background-color: blue;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
        .button:hover {
            background-color: darkblue;
        }
        .footer {
            background-color: #f1f1f1;
            padding: 10px;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="#">Home</a> | <a href="{{ route('login') }}"><b>Đăng nhập</b></a> | <a href="{{ route('user.createUser') }}">Đăng ký</a>
    </div>
    <div class="container">
        <h2>Màn hình đăng nhập</h2>
        <form method="POST" action="{{ route('user.authUser') }}">
            @csrf
            <div class="input-group">
                <label>Username</label>
                <input type="text"  id="email" class="form-control" name="email" required
                                           autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
            </div>
            <div class="input-group">
                <label>Mật khẩu</label>
                <input type="password"  id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
            </div>
            <div class="remember">
                <input type="checkbox" id="remember"> <label for="remember">Ghi nhớ đăng nhập</label>
            </div>
            <div class="action-group">
                <a href="#">Quên mật khẩu</a>
                <button type="submit" class="button">Đăng nhập</button>
            </div>
        </form>
    </div>
    <div class="footer">
        Lập trình web @01/2024
    </div>
</body>
</html>