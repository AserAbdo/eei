@extends('dashboard.app')

@section('content')
    <form action="{{Route('staff.store')}}" method="POST">
        @csrf
        <br>
        <h3>Add New User</h3>
        <div class="row mb-4">
            <div class="col-sm-12">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Full Name*" name="name">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-sm-12">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email address *" name="email">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
