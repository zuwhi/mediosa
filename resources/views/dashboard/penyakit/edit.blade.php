@extends('layouts.main')
@section('content')
     


    <h2>Tambah data penyakit baru</h2>
    <form action="{{ route('penyakit.update', $penyakit->id) }}" method="post" class="[&>input]:bg-transparent">
        @csrf
        @method('patch')
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $penyakit->nama }}" required> <br>
        <label for="solusi">Solusi</label>
        <textarea name="solusi" id="solusi" cols="30" rows="10">{{ $penyakit->solusi }}</textarea>
        <label for="lokasi_tubuh">Lokasi</label>
        <input type="text" name="lokasi_tubuh" id="lokasi_tubuh" value="{{ $penyakit->lokasi_tubuh }}"> <br>
        <input type="submit" value="Simpan" class="underline">
    </form>
@endsection
