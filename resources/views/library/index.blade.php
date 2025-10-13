<!DOCTYPE html>
<html>
<head>
    <title>Library MVC</title>
    <head>
        <title>Library MVC - DataTables</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    </head>
</head>
    <body style="margin: 20px;">
        <h1>Daftar Genre</h1>
        <table id="genreTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Genre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($genres as $genre)
                    <tr>
                        <td>{{ $genre['id'] }}</td>
                        <td>{{ $genre['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h1>Daftar Author</h1>
        <table id="authorTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Author</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                    <tr>
                        <td>{{ $author['id'] }}</td>
                        <td>{{ $author['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
    <script>
        $(document).ready(function() {
            $('#genreTable').DataTable();
            $('#authorTable').DataTable();
        });
    </script>
</html>
