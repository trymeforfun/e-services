@extends('layouts.template')
@section('content')
    <div class="container mt-5 w-100">
        <div class="row justify-content-between">
            <div class="col">
                <h4>Order Jasa</h4>
            </div>
            <div class="col">
                <a href="{{ url('/create-customer') }}" class="btn btn-sm btn-primary">Tambah data</a>
            </div>
        </div>
        <form action="" method="get">
            @include('partials.filter_components')
        </form>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Nama Customer</th>
                    <th scope="col">Tanggal Order</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Brand Sepatu</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Minus</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->order_date }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->shoe_brand }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->color }}</td>
                        <td>{{ $customer->size }}</td>
                        <td>{{ $customer->minus }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <div class="">
                                    <a href="{{ url('/edit-customer/' . $customer->id) }}"
                                        class="btn btn-sm btn-warning">edit</a>
                                </div>
                                <div class="">
                                    <form action="{{ url('/delete-customer/' . $customer->id) }}" method="post">
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

        {{ $customers->links() }}
    </div>
@endsection
