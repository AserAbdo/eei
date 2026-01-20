@extends('dashboard.app')

@section('content')
    <div class="main-content">

        <div class="table-responsive settings-form">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <a style="float: right;margin:20px" href="{{ route('upload.media') }}"><button class="btn btn-primary"><i
                        class="fa-solid fa-plus"></i> Add</button></a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gallery as $item)
                        <tr>
                            <td>{{ $item->name}}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->title) }}" alt="{{ $item->file_name }}"
                                    style="width: 100px;height: 100px;">
                            </td>
                            <td class="text-center">
                                {{-- <a href="{{ route('update.media', $item->id) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-pen"></i></a> --}}
                                <form action="{{ route('delete.media', $item->id) }}" method="POST"
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
