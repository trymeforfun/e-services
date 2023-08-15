@extends('layouts.template')
@section('content')
    <div class=" w-50 mb-3 p-5">
        <h4 class="mt-3">Tambah Data</h4>
        <form method="POST" class="mt-5" action="{{ url('/post-customer') }}">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="customer_id" value="{{ $customer ? $customer->id : 0 }}">
                <label class="form-label">Nama Customer</label>
                <input type="text" name="name" required value="{{ $customer ? $customer->name : '' }}" class="form-control">
                <label class="form-label">No. HP</label>
                <input type="text" name="phone" required value="{{ $customer ? $customer->phone : '' }}" class="form-control">
                <label class="form-label">Brand Sepatu</label>
                <input type="text" name="shoe_brand" required value="{{ $customer ? $customer->shoe_brand : '' }}"
                    class="form-control">
                <label class="form-label">Warna</label>
                <input type="text" name="color" required value="{{ $customer ? $customer->color : '' }}" class="form-control">
                <label class="form-label">Ukuran Sepatu</label>
                <input type="text" name="size" required value="{{ $customer ? $customer->size : '' }}" class="form-control">
                <label class="form-label">Tanggal Order</label>
                <input type="date" name="order_date" required value="{{ $customer ? $customer->order_date : '' }}"
                    class="form-control">
                <label class="form-label">Alamat</label>
                <textarea name="address" id="" required class="form-control"
                    cols="10" rows="2">{{ $customer ? $customer->address : '' }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
