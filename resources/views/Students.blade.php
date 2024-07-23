{{-- Student data will store in the database --}}
<div class="container mt-5">
    <div class="registration-container">
        <h2 class="registration-header">Student Registration</h2>
        <form method="POST" action="addStudent">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</div>


<style>
    .container {
        max-width: 800px;
        margin: auto;
        height: 100vh;
        display: flex;
    }
    .registration-container {
        width: 70%;
        margin: auto;
        padding: 1.5rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }
    .registration-header {
        margin-bottom: 1.5rem;
        text-align: center;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .btn {
        margin-top: 1rem;
    }
    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-size: bold;
    }
    .form-group input {
        width: 100%;
        height: 40px;
        padding: 0.5rem;
        font-size: 15px
    }
    .btn {
        width: 100%;
        height: 40px;
        font-size: 15px;
    }
</style>

