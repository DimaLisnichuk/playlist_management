<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пісні</title>
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
        /* Стилі для таблиці */
        table {
            background-color: #fff;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            width: 80%;
        }
        th, td {
            border: 1px solid #dee2e6;
            color: #343a40;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f8f9fa;
        }
        tbody tr:nth-child(even) {
            background-color: #f1f3f5;
        }
        /* Стилі для кнопок */
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Пісні</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Назва</th>
                    <th>Виконавець</th>
                    <th>Жанр</th>
                    <th>ID плейлиста</th>
                </tr>
            </thead>
            <tbody>
                <!-- Замість цього місця буде вставлено дані з вашого коду -->
                @foreach($songs as $song)
                <tr>
                    <td>{{ $song->id }}</td>
                    <td>{{ $song->name }}</td>
                    <td>{{ $song->artist }}</td>
                    <td>{{ $song->genre }}</td>
                    <td>{{ $song->playlist_id }}</td>

                    <td>
                        <form style="display: inline-block;" action="{{ route('songs.edit', $song->id) }}" method="get">
                            <button type="submit" class="btn btn-primary">Редагувати</button>
                        </form>
                        <form style="display: inline-block;" action="{{ route('songs.destroy', $song->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Видалити</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <button onclick="location.href='{{ route('songs.create') }}'" class="btn btn-success">Додати</button>
        <button class="btn btn-primary" onclick="location.href='{{ route('playlist.index') }}'">Плейлісти</button>

    </div>

    <!-- Підключення Bootstrap JS та інших скриптів, якщо потрібно -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

