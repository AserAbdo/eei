@extends('dashboard.app')

@section('content')
    <br>
    
    @if (count($item) == 0)
        <div style="width: 100%;height:100% ; display:flex ; justify-content :center ; align-items :center;margin-top:30px">
            <br>
            <h1>List Is Empty</h1>
        </div>
    @else
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
                    @foreach ($item as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>

                                <span
                                    class="table-inner-text">{{ \Carbon\Carbon::parse($item['created_at'])->format('d M') }}</span>
                            </td>
                            <td>{{ $item['description'] }}</td>
                            <td>
                                <img style="width: 100px ; height:100px" src="{{ asset('storage/' . $item->image) }}"
                                    alt="">
                            </td>
                            <td>
                                <img style="width: 100px ; height:100px" src="{{ asset('storage/' . $item->icon) }}"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{ route('categories.restore', $item['id']) }}">Restore</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection
