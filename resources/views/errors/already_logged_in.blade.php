<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }

        .container {
            text-align: center;
        }

        .error-img {
            max-width: 100%;
            height: auto;
        }

        .btn-home {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://placekitten.com/400/300" alt="Error Image" class="error-img">
        <h1 class="display-1">404</h1>
        <p class="lead">Sepertinya Kamu Lupa Log out</p>
        <a href="{{ url('/dashboard/admin') }}" class="btn btn-primary btn-lg btn-home">Back to Dashboard</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtKh7z7lGz7fuP4F8nfdFvAOA6Gg/z6Y5J6XqqyGXYM2ntX8WgIp721MA9l1/JujgN/0fD4L+xEzLgPYiCw3kz5E1pI7PQjj+CsAYw" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD4Ck5BdPtF+to8xMp9Mvc9T9Z8K3lYT2c8NMmDgAQX2AYZ5TxRX0M0JpDm5XjA3KNKgA0fKk4OqQAyYT4fTZTzHqc2Xj75xnR4WQ1kpzZWu1zgUYKZ82hPz0aIQ3yUQF4bZBvgY2OyBwAAAQM4i" crossorigin="anonymous"></script>
</body>
</html>
