@extends('layouts.template')
@section('content')
    <div class=" w-50 mb-3 p-5">
        <h4 class="mt-3">Tambah Data</h4>
        <form method="POST" class="mt-5" action="{{ url('/store-role') }}">
            @csrf
            <div class="mb-3">
                <div class="mb-3">
                    <input type="hidden" name="role_id" value="{{ $role ? $role->id : 0 }}">
                    <label class="form-label">Role</label>
                    <input type="text" name="role_name" required value="{{ $role ? $role->name : '' }}"
                        class="form-control">
                    <label class="form-label">Permission</label>
                    <ul class="list-group">
                        @forelse ($permissions as $key => $permission)
                            <li class="list-group-item">
                                <input class="form-check-input me-1"
                                    @if ($role != null && isset($role->permissions[$key]) && $role->permissions[$key]->name == $permission->name) checked="checked" @endif type="checkbox"
                                    name="permissions[]" value="{{ $permission->name }}" id="{{ $permission->id }}">
                                <label class="form-check-label" for="{{ $permission->id }}">{{ $permission->name }}</label>
                            </li>
                        @empty
                            <div class="alert alert-danger" role="alert">
                                Permission belum ditambahkan
                            </div>
                        @endforelse
                    </ul>
                </div>
            </div>
            @if (count($permissions) > 0)
                <button type="submit" class="btn btn-primary">Submit</button>
            @else
                <a href="{{ url('/create-permission') }}" class="btn btn-primary">Tambah permission</a>
            @endif
        </form>
    </div>
@endsection
