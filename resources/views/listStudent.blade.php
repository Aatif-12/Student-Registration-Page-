{{-- <div style="margin:10rem 40rem; ">

    <h1 style="margin: 1rem 6rem;">Student List</h1>
    <form action="search" method="get">
        <input type="text" placeholder="Search with name" name="search">
        <button>Search</button>
    </form>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Operations</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <a href="{{ 'delete/' . $student->id }}">Delete</a>
                    <a href="{{ 'edit/' . $student->id }}">Edit</a>
                </td>

            </tr>
        @endforeach
    </table>

    {{$students->links()}};

    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>

<style>
    .w-5.h-5 {
        margin-top: 5px;
        width: 20px;
        height: 20px;
    }

    input {
        width: 70%;
        height: 30px;
        padding: 0.5rem;
        font-size: 15px;
    }

    button {
        width: 23%;
        height: 30px;
        font-size: 15px;
    }
</style> --}}



<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
<body>
<div style="margin:10rem 40rem;">
    <h1 style="margin: 1rem 6rem;">Student List</h1>
    {{-- <form action="search" method="get">
        <input type="text" placeholder="Search with name" name="search">
        <button>Search</button>
    </form> --}}
    <table id="studentTable" class="display" style="width:100%" border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <a href="{{ url('delete/' . $student->id) }}">Delete</a>
                    <a href="{{ url('edit/' . $student->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<style>
    .w-5.h-5 {
        margin-top: 5px;
        width: 20px;
        height: 20px;
    }

    input {
        width: 70%;
        height: 30px;
        padding: 0.5rem;
        font-size: 15px;
    }

    button {
        width: 23%;
        height: 30px;
        font-size: 15px;
    }
</style>

<script>
    $(document).ready(function() {
        $('#studentTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "pageLength": 10 // Default number of rows per page
        });
    });
</script>
</body>
</html>
