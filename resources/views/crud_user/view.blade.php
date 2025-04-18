<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Màn hình chi tiết</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
            text-align: center;
        }

        .header {
            background-color: #f8f8f8;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-box {
            width: 350px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        .form-group {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

label {
    flex: 1;
    font-weight: bold;
}

p {
    flex: 2;
    margin: 0;
    text-align: left;
}


        .btn {
            display: inline-block;
            width: 100%;
            padding: 8px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
        }

        .footer {
            background-color: #f8f8f8;
            padding: 10px;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>

    <div class="header">
        <a href="{{ route('user.list') }}">Home</a> | <a href="{{ route('signout') }}">Đăng xuất</a>
    </div>

    <div class="container">
        <div class="form-box">
            <h2>Màn hình chi tiết</h2>
            <div class="form-group">
                <label>Username:</label>
                <p>{{$userDetail->name}}</p>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <p>{{$userDetail->email}}</p>
            </div>
            <button class="btn">Chỉnh sửa</button>
        </div>
    </div>
    

    <div class="footer">
        Lập trình web @01/2024
    </div>

</body>
</html>
