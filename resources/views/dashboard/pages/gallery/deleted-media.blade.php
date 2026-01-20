@extends('dashboard.app')

@section('content')
    <div class="main-content">
        <div class="table-responsive settings-form">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gallery as $item)
                        <tr>
                            <td>{{ $item['category']['title'] ?? 'No category' }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->title) }}" alt="{{ $item->file_name }}"
                                    style="width: 100px;height: 100px;">
                            </td>
                            <td class="text-center">
                                <a href="{{ route('gallery.restore', $item->id) }}">
                                    <button class="btn btn-primary">Restore</button>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
