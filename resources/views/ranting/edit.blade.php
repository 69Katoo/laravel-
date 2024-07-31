@extends('layout')

@section('content')
    <h1>Edit Ranting</h1>

    <form action="{{ route('ranting.update', $ranting->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="ranting">ranting</label>
            <input type="text" name="ranting" id="ranting" placeholder="Aktifitas" value="{{ $ranting->ranting }}" required>
        </div>
        <div>
            <label for="ranting">Keterangan</label>
            <textarea name="keterangan" id="keterangan" placeholder="Keterangan Aktifitas" required>{{ $ranting->keterangan }}</textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection