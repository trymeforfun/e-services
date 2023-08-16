@extends('layouts.template')
@section('content')
    <div class="container mt-5 w-100">
        <div class="row justify-content-between">
            <div class="col">
                <h4>Roles</h4>
            </div>
            <div class="col">
                <a href="{{ url('/create-role') }}" class="btn btn-sm btn-primary">Tambah data</a>
            </div>
        </div>
        <form action="" method="get">
            @include('partials.filter_components')
        </form>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <div class="">
                                    <a href="{{ url('/edit-role/' . $role->id) }}"
                                        class="btn btn-sm btn-warning">edit</a>
                                </div>
                                <div class="">
                                    <form action="{{ url('/delete-role/' . $role->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">data tidak ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $roles->links() }}
    </div>
@endsection
