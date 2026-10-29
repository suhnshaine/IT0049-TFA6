<!DOCTYPE html>
<html>

<head>
    <title>Customer Accounts</title>
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

        <h1>Customer Accounts</h1>

        <table border="1" cellpadding="10">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>


            @foreach($customers as $customer)
            <tr>
                <td><?= ($customer['fullname']) ?></td>
                <td><?= ($customer['email']) ?></td>
                <td><?= ($customer['phone']) ?></td>
            </tr>
            @endforeach

        </table>

    </div>
</body>

</html>