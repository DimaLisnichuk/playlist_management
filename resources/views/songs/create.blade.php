<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Додати плейліст</title>
    <!-- Підключення Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Градієнтний фон */
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
        }
        /* Стилі для заголовка */
        h1 {
            color: #343a40;
            text-align: center;
            margin-top: 20px;
        }
        /* Стилі для форми */
        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            width: 50%;
        }
        input {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #dee2e6;
            width: 100%;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Додати плейліст</h1>
        
        <form action="{{ route('songs.store') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Введіть назву">
            <input type="text" name="artist" placeholder="Введіть виконавця">
            <input type="text" name="genre" placeholder="Введіть жанр">
            <label for="playlist_id">Компанія:</label>
                <select name="playlist_id">
                @foreach($playlist as $playlists)
            <option value="{{ $playlists->id }}">{{ $playlists->id }}</option>
        @endforeach
        </select>
            <button type="submit">Додати</button>

        </form>

    </div>

    <!-- Підключення Bootstrap JS та інших скриптів, якщо потрібно -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

