<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
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
        <a href="#">Home</a> | <a href="{{ route('login') }}">Đăng nhập</a> | <a href="{{ route('user.createUser') }}"><b>Đăng ký</b></a>
    </div>
    <div class="container">
        <h2>Màn hình đăng ký</h2>
        <form action="{{ route('user.postUser') }}" method="POST">
            @csrf
            <div class="input-group">
                <label>Username</label>
                <input type="text"  id="name" class="form-control" name="name"
                required autofocus>
                @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
            </div>
            <div class="input-group">
                <label>Mật khẩu</label>
                <input type="password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
            </div>
            <div class="input-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" name="password_confirmation" required>
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="text"  id="email_address" class="form-control"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
            </div>
            <div class="input-group">
                <label>Phone</label>
                <input type="text"  id="phone" class="form-control"
                                           name="phone" required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
            </div>
            <div class="input-group">
                <label>Tuoi</label>
                <input type="text"  id="age" class="form-control"
                                           name="age" required autofocus>
                                    @if ($errors->has('age'))
                                        <span class="text-danger">{{ $errors->first('age') }}</span>
                                    @endif
            </div>
            <div class="action-group">
                <a href="login.html">Đã có tài khoản</a>
                <button type="submit" class="button">Đăng ký</button>
            </div>
        </form>
    </div>
    <div class="footer">
        Lập trình web @01/2024
    </div>
</body>
</html>
