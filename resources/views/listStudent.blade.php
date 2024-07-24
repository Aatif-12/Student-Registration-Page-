<div style="margin:10rem 40rem; ">

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

    {{ $students->links() }}
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>

<style>
    .w-5.h-5{
        margin-top: 5px;
        width: 20px;
        height: 20px;
    }
    input{
        width: 70%;
        height: 30px;
        padding: 0.5rem;
        font-size: 15px;
    }
    button{
        width: 23%;
        height: 30px;
        font-size: 15px;
    }
</style>
