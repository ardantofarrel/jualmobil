<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bioskop Ticket Sales Dashboard</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        width: 200px;
        height: 100%;
        background-color: #333;
        padding-top: 20px;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .sidebar ul li {
        padding: 10px;
        text-align: center;
    }

    .sidebar ul li a {
        text-decoration: none;
        color: #fff;
        display: block;
    }

    .content {
        margin-left: 200px;
        padding: 20px;
    }

    .header {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        margin-bottom: 20px;
    }

    .header h1 {
        margin: 0;
    }

    .sales {
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .sales h2 {
        margin-top: 0;
    }

    .sales p {
        margin-top: 0;
    }
</style>
</head>
<body>

<div class="sidebar">
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Movies</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Settings</a></li>
    </ul>
</div>

<div class="content">
    <div class="header">
        <h1>Bioskop Ticket Sales Dashboard</h1>
    </div>
    <div class="sales">
        <h2>Today's Sales</h2>
        <p>Total Tickets Sold: 150</p>
        <p>Total Revenue: $1500</p>
    </div>
    <div class="movies">
        <h2>Top Movies</h2>
        <ul>
            <li>1. Spider-Man: No Way Home</li>
            <li>2. The Batman</li>
            <li>3. Jurassic World: Dominion</li>
        </ul>
    </div>
</div>

</body>
</html>
