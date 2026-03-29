<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Professional Dashboard</title>

```
<style>
    :root {
        --primary: #4f46e5;
        --dark: #111827;
        --gray: #6b7280;
        --light: #f9fafb;
        --white: #ffffff;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", sans-serif;
    }

    body {
        background: var(--light);
    }

    .container {
        display: flex;
        height: 100vh;
    }

    /* Sidebar */
    .sidebar {
        width: 240px;
        background: var(--dark);
        color: var(--white);
        padding: 20px;
    }

    .sidebar h2 {
        margin-bottom: 30px;
        font-size: 22px;
    }

    .sidebar ul {
        list-style: none;
    }

    .sidebar li {
        padding: 12px;
        margin-bottom: 10px;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.3s;
    }

    .sidebar li:hover {
        background: var(--primary);
    }

    /* Main */
    .main {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    /* Navbar */
    .navbar {
        background: var(--white);
        padding: 15px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    .navbar h1 {
        font-size: 20px;
    }

    .profile {
        background: var(--primary);
        color: white;
        padding: 8px 12px;
        border-radius: 20px;
        font-size: 14px;
    }

    /* Content */
    .content {
        padding: 25px;
        overflow-y: auto;
    }

    /* Cards */
    .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
        margin-bottom: 25px;
    }

    .card {
        background: var(--white);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .card h3 {
        color: var(--gray);
        margin-bottom: 10px;
        font-size: 14px;
    }

    .card h2 {
        font-size: 24px;
    }

    /* Table */
    .table-container {
        background: var(--white);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th {
        text-align: left;
        padding: 12px;
        background: #f3f4f6;
        font-size: 14px;
    }

    table td {
        padding: 12px;
        border-bottom: 1px solid #eee;
    }

    .status {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
    }

    .active {
        background: #d1fae5;
        color: #065f46;
    }

    .inactive {
        background: #fee2e2;
        color: #991b1b;
    }

    /* Responsive */
    @media(max-width: 768px) {
        .sidebar {
            display: none;
        }
    }
</style>
```

</head>

<body>

<div class="container">

```
<!-- Sidebar -->
<div class="sidebar">
    <h2>My Admin</h2>
    <ul>
        <li>Dashboard</li>
        <li>Users</li>
        <li>Analytics</li>
        <li>Reports</li>
        <li>Settings</li>
    </ul>
</div>

<!-- Main -->
<div class="main">

    <!-- Navbar -->
    <div class="navbar">
        <h1>Dashboard</h1>
        <div class="profile">Admin</div>
    </div>

    <!-- Content -->
    <div class="content">

        <!-- Cards -->
        <div class="cards">
            <div class="card">
                <h3>Total Users</h3>
                <h2>1,250</h2>
            </div>

            <div class="card">
                <h3>Revenue</h3>
                <h2>$8,400</h2>
            </div>

            <div class="card">
                <h3>Orders</h3>
                <h2>320</h2>
            </div>

            <div class="card">
                <h3>Growth</h3>
                <h2>12%</h2>
            </div>
        </div>

        <!-- Table -->
        <div class="table-container">
            <h3 style="margin-bottom:15px;">Recent Users</h3>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>

                @foreach([
                    ['name'=>'Ram','email'=>'ram@email.com','status'=>'Active'],
                    ['name'=>'Sita','email'=>'sita@email.com','status'=>'Inactive'],
                    ['name'=>'Hari','email'=>'hari@email.com','status'=>'Active']
                ] as $user)

                <tr>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>
                        <span class="status {{ strtolower($user['status']) }}">
                            {{ $user['status'] }}
                        </span>
                    </td>
                </tr>

                @endforeach

            </table>
        </div>

    </div>

</div>
```

</div>

</body>
</html>
