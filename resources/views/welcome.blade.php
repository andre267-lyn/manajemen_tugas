<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management App</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #6a11cb 0%, #2575fc 100%);
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }
        .btn-custom {
            background-color: #2575fc;
            border-color: #2575fc;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #6a11cb;
            border-color: #6a11cb;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="display-4">Manajemen Tugas</h1>
        <p class="lead">Tempo Media Group</p>
        <div class="mt-4">
            <a href="/login" class="btn btn-custom btn-lg text-white">Login</a>
            <a href="/register" class="btn btn-outline-light btn-lg">Register</a>
        </div>
    </div>
</body>
</html>
