@extends('layouts.template')
@section('content')
    <div class=" w-50 mb-3 p-5">
        <h4 class="mt-3">Tambah Data</h4>
        <form method="POST" class="mt-5" action="{{ url('/store-user') }}">
            @csrf
            <div class="mb-3">
                <div class="mb-3">
                    <input type="hidden" name="id" value="{{ $user ? $user->id : 0 }}">
                    <label class="form-label">Nama</label>
                    <input type="text" required name="u_name" value="{{ $user != null ? $user->name : '' }}"
                        class="form-control">
                    <label class="form-label">Email</label>
                    <input type="email" required name="u_email" value="{{ $user != null ? $user->email : '' }}"
                        class="form-control">
                    <label class="form-label">Password</label>
                    <input type="password" required name="u_password"
                        class="form-control">
                    <label class="form-label">Role</label>
                    <select class="form-select" required name="role_id" id="">
                        <option disabled>pilih</option>
                        @forelse ($roles as $key => $role)
                            <option value="{{ $role->id }}"
                                @if ($role->id == ($user != null ? $user->roles[0]->id : 0)) selected="selected" @endif>
                                {{ $role->name }}</option>
                        @empty
                            <option value="">data tidak ditemukan</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
