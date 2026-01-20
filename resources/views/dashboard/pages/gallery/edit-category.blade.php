@extends('dashboard.app')
@section('content')
    <div class="main-content">
        <form class="settings-form" action="{{route('category.update' , ['id' =>$categories->id])}}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{$categories->title}}">
            </div>
            <div class="form-group mb-4">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="description" name="description" value="{{$categories->description}}">
            </div>
            <input type="submit" name="time" class="btn btn-primary">
        </form>
    </div>
@endsection
