@extends('dashboard.app')

@section('content')
    <div class="table-responsive">
        <br>
        <h3>Staff List</h3>
        <a style="float: right;margin:20px" href="{{ route('staff.create') }}"><button class="btn btn-primary"><i
            class="fa-solid fa-plus"></i> Add</button></a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th class="text-center" scope="col">Role</th>
                    <th class="text-center" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>
                            <span class="table-inner-text">{{ $user->email }}</span>
                        </td>
                        <td class="text-center">
                            @if ($user->is_admin == 1)
                                <span class="text-danger">Admin</span>
                            @else
                                <span class="text-warning">User</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btn-sm"  style="{{ $user->is_admin == 1 ? 'cursor:not-allowed' : 'pointer' }}">
                                Assign Admin
                            </a>
                            <form action="{{ route('staff.destroy', $user['id']) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"  type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
