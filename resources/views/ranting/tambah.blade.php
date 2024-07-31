@extends('layout')

@section('content')
    <h1>Tambah Ranting</h1>

    <form action="{{ route('ranting.store') }}" method="post">
        @csrf
        <div>
            <label for="ranting">ranting</label>
            <input type="text" name="ranting" id="ranting" placeholder="Aktifitas" required>
        </div>
        <div>
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" placeholder="Keterangan Aktifitas" required></textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection