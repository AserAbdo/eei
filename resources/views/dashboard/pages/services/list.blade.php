@extends('dashboard.app')

@section('content')
    <br>
    <a class="btn btn-primary" style="float: right" href="{{route('service.create')}}"><i class="fa fa-plus"></i>Add</a>
    <br>
    @if (count($all) == 0)
        <div style="width: 100%;height:100% ; display:flex ; justify-content :center ; align-items :center;margin-top:30px">
            <br>
            <h1>List Is Empty</h1>
        </div>
    @else
        <h3>Services List</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        {{-- <th scope="col">description</th> --}}
                        <th scope="col">pakage size</th>
                        {{-- <th scope="col">content</th> --}}
                        <th scope="col">status</th>
                        <th scope="col">image</th>
                        <th scope="col">Date</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            {{-- <td>{{ $item['description'] }}</td> --}}
                            <td>{{ $item['pakage_size'] }} sqm</td>
                            {{-- <td>{{ $item['content'] }}</td> --}}
                            <td>{{ $item['status'] }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item['image']) }}" alt="item Image" width="100"
                                    height="100">
                            </td>

                            <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d M Y') }}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{ route('service.edit', $item['id']) }}"><i
                                        class="fa-solid fa-pen"></i></a>
                                <form action="{{ route('service.destroy', $item['id']) }}" method="POST"
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
    @endif

@endsection
