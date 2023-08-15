@extends('layouts.template')
@section('content')
    <div class="container mt-5 w-100">
        <div class="row justify-content-between">
            <div class="col">
                <h4>Pengembalian</h4>
            </div>
            <div class="col">
                <a href="{{ url('/create-pengembalian') }}" class="btn btn-sm btn-primary">Tambah data</a>
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
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($datas as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->comment ?? "" }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <div class="">
                                    <a href="{{ url('/edit-pengembalian/' . $data->id) }}"
                                        class="btn btn-sm btn-warning">edit</a>
                                </div>
                                <div class="">
                                    <form action="{{ url('/delete-pengembalian/' . $data->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">data tidak ada</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $datas->links() }}
    </div>
@endsection
