@extends('layouts.template')
@section('content')
    <div class="container mt-5 w-100">
        <div class="row justify-content-between">
            <div class="col">
                <h4>Penjemputan</h4>
            </div>
            <div class="col">
                <a href="{{ url('/create-penjemputan') }}" class="btn btn-sm btn-primary">Tambah data</a>
            </div>
        </div>
        <form action="" method="get">
            @include('partials.filter_components')
        </form>
        <table class="table mt-4">
            <thead>
                <tr>
                <th scope="col">Nama Customer</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Brand Sepatu</th>
                    <th scope="col">Tanggal Penjemputan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datas as $data)
                    <tr>
                        <td>{{ $data->customer_name }}</td>
                        <td>{{ $data->customer_phone }}</td>
                        <td>{{ $data->shoe_brand }}</td>
                        <td>{{ $data->pickup_date }}</td>
                        <td>Penjemputan</td>
                        <td>
                            <div class="d-flex gap-2">
                                <div class="">
                                    <a href="{{ url('/edit-penjemputan/' . $data->id) }}"
                                        class="btn btn-sm btn-warning">edit</a>
                                </div>
                                <div class="">
                                    <form action="{{ url('/delete-penjemputan/' . $data->id) }}" method="post">
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

        {{ $datas->links() }}
    </div>
@endsection
