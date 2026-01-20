@extends('dashboard.app')

@section('content')
    <div class="main-content">
        <div class="table-responsive settings-form">
            <a style="float: right;margin:20px" href="{{ route('media.gallery.categories.create') }}"><button class="btn btn-primary"><i
                        class="fa-solid fa-plus"></i> Add</button></a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->title }}</td>
                            <td>
                                <span class="table-inner-text">{{ $category->description }}</span>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{route('category.edit' , $category['id'])}}"><i class="fa-solid fa-pen"></i></a>
                                <form action="{{ route('category.destroy', $category['id']) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
