@extends('dashboard.app')

@section('content')
    <br>
    <h3>Deleted Partnsers</h3>
    <div class="table-responsive">
        <a style="float: right;margin:20px" href="{{ route('partners.create') }}"><button class="btn btn-primary"><i
            class="fa-solid fa-plus"></i> Add</button></a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Partner Name</th>
                    <th scope="col">Img</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deleted as $partner)
                    <tr>
                        <td>{{$partner->name}}</td>
                        <td>
                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="" style="width: 100px; height: 100px;">
                        </td>
                        <td class="text-center">
                            <form action="{{ route('partners.restore', $partner->id) }}" method="POST"
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
