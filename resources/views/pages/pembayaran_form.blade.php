@extends('layouts.template')
@section('content')
    <div class=" w-50 mb-3 p-5">
        <h4 class="mt-3">Tambah Data Pembayaran</h4>
        <form method="POST" class="mt-5" action="{{ url('/post-pembayaran') }}">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="pembayaran_id" value="{{ $data ? $data->id : 0 }}">
                <label class="form-label">Customer</label>
                <select class="form-select" required name="bill_to" id="">
                    <option  disabled>pilih</option>
                    @forelse ($customers as $key => $cust)
                        <option value="{{ $cust->id }}"
                            @if($cust->id == old('bill_to',$data->bill_to))
                                selected="selected"
                            @endif
                            >{{ $cust->name }}</option>
                    @empty
                        <option value="">data tidak ditemukan</option>
                    @endforelse
                </select>
                <label class="form-label">Jumlah</label>
                <input type="text" required name="many" value="{{ $data ? $data->many : '' }}" class="form-control">
                <label class="form-label">Harga</label>
                <input type="text" required name="price" value="{{ $data ? $data->price : '' }}" class="form-control">
                <label class="form-label">Jumlah Jatuh Tempo</label>
                <input type="text" required name="amount_due" value="{{ $data ? $data->amount_due : '' }}"
                    class="form-control">
                <label class="form-label">Diskon</label>
                <input type="text" required name="discount" value="{{ $data ? $data->discount : '' }}"
                    class="form-control">
                <label class="form-label">Bank</label>
                <input type="text" required name="bank" value="{{ $data ? $data->bank : '' }}" class="form-control">
                <label class="form-label">Tanggal Jatuh Tempo</label>
                <input type="date" required name="due_date" value="{{ $data ? $data->due_date : '' }}"
                    class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
