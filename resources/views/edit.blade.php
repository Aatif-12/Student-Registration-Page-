<div>
    <form action="/edit-student/{{$data->id}}" method="post" class="container">
        <h1>Update data</h1>
        @csrf
        <div class="form-group">
            <input type="hidden" name="_method" value="put" >
            <label for="name">Full Name</label><br>
            <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label><br>
            <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label><br>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $data->phone }}" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Update Student</button>
        <a href="/list-student">Cancel</a>

    </form>
</div>

<style>
    .container {
        width: 100%;
        margin: 10rem 45rem;
        height: 100vh;
        align-items: center;
    }
    .form-group {
        margin-bottom: 1rem;
        /* display: inline; */
        /* justify-content: center;
        align-items: center; */
    }
    .form-group label {
        display: block;
        font-size: 1.4rem;

    }
    .form-group input, .btn , a{
        width: 20%;
        height: 40px;
        padding: 0.5rem;
        font-size: 20px;
    }
</style>
