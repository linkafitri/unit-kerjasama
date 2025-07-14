@extends('adminlte::page')

@section('title', 'List Menu')

@section('plugins.Select2', true)

@section('content_header')
<h1 class="m-0 text-dark"></h1>
@stop


@section('content')
<div class="container">
    <h2>Daftar Visi & Misi</h2>
    <a href="{{ route('kui.visimisi.edit', $data->first()->id ?? '') }}" class="btn btn-warning mb-3">Edit Data</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Halaman</th>
                <th>Slug</th>
                <!-- <th>Aksi</th> -->
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->namahalaman }}</td>
                    <td>{{ $item->slug }}</td>
                    <!-- <td>
                        <a href="{{ route('kui.visimisi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kui.visimisi.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td> -->
                </tr>
            @empty
                <tr><td colspan="4">Belum ada data.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection