@extends('layouts.main')
@section('content')
     


    <h2>Tambah data penyakit baru</h2>
    <form action="{{ route('penyakit.store') }}" method="post" class="[&>input]:bg-transparent">
        @csrf
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required> <br>
        <label for="solusi">Solusi</label>
        <textarea name="solusi" id="solusi" cols="30" rows="10"></textarea>
        <label for="lokasi_tubuh">Lokasi</label>
        <input type="text" name="lokasi_tubuh" id="lokasi_tubuh"> <br>
        <input type="submit" value="Simpan" class="underline">
    </form>

    <br>
    <br>
    <br>
    <table class="border border-base-content">
        <tr>
            <td>#</td>
            <td>Nama</td>
            <td>Solusi</td>
            <td>Lokasi</td>
            <td>Aksi</td>
        </tr>
        @foreach ($penyakits as $penyakit)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $penyakit->nama }}</td>
                <td>{{ $penyakit->solusi }}</td>
                <td>{{ $penyakit->lokasi_tubuh }}</td>
                <td>
                    <a href="{{ route('penyakit.edit', $penyakit->id) }}" class="underline">Edit</a>
                    <form action="{{ route('penyakit.destroy', $penyakit->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="underline cursor-pointer" value="Hapus">
                    </form>
                </td>
            </tr>
        @endforeach
    @endsection
