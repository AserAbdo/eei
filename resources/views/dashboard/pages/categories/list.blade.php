@extends('dashboard.app')

@section('content')
    <br>
    <h3>Categories List</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">image</th>
                    <th scope="col">Icon</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($caregories as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>

                            <span
                                class="table-inner-text">{{ \Carbon\Carbon::parse($item['created_at'])->format('d M') }}</span>
                        </td>
                        <td>{{ $item['description'] }}</td>
                        <td>
                            <img style="width: 100px ; height:100px" src="{{ asset('storage/' . $item->image) }}" alt="">
                        </td>
                        <td>
                            <img style="width: 100px ; height:100px" src="{{ asset('storage/' . $item->icon) }}" alt="">
                        </td>
                        <td class="text-center">
                            <a class="btn btn-info" href="{{route('categories.edit' , $item['id'])}}"><i class="fa-solid fa-pen"></i></a>
                            <form action="{{ route('categories.destroy', $item['id']) }}" method="POST"
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
@endsection
