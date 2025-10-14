<!DOCTYPE html>
<html>
<head>
    <title>Daftar Authors</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
</head>
<body style="margin: 20px;">
    <h1>Daftar Authors</h1>
    <table id="authorTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Author</th>
                <th>Bio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->bio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#authorTable').DataTable();
        });
    </script>
</body>
</html>
