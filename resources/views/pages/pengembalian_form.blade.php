@extends('layouts.template')
@section('content')
    <div class=" w-50 mb-3 p-5">
        <h4 class="mt-3">Tambah Data</h4>
        <form method="POST" class="mt-5" action="{{ url('/post-pengembalian') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Customer</label>
                <select class="form-select" required name="customer_id" id="">
                    <option disabled>pilih</option>
                    @forelse ($customers as $key => $cust)
                        <option value="{{ $cust->id }}"
                            @if ($cust->id == old('customer_id', $data->customer_id ?? 0)) selected="selected" @endif>
                            {{ $cust->name }}</option>
                    @empty
                        <option value="">data tidak ditemukan</option>
                    @endforelse
                </select>
                <label class="form-label">Komentar</label>
                <textarea name="comment" id="" required class="form-control" cols="10" rows="2">{{ $data ? $data->comment : '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
