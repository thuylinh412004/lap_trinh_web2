<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách User</title>
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
            width: 80%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .pagination {
            margin-top: 20px;
        }
        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #000;
            color: #000;
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
        <a href="{{ route('user.list') }}">Home</a> | <a href="{{ route('signout') }}"><b>Đăng xuất</b></a>
    </div>
    <div class="container">
        <h2>Danh sách user</h2>
        <table>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
            @foreach($users as $user)
<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td><a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> | 
        <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> | 
        <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a></td>
</tr>
@endforeach
            
        </table>
        <div class="pagination">
            <a href="#">Previous</a> <a href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">Next</a>
        </div>
    </div>
    <div class="footer">
        Lập trình web @01/2024
    </div>
</body>
</html>