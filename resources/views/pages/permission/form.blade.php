@extends('layouts.template')
@section('content')
    <div class=" w-50 mb-3 p-5">
        <h4 class="mt-3">Tambah Data</h4>
        <form method="POST" class="mt-5" action="{{ url('/store-permission') }}">
            @csrf
            <div class="mb-3">
                <div class="mb-3">
                    <input type="hidden" name="permission_id" value="{{ $permission ? $permission->id : 0 }}">
                    <label class="form-label">Nama Permission</label>
                    <input type="text" required name="permission_name" value="{{ $permission ? $permission->name : '' }}"
                        class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
