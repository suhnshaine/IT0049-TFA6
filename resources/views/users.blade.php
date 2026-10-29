<!DOCTYPE html>
<html>

<head>
    <title>User Accounts</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">

        <h1>POS System</h1>

        <nav>
            <a href="/">Home</a> |
            <a href="/about">About</a> |
            <a href="/customers">Customers</a> |
            <a href="/users">Users</a>
        </nav>

        <h1>User Accounts</h1>

        <table border="1" cellpadding="10">
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>

            @foreach($users as $user)
            <tr>
                <td><?= ($user['username']) ?></td>
                <td><?= ($user['fullname']) ?></td>
                <td><?= ($user['role']) ?></td>
            </tr>
            @endforeach

        </table>

    </div>
</body>

</html>