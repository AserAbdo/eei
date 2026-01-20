@extends('dashboard.app')

@section('content')
<br>
<h3>Add New Partner</h3>
    <form method="POST" action="{{route('partners.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label for="name">Partner Name</label>
            <input type="text" class="form-control" id="name" placeholder="Partner Name" name="name">
        </div>
        <div class="form-group mb-4">
            <label for="logo">Logo</label>
            <input type="file" class="form-control" id="logo" placeholder="Another input" name="logo" accept="image/*">
        </div>
        <input type="submit" name="time" class="btn btn-primary">
    </form>
@endsection
