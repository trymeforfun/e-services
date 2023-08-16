@extends('layouts.template')
@section('content')
    <div class=" w-50 mb-3 p-5">
        <h4 class="mt-3">Tambah Data</h4>
        <form method="POST" class="mt-5" action="{{ url('/post-pengerjaan') }}">
            @csrf
            <div class="mb-3">
                <div class="mb-3">
                    <input type="hidden" name="pengerjaan_id" value="{{ $data ? $data->id : 0 }}">
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
                    <label class="form-label">Treatment</label>
                    <input type="text" required name="comment" value="{{ $data ? $data->comment : '' }}"
                        class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
