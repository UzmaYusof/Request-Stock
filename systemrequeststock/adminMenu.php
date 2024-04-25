<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Admin</title>
  <link rel="stylesheet" href="file:///C|/Users/ASUS/Documents/Ifah/Sem8/system/styles.css">
  >
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        .header {
            background-color: purple;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav-right {
            float: right;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .footer {
            background-color: purple;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="file:///C|/Users/ASUS/Documents/Ifah/Sem8/system/fcom.png" alt="Company Logo">
        FCOM Request Stock System</div>
        <nav class="topnav">
            <a href="homepage.php">Home</a>
            <a href="request-stock.html">Add</a>
            <a href="request-stock.html">View Request</a>
            <div class="topnav-right">
                <a href="index.html">Logout</a>
            </div>
        </nav>
    </header>
    
  <!-- Main content -->
  <div class="main">
    <h1>Welcome to the FCOM Request Stock System!</h1>
    <p>&nbsp;</p>
  </div>

    
    <div id="status"></div>

    <footer class="footer">
        <p>&copy; 2023 FCOM Request Stock System. All rights reserved.</p>
    </footer>

</body>
</html>
