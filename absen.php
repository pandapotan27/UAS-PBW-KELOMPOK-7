<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #323232;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 40px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            margin-bottom: 20px;
        }
        .container button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #323232;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }
        .container button:hover {
            background-color: #505050;
        }
    </style>
</head>

<body>

 <!-- navbar -->
 <?php require 'navMhs.php'; ?>
 <br><br><br><br>
    <div class="container">
        <h1>Absen</h1>
        <button onclick="window.location.href='https://forms.gle/qY4kEEBCJMjF3N7JA'">Buka</button>
        <button onclick="window.location.href='https://docs.google.com/spreadsheets/d/18M0aLEQv-uTvrW-8ycUIZS8KGQg8hAp77iZpxhD2v4s/edit?resourcekey#gid=1317311355'">Lihat Absen</button>
    </div>
</body>
</html>
