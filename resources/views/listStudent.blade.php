<div>
    <table border="1" style=" margin:auto; margin-top:8rem; ">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Operations</th>
            </tr>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href="{{'delete/'.$student->id}}">Delete</a>
                        <a href="{{'edit/'.$student->id}}">Edit</a>
                    </td>

                </tr>
            @endforeach
    </table>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>
